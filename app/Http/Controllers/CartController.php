<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Reservations;
use Auth;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('pages.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => uniqid(),
            'name' => $request->name,
            'price' => $request->totalz,
            'user_id' => Auth::id(),
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
                'tier' => $request->tieR,
                'type' => $request->typE,
                'race_id' => $request->race,
                'tier_id' => $request->tier,
                'type_id' => $request->type,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function buy()
    {
        
        
        $content = \Cart::isEmpty();
        if($content == true)
        {
            return redirect()->back() ->with('alert', 'Cart is empty!');

        }
        else
        {  
            $cartItems = \Cart::getContent();
            foreach ($cartItems as $item)
            {
                $res = Reservations::create(['user_id' => Auth::id(), 'race_id' => $item->attributes->race_id,'category_id' => $item->attributes->tier_id,'type_id' => $item->attributes->type_id,'count' => $item->quantity,'price' => $item->price]);
            }

        }
        \Cart::clear();

        
        
        session()->flash('success', 'Thank you!');

        return redirect()->route('cart.list');
    }

}
