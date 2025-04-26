<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
               
                            //   database ke liye

class customercontroller extends Controller
{
    //
    function customer(){
        return DB::select('select * from users');
    }
}

