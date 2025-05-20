@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row mx-auto" >

            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        CREATE A NEW USER
                    </div>
                    <div class="card-body">
                        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')


                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Choose Profile Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control"  name="profile_pic">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control"  name="name">
                                </div>
                                </div>

                    <div class="row mb-3">
                        <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="category" type="text" class="form-control"  name="email">


                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="supplier" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select name="role" class="form-control">
                                    <option value="admin">Administrator</option>
                                    <option value="supplier">Supplier</option>
                                </select>

                            </div>
                        </div>
                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control"  name="password">

                                </div>
                            </div>
                                <div class="row mb-3">
                                    <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('Telephone') }}</label>

                                    <div class="col-md-6">
                                        <input id="quantity" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]" class="form-control"  name="telephone">

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
