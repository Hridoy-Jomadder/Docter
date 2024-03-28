<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function sayHi(){
        return "Welcome to Our Laravel";
    }
    function hello(){
        return "Hey, What's your name?";
    }
    function greet($name = "Hridoy"){
        return "Hey, $name";
    }
    function SamplePostRequest(Request $request){
        return $request->input("person");
    }
    function SampleGetRequest(Request $request){
        return "<form  method='POST' action='/form'>
        <input type='text' name='Person' placeholder='Enter your name'>
        <input type='submit' value='Submit'>
        </form>
        ";
    }
}
