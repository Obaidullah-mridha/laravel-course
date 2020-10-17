<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function store(Request $request){
    	//echo $request->file('image')->getClientOriginalName();
    	//echo $request->file('image')->extension();
    	$path=$request->file('image')->store('images');
    	return $path;
    }
    public function files(){
 echo $url=Storage::url('images/aMgiTFY0yPDNxzHfV3zO7Se1EFApEMMICsxzuAeu.webp');
    	echo "<img src='$url'>";
    }
    public function delete(){
    	Storage::delete('images/aMgiTFY0yPDNxzHfV3zO7Se1EFApEMMICsxzuAeu.webp');
    }
}
