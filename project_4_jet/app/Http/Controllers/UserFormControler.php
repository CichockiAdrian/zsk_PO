<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormControler extends Controller
{
    public function ShowUser(Request $req){
        // return $req->input();
        // return $req->input('firstName');
        //return $req->method();
        // return $req->url();
        // return $req->path();
        
        $data = [
            'firstname' => $req->input('firstName'),
            'lastname' => $req->input('lastName'),
        ];

        return view('user',$data);
    }
}
