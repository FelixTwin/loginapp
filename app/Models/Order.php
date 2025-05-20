<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['order_id',
        'user_id',
        'total_amount',
        'date',
        'status'];
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);

    }
}
