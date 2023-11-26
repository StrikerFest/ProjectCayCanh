<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_catergory;
use App\Models\product;
use Illuminate\View\View;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    // view 
    public function index()
    {
        $product = product::paginate(8);
        $productCategory = product_catergory::all();
        return view('admin.product', compact('product','productCategory'));
    }
    // add product category
    public function addProduct()
    {
        $productCategory = product_catergory::all();
        return view('admin.addNewProduct' , compact('productCategory'));
    }
    // add new product
    public function addNewProduct(Request $request)
    {
       
        $request ->validate([
            'id_category' => 'integer',
            'name' => 'required|string',
            'quantity'=>'required|int',
            'description'=>'required|string',
            'import_price'=>'required|string',
            'export_price'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);
          
        if($request->hasFile('image')){
            $completeFilename = $request -> file('image') ->getClientOriginalName();
            $filenameonly = pathinfo($completeFilename, PATHINFO_FILENAME);
            $extension = $request -> file('image') ->getClientOriginalExtension();
            $comPic = str_replace(' ','_',$filenameonly ).'_'.time().'.'.$extension;
            $path = $request-> file('image') ->storeAs('public/images', $comPic);
           }
          
        $data = Product::create([
            'id_category' => $request->id_category,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'import_price' => $request->import_price,
            'export_price' => $request->export_price,
            'image' => $comPic ,
           ]);
              return redirect()->back()->with('success','Product added successfully');
        
    }
    // update quantity = 0
    public function deleteProduct($id)
    {
        $product = product::find($id);
        $product->quantity = 0;
        $product->save();
        return redirect()->back()->with('success','Product deleted successfully');
    }
    // edit product by id from request
    public function editProduct(Request $request, $id)
    {
       
        // dd($request->all());
        $found = Product::find($id);
        if(!$found){
          return response()->json(['message'=>'Product not found'],404);
        }
        
      //  $input = $request->all();
      //  dd($input['name']);
      
    //    $validator = Validator::make($request->all(), [
    //     'id_category' => 'integer',
    //       'name' => 'required|string',
    //       'import_price'=>'required|string',
    //       'export_price'=>'required|string',
    //       'quantity'=>'required|string',
    //       'description'=>'required|string',
    //       'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //    ]);
    //    if($validator ->fails()){
    //     return response()->json(['success' => false, 'message' => $validator->errors()], 400);
    //    }
       if($request->hasFile('image')){
        $completeFilename = $request -> file('image') ->getClientOriginalName();
        $filenameonly = pathinfo($completeFilename, PATHINFO_FILENAME);
        $extension = $request -> file('image') ->getClientOriginalExtension();
        $comPic = str_replace(' ','_',$filenameonly ).'_'.time().'.'.$extension;
        $path = $request-> file('image') ->storeAs('public/images', $comPic);
       }else{
        $comPic = $found->image;
       }
       $found = Product::updateOrCreate(
        ['id' => $id],
        [
          'id_category' => $request->id_category,
          'name' => $request->name,
          'import_price' => $request->import_price,
          'export_price' => $request->export_price,
          'quantity' => $request->quantity,
          'description' => $request->description,
          'image' => $comPic ,
        ]);
        return redirect()->back()->with('success','Product updated successfully');
    }
       



    // get product by id
    public function getProductById($id)
    {
        $product = product::find($id);
        return view('admin.editProduct', compact('product'));
    }

    
}
