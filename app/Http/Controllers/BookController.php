<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
        public function index(Request $request)
    {
        $title = $request->query('title');
        $isbn = $request->query('isbn');
        
        $book = Book::query();

        if ($title) {
            $book->where('title', 'like', '%'. $title. '%');
        }

        if ($isbn) {
            $book->where('isbn', 'like', '%'. $isbn. '%');
        }

        $books = $book->paginate(5);
        return response()->json($books);
    }
}
