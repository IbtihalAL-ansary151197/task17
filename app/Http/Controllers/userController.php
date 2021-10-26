<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
     
 public function create(){
    return view(" form");


 } 


 public function store( Request $request){
   echo 'post Data';

//   dd($request);
//   echo $request->name;
//   dd( $request->all());
//   dd( $request->except(['name']));
//   dd( $request->only(['name']));
//   dd( $request->has(['name']));
//   dd( $request->method());
 


$this->validate($request,[
"name"    => " required",
"email"   => "required|email",
"password" => "required|min:6",
"linkedin" => "required|url",
"address"  => "required|min:10",
"gender"   => "required",


 ]);
 dd('Valid Data');

 }


}