<?php
namespace App\Http\Controllers;
use Request;
//use Illuminate\Http\Request;

class AdminController extends Controller{
    
    public function getAdminLogin(){
        return view('sign.pages.login');
    }
    public function getAdminRegister(){
        return view('sign.pages.register');
    }



    public function getIndex(){
        return view('pages.index');
    }


    public function getListProduct(){
        return view('pages.list-product');
    }
}

?>