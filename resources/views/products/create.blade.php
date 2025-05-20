@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row mx-auto" >

            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        CREATE A NEW PRODUCT
                    </div>
                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')


                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('image') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control"  name="image">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control"  name="name">
                                </div>
                                </div>

                    <div class="row mb-3">
                        <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('category') }}</label>

                        <div class="col-md-6">
                            <select id="category" type="text" class="form-control"  name="category">
                                <option value="">--choose category--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                 @endforeach
                            </select>

                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="supplier" class="col-md-4 col-form-label text-md-end">{{ __('supplier') }}</label>

                            <div class="col-md-6">
                                <input id="supplier" type="text" class="form-control"  name="supplier">

                            </div>
                        </div>
                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control"  name="price">

                                </div>
                            </div>
                                <div class="row mb-3">
                                    <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('Quantity') }}</label>

                                    <div class="col-md-6">
                                        <input id="quantity" type="text" class="form-control"  name="quantity">

                                    </div>
                                </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </div>



@endsection
