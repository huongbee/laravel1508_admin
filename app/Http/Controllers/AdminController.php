<?php
namespace App\Http\Controllers;
use Request;
//use Illuminate\Http\Request;

class AdminController extends Controller{
    
    public function getIndex(){
        return view('pages.index');
    }
}

?>