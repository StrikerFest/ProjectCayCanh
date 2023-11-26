<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_catergory;
use App\Models\product;
use App\Models\customer;
use App\Models\order;
use App\Models\orders_details;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    // registerCustomer
    public function registerCustomer(Request $request)
    {
       
        // validate
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6',
            'phone' => 'required|min:10|max:11'
        ]);
        $customer = new customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->phone = $request->phone;
        $customer->save();
        return redirect()->back()->with('success', 'Register successfully!');
    }
    // loginCustomer
    public function loginCustomer(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $customer = customer::where('email',$request->email)->where('password',$request->password)->first();
        if ($customer) {
            session()->put('customer',$customer);
            return redirect("")->with('success', 'Login successfully!');
        }else{
            return redirect()->back()->with('error', 'Login failed!');
        }
    }
    // logoutCustomer
    public function logoutCustomer()
    {
        session()->forget('customer');
        return redirect("")->with('success', 'Logout successfully!');
    }
    // index
    public function index()
    {
       // get  6 product latest
        $productLastest = product::orderBy('id','desc')->take(6)->get();
       // get 4 product latest
        $productLastest2 = product::orderBy('id','desc')->take(4)->get(); 
        return view('customer.home',['productLastest'=>$productLastest],['productLastest2'=>$productLastest2]);
    }
    // single product
    public function singleProduct($id)
    {
        $product = product::find($id);
        // get category by id
        $category = product_catergory::find($product->id_category);
        // get 6 product by category except product current
        $productByCategory = product::where('id_category',$category->id)->where('id','<>',$product->id)->take(6)->get();
        return view('customer.single',['product'=>$product],['productByCategory'=>$productByCategory]);
    }

    // add to cart
    public function addToCart($id)
    {
        $product = product::find($id);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart', []);
        // if product already exists in cart
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->export_price,
                "image" => $product->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    // all product by category
    public function allProduct($id)
    {
        $product = Product::where('id_category',$id)->paginate(12);
        return view('customer.allproduct',['product'=>$product]);
    }
    // order
    public function order(Request $request)
    {
       
        if (session()->has('customer')) {
            $customer = session()->get('customer');
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:10|max:11',
                'province' => 'required',
                'district' => 'required',
                'ward' => 'required',
                'address' => 'required',
            ]);
            $order = new order;
            $order->customer_id = $customer->id;
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->province = $request->province;
            $order->district = $request->district;
            $order->ward = $request->ward;
            $order->status = 0;
            $order->save();
            $cart = session()->get('cart');
            foreach ($cart as $key => $value) {
                $order_detail = new orders_details;
                $order_detail->order_id = $order->id;
                $order_detail->product_id = $value['id'];
                $order_detail->quantity = $value['quantity'];
                $order_detail->price = $value['price'];
                $order_detail->save();
            }
            session()->forget('cart');
            return redirect()->back()->with('success', 'Order successfully!');
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:11',
            'address' => 'required',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
        ]);
        $order = new order;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->province = $request->province;
        $order->district = $request->district;
        $order->ward = $request->ward;
        $order->status = 0;
        $order->save();
        $cart = session()->get('cart');
        foreach ($cart as $key => $value) {
            $order_detail = new orders_details;
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $value['id'];
            $order_detail->quantity = $value['quantity'];
            $order_detail->price = $value['price'];
            $order_detail->save();
        }
        session()->forget('cart');
        return redirect()->back()->with('success', 'Order successfully!');
    }
    // all order
    public function allOrder()
    {
        // select order join customer fomat created_at M d, Y
        $order = order::leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
        ->select('orders.*', 'customers.name as customer_name')
        ->orderBy('orders.id', 'desc')
        ->paginate(15);
        return view('admin.orders',['order'=>$order]);
    }
    // orderDetails by order id
    public function orderDetails($id)
    {
        // select order join customer fomat created_at M d, Y
        $order = order::leftJoin('customers', 'orders.customer_id', '=', 'customers.id')
        ->select('orders.*', 'customers.name as customer_name')
        ->where('orders.id',$id)
        ->first();
        // select order_details join product
        $order_details = orders_details::leftJoin('product', 'orders_details.product_id', '=', 'product.id')
        ->select('orders_details.*', 'product.name as product_name')
        ->where('orders_details.order_id',$id)
        ->get();
        // count total price
        $total_price = 0;
        foreach ($order_details as $key => $value) {
            $total_price += $value->price * $value->quantity;
        }
        return view('admin.vieworderdetail',['order'=>$order,'total_price'=>$total_price],['order_details'=>$order_details]);
    }
    // update status order
    public function updateStatusOrder(Request $request)
    {
        $order = order::find($request->id);
        $current_status = $order->Status;
        if ($current_status==1) {
            $order->Status = 2;
            $order->save();
            return redirect('/allorder')->with('success', 'Update status successfully!');
        } else {
            $order->Status = 1;
            $order->save();
            return redirect('/allorder')->with('success', 'Update status successfully!');
        }
    }
    // updateStatusOrderCancel
    public function updateStatusOrderCancel(Request $request)
    {
        $order = order::find($request->id);
        $order->Status = 3;
        $order->save();
        return redirect('/allorder')->with('success', 'Update status successfully!');
    }
    // myaccount
    public function myAccount()
    {
        // get id customer from session
        $customer = session()->get('customer');
        $customer_id = $customer->id;
        // select order of customer using order_details by customers 
        $order = DB::table('orders')
            ->leftJoin('orders_details', 'orders_details.id', '=', 'orders.id')
            ->where('orders.customer_id', '=', $customer_id)
            ->groupBy('orders.id')
            ->get();
        dd($order);
       return view('customer.myacount',['order'=>$order]);
    }
}
