<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user',
        'item_amount',
        'price',
        'status'
    ];

    public function buyer(){
        return $this->belongsTo(User::class,'user','id');
    }

    public function products(){
        return $this->belongsToMany(Product::class,'orders_products','order','post');
    }
}
