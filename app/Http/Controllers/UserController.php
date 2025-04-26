<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class UserController extends Controller
{
    //
    
    function adduser(Request $request){
        $request->validate([
            'Username'=>'required | min:3 | max:10',
            'Email'=>'required | email',
            'City'=>'required | max:20',
            'skill'=>'required',
            

        ]);
        // return $request;
        echo "User Name Is : $request->Username";
        echo "<br>";
        echo "User Emai Is : $request->Email";
        echo "<br>";
        echo "User Address Is : $request->City";
        echo "<br>";
        print_r($request->skill);
        echo "<br>";
        echo "User City Is : $request->city";
        echo "<br>";
        echo "User Age Is : $request->age";
        echo "<br>";

    }
}

