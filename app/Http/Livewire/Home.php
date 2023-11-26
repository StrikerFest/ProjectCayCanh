<?php

namespace App\Http\Livewire;
use App\Models\product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Home extends Component
{
    public $productLastest2;
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
    $i = 1;
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
        $this->productLastest2 = DB::table('product')->orderBy('id','desc')->take(6)->get();
        return view('livewire.home');
    }
}
