<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $relatedBooks = [
            [
                'id' => 1,
                'title' => 'Mudah Membuat Web Bagi Pemula',
                'image' => 'book-cover.jpg'
            ],
            // Add more books as needed
        ];
        
        return view('landing', compact('relatedBooks'));

    }
    public function book1()
    {
        return view('books.book1');
    }

    public function book2()
    {
        return view('books.book2');
    }

    public function book3()
    {
        return view('books.book3');
    }

    public function book4()
    {
        return view('books.book4');
    }


    
}

