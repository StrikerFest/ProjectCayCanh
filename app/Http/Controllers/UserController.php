<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\order;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    // return view('admin.index');
    //register for Admin
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        return redirect()->intended('/admin/register')
                        ->withSuccess('Signed in');

    }
    // login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin')
                        ->withSuccess('Signed in');
        }
        return redirect()->route('/admin');
    }
    public function index()
    {
        // count product
        $countProduct = product::count();
        // count customer
        $countCustomer = customer::count();
        // count order
        $CountOrder = order::count();
        // new customer
        $newCustomer = customer::orderBy('id','desc')->take(5)->get();
        // find top 10 product buyest
        $top10Product = DB::table('orders_details')
        ->join('product', 'orders_details.product_id', '=', 'product.id')
        ->select('product.name', 'product.image as image', DB::raw('count(orders_details.product_id) as total'))
        ->groupBy('product.id', 'product.name', 'product.image')
        ->orderBy('total', 'desc')
        ->take(10)
        ->get();
        // count order cancel
        $countOrderCancel = order::where('Status', 3)->count();
        // count order success
        $countOrderSuccess = order::where('Status', 2)->count();
        // count order processing
        $countOrderProcessing = order::where('Status', 1)->count();
        // count order pending
        $countOrderPending = order::where('Status', 0)->count();
        // count order total
        $countOrderTotal = order::count();

        // Check if countOrderTotal not empty
        if(!empty($countOrderTotal)){
            // percent order cancel
            $percentOrderCancel = round(($countOrderCancel/$countOrderTotal)*100,2);
            // percent order success
            $percentOrderSuccess =round(($countOrderSuccess/$countOrderTotal)*100,2);
            // percent order Pending
            $percentOrderPending = round(($countOrderPending/$countOrderTotal)*100,2) ;
            // percent order Processing
            $percentOrderProcessing = round(($countOrderProcessing/$countOrderTotal)*100,2);
        } else {
            $percentOrderCancel = 0;
            $percentOrderSuccess = 0;
            $percentOrderPending = 0;
            $percentOrderProcessing = 0;
        }

        // count order in month in year
        $countOrderInMonthInYear = order::whereYear('created_at', date('Y'))->whereMonth('created_at', date('m'))->count();
        //count order in month january
        $countOrderInMonthJanuary = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 1)->count();
        //count order in month february
        $countOrderInMonthFebruary = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 2)->count();
        //count order in month march
        $countOrderInMonthMarch = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 3)->count();
        //count order in month april
        $countOrderInMonthApril = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 4)->count();
        //count order in month may
        $countOrderInMonthMay = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 5)->count();
        //count order in month june
        $countOrderInMonthJune = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 6)->count();
        //count order in month july
        $countOrderInMonthJuly = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 7)->count();
        //count order in month august
        $countOrderInMonthAugust = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 8)->count();
        //count order in month september
        $countOrderInMonthSeptember = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 9)->count();
        //count order in month october
        $countOrderInMonthOctober = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 10)->count();
        //count order in month november
        $countOrderInMonthNovember = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 11)->count();
        //count order in month december
        $countOrderInMonthDecember = order::whereYear('created_at', date('Y'))->whereMonth('created_at', 12)->count();
        // count order in month in year
        $countOrderInMonthInYear = [$countOrderInMonthJanuary,$countOrderInMonthFebruary,$countOrderInMonthMarch,$countOrderInMonthApril,$countOrderInMonthMay,$countOrderInMonthJune,$countOrderInMonthJuly,$countOrderInMonthAugust,$countOrderInMonthSeptember,$countOrderInMonthOctober,$countOrderInMonthNovember,$countOrderInMonthDecember];
        $countorder = implode(',',$countOrderInMonthInYear);
        // count product has category id 1
        $countProductHasCategoryId1 = product::where('id_category',1)->count();
        // count product has category id 2
        $countProductHasCategoryId2 = product::where('id_category',2)->count();

        // count import_price * quantity product in january


        return view('admin.index',
        ['countProduct'=>$countProduct,
        'countCustomer'=>$countCustomer,
        'countOrder'=>$CountOrder,
        'newCustomer'=>$newCustomer,
        'top10Product'=>$top10Product,
        'percentOrderCancel'=>$percentOrderCancel,
        'percentOrderSuccess'=>$percentOrderSuccess,
        'percentOrderPending'=>$percentOrderPending,
        'percentOrderProcessing'=>$percentOrderProcessing,
        'countorder'=>$countorder,
        'countProductHasCategoryId1'=>$countProductHasCategoryId1,
        'countProductHasCategoryId2'=>$countProductHasCategoryId2,
        ]);
    }
}
