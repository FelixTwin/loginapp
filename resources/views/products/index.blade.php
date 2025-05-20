@extends('layouts.app')
@section('content')
    <a href="{{route('products.create')}}" class="btn btn-primary">+</a>
<div class="table" style="">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Supplier</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)

        <tr>
            <th scope="row">1</th>
            <td><img src="{{asset('uploads/'.$product->image_location)}}" width="50" height="50"/> </td>
            <td>{{$product->name}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->supplier}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>
                <a href="{{route('products.edit',$product)}}">Edit</a>
            <td><form action="{{route('products.destroy',$product)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit"value="delete" class="btn btn-link"/>
                </form></td>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
    @endsection
