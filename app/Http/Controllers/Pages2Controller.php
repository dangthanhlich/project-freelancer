<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

use App\Models\Pageusers;
use App\Models\User;
use App\Models\Register;
use App\Models\Contact;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Pages2Controller extends Controller
{
    

    

    //-------------------------------------------------------------------------admin----------------------------------------------------------------//
    public function getDanhsachdata()
    {
        $detail = Pageusers::all(); 
        return view('admin2.datadetail.data',['detail'=>$detail]);
    }


    public function getDanhsachuser()
    {
        $users = Register::all(); 
        return view('admin2.user.user',['users'=>$users]);
    }


     public function getDanhsachcontact()
     {
         $contact = Contact::all(); 
         return view('admin2.contact.contact',['contact'=>$contact]);
     }
     //---------------------------------------admin-auth------------------------------------------//


     
    // public function getdangnhapadmin()
    // {
    //     $admin = User::all(); 
    //     return view('admin2.auth.dangnhap',['admin'=>$admin]);
    // }

    // public function postdangnhapadmin(Request $request)
    // {



    //      $this->validate($request,[
    //         'email'=>'required',
    //         'password'=>'required|min:3|max:32',
    //     ],
    //     [
    //         'email.required'=>'bạn chưa nhập tên người dùng',
    //         'password.required'=>'bạn chưa nhập mật khẩu',
    //         'password.min'=>'mật khẩu có ít nhất 3 ký tự',
    //         'password.max'=>'mật khẩu có tối đa 32 ký tự',
    //     ]);
    //     $arr =[
    //         'email'=> $request->email,
    //         'password'=> $request->password
    //     ];
    //     if(Auth::attempt($arr))
    //     {
    //         return redirect('admin/danhsachdata');
    //     }
    //     else{
    //         return redirect('admin/dangnhap')->with('thongbao','Đăng nhập thất bại,vui lòng nhập lại name và password');
    //     }

    // }
    
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect('admin/dangnhap');
    // }



}
