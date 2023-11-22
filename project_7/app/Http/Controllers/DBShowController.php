<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DBShowController extends Controller
{
    public function ShowTableUsers()
    {
        // return DB::table("users")->get();
        // return DB::table("users")->select('name','email')->get();
        return DB::table("users")->insert([ 
            'name' => 'Tomasz',
            'email' => 'Misiek',
            'password' => Hash::make('kochamfurry123~Bartosz')
        ]);
    }
}
