<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$this->data['name']="Obaidullah mridha";
    	$this->data['roll']=8876654;
    	$this->data['subjects']=['Bangla','English','Math'];

    	return view('home.index',$this->data);
    }
    
}
