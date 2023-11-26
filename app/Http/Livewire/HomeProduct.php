<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\product;
class HomeProduct extends Component
{
    public function quickView($id)
    {
        $product = Product::find($id);
        $this->emit('showquickView', $product);
    }
    public function addToCart($id)
    {
    $product = Product::find($id);
    $quantity_Product = $product->quantity;
    $cart = session()->get('cart', []);
    if(!isset($cart[$id])) {
        $cart[$id] = [
            // check quantity of product 
            "id" => $product->id,
            "name" => $product->name,
            "quantity" =>0,
            "price" => $product->export_price,
            "image" => $product->image
        ];
    } else {    
        $cart[$id]['quantity'] += 1 ;
        if($cart[$id]['quantity'] > $quantity_Product){
            $cart[$id]['quantity'] = $quantity_Product;
        }
    }
    session()->put('cart', $cart);
    $this->emit('showCart', $cart);
}
    public function render()
    {
        $productLastest = product::orderBy('id','desc')->take(8)->get();
        return view('livewire.home-product',['productLastest'=>$productLastest]);
    }
}
