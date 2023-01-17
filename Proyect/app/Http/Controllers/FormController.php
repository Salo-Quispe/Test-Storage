<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    private $disk = "images";

    public function form(){
        return view ('form');
    }

    public function save(Request $request){
        if($request ->hasFile("url")){
        $file=$request->file("url");
        $name=$request -> input ('name');
        $file->storeAs('',$name.'.'.$file->guessExtension(), $this->disk);
    }
}
}