<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function create(){
    return view('user.register');
   }
   public function store(UserRequest $request){
   // $request->validate([
      //'name' => 'required|string|min:3',
      //'email' => 'required|email',
     // 'password' => 'required|numeric',
    //]);
    //return $data;
   // echo $request->input('email');
   return $request->all();
   }
   
}
