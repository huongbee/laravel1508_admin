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

    public function postAdminRegister(Request $req){
        $req->validate([
            'fullname'=>'required|min:10|max:100',
            'email'=>'required|unique:users',
            'username'=>'required|unique:users|min:5|max:50',

        ],[

        ]);
    }



    public function getIndex(){
        return view('pages.index');
    }


    public function getListProduct(){
        return view('pages.list-product');
    }
}

?>