<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $books = Book::select('name', 'id', 'cost')->get()->map(function ($book){
            return [
                'name' => $book->name." ".$book->cost,
                'id' => $book->id
            ];
        })->toArray();

        return view('welcome', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
            'books' => ['required']
        ]);

        $books = $request['books'];

        $request['no_books'] = count($books);


        $amount = 0;

        foreach ($books as $item)
        {
            $book = Book::find($item);

            $amount += $book->cost;
        }

        $request['order_amount'] = $amount;

        $order = Order::create($request->all());

        $order->books()->attach($books);

        session(['status' => 'Order placed successfully']);

        return back();

//
    }
}
