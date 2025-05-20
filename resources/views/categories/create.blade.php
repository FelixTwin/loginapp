@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row mx-auto" >

                <div class="col-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                         CREATE A NEW CATEGORY
                        </div>
                        <div class="card-body">
                          <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('POST')
                              <div class="row mb-3">
                                  <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                  <div class="col-md-6">
                                      <input id="name" type="text" class="form-control"  name="name">

                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="category_pic" class="col-md-4 col-form-label text-md-end">{{ __('Category Picture') }}</label>

                                  <div class="col-md-6">
                                      <input id="category_pic" type="file" class="form-control"  name="category_pic">

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
