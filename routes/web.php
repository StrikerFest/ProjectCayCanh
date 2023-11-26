<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCatergoryController;
use Doctrine\DBAL\Driver\Middleware;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// register Admin
Route::get('/admin/register', function () {
    return view('admin.register');
});
// register Admin
Route::post('/admin/newAdmin', [UserController::class,'register']);
// using middleware to check if user is admin

// ===================================
// ---------------ADMIN---------------
// ===================================

// Admin login
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::post('/login', [UserController::class,'login']);

// Admin Routes
Route::get('/admin', [UserController::class,'index'])->middleware('admin');
Route::get('/admin/product', [ProductController::class,'index'])->middleware('admin');
Route::get('/admin/category', [ProductCatergoryController::class,'index'])->middleware('admin');

// ---------------Product Category---------------

// add product category
Route::post('/admin/addCategory', [ProductCatergoryController::class,'addCategory']);
// edit product category
Route::post('/admin/editCategory/{id}', [ProductCatergoryController::class,'editCategory']);
// view all categories

// ---------------Product---------------
// add product
Route::get('/admin/product/addProduct',[ProductController::class,'addProduct'])->middleware('admin');
// delete product
Route::get('/admin/product/deleteProduct/{id}',[ProductController::class,'deleteProduct']);
// edit product
Route::post('/admin/product/editProduct/{id}',[ProductController::class,'editProduct']);
// get product by id
Route::get('/admin/product/getProductById/{id}',[ProductController::class,'getProductById']);

Route::post('/admin/addNewProduct2',[ProductController::class,'addNewProduct']);

// ---------------Post---------------

// view post
Route::get('/admin/post', function () {
    return view('admin.post');
});

// ---------------Blog---------------

// addnew blog
Route::get('/admin/addNewBlog', function () {
    return view('admin.addNewBlog');
});
// upload image
Route::post('/upload/image', [blogController::class, 'upload']);
// add new blog
Route::post('/admin/addNewPost', [blogController::class, 'addNewBlog']);
// get image
Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/images' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

// ===================================
// ---------------CUSTOMER------------
// ===================================

// customer rRoutes
Route::get('',[HomeController::class,'index']);
// single product
Route::get('/single-product/{id}',[HomeController::class,'singleProduct']);
// cart
Route::get('/cart', function () {
    return view('customer.cart');
});
// checkout
Route::get('/checkout', function () {
    return view('customer.checkout');
});
// add to cart
Route::get('/add-to-cart/{id}',[HomeController::class,'addToCart']);
// view all product
Route::get('/all-product/{id}',[HomeController::class,'allProduct']);
// login customer
Route::get('/loginCustomer', function () {
    return view('customer.login');
});

// ---------------Login------------

// register customer
Route::post("/registerCustomer",[HomeController::class,'registerCustomer']);
// login customer
Route::post("/SignUpCustomer",[HomeController::class,'loginCustomer']);
// logout customer
Route::get("/logoutCustomer",[HomeController::class,'logoutCustomer']);
// my account
Route::get("/myAccount",[HomeController::class,'myAccount']);

// ---------------Order------------

// order
Route::post("/order",[HomeController::class,'order']);
// get order
Route::get("/allorder",[HomeController::class,'allOrder']);
// get orders details by order id
Route::get("/orderDetails/{id}",[HomeController::class,'orderDetails']);
// change status order
Route::get("/changeStatus/{id}",[HomeController::class,'updateStatusOrder']);
// change status order cancel
Route::get("/changeStatusCancel/{id}",[HomeController::class,'updateStatusOrderCancel']);
