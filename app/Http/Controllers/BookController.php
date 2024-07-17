<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $books = $book->get();
        return response()->json($books);;
    }
}
