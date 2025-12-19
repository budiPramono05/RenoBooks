<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $qty  = (int) $request->qty;

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['qty'] += $qty;
        } else {
            $cart[$id] = [
                'book_id' => $book->id,
                'title'   => $book->title,
                'author'  => $book->author,
                'price'   => $book->price,
                'qty'     => $qty,
                'cover'   => $book->cover_image
            ];
        }

        session()->put('cart', $cart);

        // 🔥 HITUNG TOTAL CART
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }
        session()->put('cart_total', $total);

        return redirect()->back()->with('success', 'Book added to cart');
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);
        $total = session()->get('cart_total', 0);

        return view('checkout', compact('cart', 'total'));
    }
}
