<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index() {

        $book = Book::get();

        return response()->json(

            ['status' => true,
            'message' => 'Successfully parsing data Books',
            'data' => $book]
            
        );
    }
}
