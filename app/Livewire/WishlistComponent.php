<?php

namespace App\Livewire;

use Livewire\Component;
// use Cart;
class WishlistComponent extends Component
{
    // public function destroy($rowId)
    // {
    //     Cart::instance('wishlist')->remove($rowId);
    //     notyf()
    //                 ->position('x', 'right')
    //                 ->position('y', 'top')
    //                 ->addSuccess('Removed from wishlist');
    // }
    public function render()
    {
        return view('livewire.wishlist-component')->layout('layouts.base');
    }
}
