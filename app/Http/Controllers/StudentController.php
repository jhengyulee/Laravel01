<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    // public function index($name,$num){
        
    //     $data=[
    //     'name'=>$name,
    //     'num'=>$num
    //     ];

    //     return view('student',['data' => $data]);
    // }

    public function index(){
        dd("hello student controller");
    }

    public function getByUrl(request $request,$name,$num){
        dd($request);
        $data=[$name,$num];    
        dd($data);
    }

    // public function bike(){

    // }
}
