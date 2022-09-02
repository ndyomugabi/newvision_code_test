<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'email', 'phone_number', 'address', 'comments', 'order_amount', 'no_books'];

    public function books()
    {
        return $this->belongsToMany(Book::class,  'order_book', 'order_id', 'book_id');
    }
}
