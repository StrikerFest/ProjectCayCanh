<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public $cart;
    public function render()
    {
        $this->cart = session()->get('cart', []);
        // count total price
        $total = 0;
        foreach ($this->cart as $details) {
            $total += $details['price'] * $details['quantity'];
        }
        return view('livewire.checkout', [
            'total' => $total
        ], [
            'cart' => $this->cart
        ]);
    }
}
