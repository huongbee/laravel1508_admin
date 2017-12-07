<?php
namespace App\Http\Controllers;
//use Request;
use Illuminate\Http\Request;
use App\User;
use Hash;

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
            'password'=>'required|min:6|max:50',
            'confirm_password'=>'required|same:password'

        ],[
            'email.unique'=>'Email đã có người sử dụng',
            'username.unique'=>'Username đã có người sử dụng',
            'fullname.required'=>'Họ tên không được rỗng',
            'confirm_password.same'=>'Mat khau khong giong nhau'
        ]);
        //==============================================
        $user = new User;
        $user->username = $req->username;
        $user->fullname = $req->fullname;
        $user->birthdate = date('Y-m-d',strtotime($req->birthdate));
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->role = 0;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('adminLogin')
                ->with('success','Dang ki thanh cong');
    }



    public function getIndex(){
        return view('pages.index');
    }


    public function getListProduct(){
        return view('pages.list-product');
    }
}

?>