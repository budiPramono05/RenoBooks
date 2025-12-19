<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('author', 'like', '%' . $request->search . '%');
        }

        $books = $query->get();

        return view('booklist', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('bookdetail', compact('book'));
    }
}
