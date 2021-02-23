<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_sName(){
        return view('sName', ['name'=>"Yessenali"]);
    }

    public function get_sDate(){
        return view('sDate')->with('date', '27-04-2002');
    }

    public function get_sAge($age=18){
        return view('sAge', compact('age'));
    }
}
