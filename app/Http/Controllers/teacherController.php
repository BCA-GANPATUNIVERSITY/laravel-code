<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class teacherController extends Controller
{
    //
    function queries(){
        $result = DB::table('teacher')->get();
                                
                                                    // method 1 target and show
         
        // $result = DB::table('teacher')->where('phone','9104296118')->get();
             
                                                    //  first id in value are show

        // $result = DB::table('teacher')->first();
        // $result=[$result];

                                        // insert data

        // $result = DB::table('teacher')->insert([
        //     'id'=>'4',
        //     'Username'=>'karan',
        //     'Phone'=>'159158147',
        //     'Email'=>'k@test.com',
        // ]);
        // if($result){
        //     return "Data Inserted";
        // }else{
        //     return "Data Not Inserted";
        // }
                                           // updated data

        // $result = DB::table('teacher')->where('id','2')->update(['Username'=>'Maheshbhai']);
        // if($result){
        //     return "Data updated";
        // }else{
        //     return "Data Not updated";
        // }
                                
                                                // deleted data
        
        // $result = DB::table('teacher')->where('id','4')->delete();

        // if($result){
        //     return "Data deleted";
        // }else{
        //     return "Data Not deleted";
        // }

        // return $result;
        return view('teacher',['teacher'=>$result]);
    }
}

