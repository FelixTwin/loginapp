@extends('layouts.app')
@section('content')
    <a href="{{route('users.create')}}" class="btn btn-primary">+</a>
<div class="table" style="">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Profile Pic</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>

            <th scope="col">Telephone</th>
            <th scope="col">Address</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

        <tr>
            <th scope="row">1</th>
            <td><img src="{{asset('uploads/'.$user->profile_pic_location)}}" width="50" height="50"/> </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>

            <td>{{$user->telephone}}</td>
            <td>{{$user->address}}</td>
            <td>
            @if(Auth::user()->role=='admin')
            <td><form action="{{route('users.destroy',$user)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit"value="delete" class="btn btn-link"/>
                </form></td>
            </td>
            @endif

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
    @endsection
