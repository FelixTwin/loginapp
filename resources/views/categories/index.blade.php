@extends('layouts.app')

@section('content')
    <div class="container">
<h2>Available Categories</h2>

<a href="{{route('categories.create')}}" class="btn btn-primary">+</a>
   <div class="row" style="margin-left: 250px">
       @foreach($categories as $category)
       <div class="col-4">
           <div class="card">
               <div class="card-header">
                {{$category->name}}
               </div>
               <div class="card-body">
                <img src="{{asset('uploads/'.$category->category_pic)}}" />
               </div>
               <div class="card-footer ">

                    <td><form action="{{route('categories.destroy',$category)}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit"value="delete" class="btn btn-link"/>
                        </form></td> </tr>

               </div>
           </div>

       </div>
       @endforeach
   </div>
    </div>



@endsection
