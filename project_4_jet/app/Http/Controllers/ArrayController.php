<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ShowArray(){
        $data = [
            'firstname'=>'Jan',
            'lastname'=>'Nowak',
            'city'=>'Poznan',
            'hobby'=>['siatkówka','żużel','skoki narciarskie']];
        
         return view('array',['user' => $data]);
    }
}
