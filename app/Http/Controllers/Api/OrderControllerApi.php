<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Order::all();
        return $orders->toJson();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $order = new Order();
        $order->user_id = $request->user_id;
        $order->date = $request->date;
        $order->status = "pending";
        $order->total_amount = $request->total_amount;
        $items = $request->input("order_details");
        $order->save();


        foreach($items as $item){
          $order->orderDetails()->create(

                [   'order_id' =>$order->id,
                    'product_id' => $item["product_id"],
                    'quantity' => $item["quantity"],
                    'price' => $item["price"],
                    'name' =>$item["name"],
                                  ]);
        }

        $order->order_details = $order->orderDetails()->get();
        $response["code"] = 201;
        $response["order"] = $order;
        return $response;
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
