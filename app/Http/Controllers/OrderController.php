<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        // Ambil order user yang sedang login
        $orders = Order::with('book')
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy(function ($order) {
                // grouping berdasarkan tanggal order (atau bisa grouping manual)
                return $order->created_at->format('Y-m-d H:i:s');
            });

        return view('orderhistory', compact('orders'));
    }
    
    public function store()
    {
        $cart = session()->get('cart');

        if (!$cart) {
            return redirect('/booklist');
        }

        foreach ($cart as $item) {
            Order::create([
                'user_id'     => Auth::id(),
                'book_id'     => $item['book_id'],
                'qty'         => $item['qty'],
                'total_price' => $item['price'] * $item['qty'],
                'status'      => 'pending'
            ]);

            Book::where('id', $item['book_id'])
                ->decrement('stock', $item['qty']);
        }

        session()->forget(['cart', 'cart_total']);

        return redirect('/orderhistory');
    }
}
