<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductControllerApi extends Controller
{
    public function index(){
        $products =Product::all();
        foreach($products as $product){
            $category = Category::all()->where('id','=',$product->category_id)->pluck("name");
            $product->category_id = $category[0];
        }
        return $products->toJson();
    }
}
