<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view("about");
    }
    public function contact()
    {
        return view("contact");
    }
    public function createuser()
    {
        return view("adduser");
    }
    
    public function store()
    {
        if(isset($_POST['addUser'])){
            // collect data 
            $username = $_POST['username'];
            // check data valid or not 
            if($username == null){
                echo "please insert the value of username";
            }else {
                // operations and output 
                echo $username;
            }
        }
    }
}
