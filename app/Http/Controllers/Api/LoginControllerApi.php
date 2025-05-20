<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Illuminate\Auth\Passwords\createNewToken;

class LoginControllerApi extends Controller
{

    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $response["code"]="200";
            $response["user"]=Auth::user();
            return $response ;
        }
        else {
            $response["code"]="404";

            $response["message"]="invalid username or password";
            return $response;
        }

    }

    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->role = "client";

        $user->save();
        $response['code']=201;
        $response['user']=$user;

        return $response;


    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
