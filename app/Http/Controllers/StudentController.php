<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "List Of Student";
    }

    function add(){
        return "new student added";
    }

    function delete(){
        return "deleted  Student";
    }
}

