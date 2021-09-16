<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

use App\Models\Pageusers;
use App\Models\User;
use App\Models\Register;
use App\Models\Contact;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    // public function getRegester()
    // {
    //     return view('register');
    // }
    // public function postRegester(Request $request)
    // {

    //     $this->validate($request,[
    //         'name'=>'required|min:3',
    //         'email'=>'required|email|unique:User_freelancer,email',
    //         'password'=>'required|min:3|max:32',
    //     ],
    //     [
    //         'name.required'=>'bạn chưa nhập tên người dùng',
    //         'name.min'=>'tên người dùng ít nhất có 3 ký tự',
    //         'email.required'=>'bạn chưa nhập email',
    //         'email.email'=>'bạn chưa nhập đúng định dạng email',
    //         'email.unique'=>'email đã tồn tại',
    //         'password.required'=>'bạn chưa nhập mật khẩu',
    //         'password.min'=>'mật khẩu có ít nhất 3 ký tự',
    //         'password.max'=>'mật khẩu có tối đa 32 ký tự',
    //     ]);

    //     $user_freelancer = new Register;
    //     $user_freelancer->name = $request->name;
    //     $user_freelancer->email = $request->email;
    //     $user_freelancer->password = bcrypt($request->password);
    //     $user_freelancer->save();
    //     return redirect('themuserfreelancer')->with('thongbao','Đăng ký thành công');

    // }

    // public function getdangnhap()
    // {
    //     // $user_freelancer = User::all(); 
    //     // return view('login',['login'=>$user_freelancer]);
      
    // }
    // public function postdangnhap(Request $request)
    // {
    //     // $user_freelancer = DB::table('user_freelancer')->find($name);
    //     $this->validate($request,[
    //         'name'=>'required|min:3',
    //         'password'=>'required|min:3|max:32',
    //     ],
    //     [
    //         'name.required'=>'bạn chưa nhập tên người dùng',
    //         'name.min'=>'tên người dùng ít nhất có 3 ký tự',
    //         'password.required'=>'bạn chưa nhập mật khẩu',
    //         'password.min'=>'mật khẩu có ít nhất 3 ký tự',
    //         'password.max'=>'mật khẩu có tối đa 32 ký tự',
    //     ]);

    //     $name = $request['name'];

    //     $password =  ($request['password']);

    //     if( Auth::attempt(['name'=>$name,'password'=>$password]))
    //     {
    //         return view('post-a-project',['user_freelancer'=>Auth::user()]);
            
    //     }
    //     else{
    //         return redirect('login')->with('thongbao','Đăng nhập thất bại,vui lòng nhập lại name và password');
    //     }


        // $arr =[
        //     'name'=> $request->name,
        //     'password'=> $request->password
        // ];
        // if(Auth::attempt($arr))
        // {
        //     echo "ddawng nhap dung";
        // }
        // else{
        //     echo "sai";
        // }




    // }

    // public function logout()
    // {
    //     Auth::logout();
    //     return view('login');
    // }

    public function getthemcontactuplly()
    {
        return view('themcontactapply');
    }

    public function postthemcontactuplly(Request $request)
    {
        $this->validate($request,[
            'c_name'=>'required|min:3',
            'c_email'=>'required|email|unique:contact,c_email',
        ],
        [
            'c_name.required'=>'bạn chưa nhập tên người dùng',
            'c_name.min'=>'tên người dùng ít nhất có 3 ký tự',
            'c_email.required'=>'bạn chưa nhập email',
            'c_email.email'=>'bạn chưa nhập đúng định dạng email',
            'c_email.unique'=>'email đã tồn tại',
        ]);

        $contact = new Contact;
        $contact->c_name = $request->c_name;
        $contact->c_email = $request->c_email;
        $contact->save();
        return redirect('browse-jobs-details')->with('thongbao','nhập thành công');
    }




    public function getDanhsachbrowsejobs()
    {
        $detail = Pageusers::Paginate(2);
        return view('browse-jobs',['detail'=>$detail]);
    }

  

    public function searchbrowsejobs(Request $request)
    {
        $result= $request->result;
        $result = str_replace('','%',$result);
        $data['detail']= Pageusers::where('ten','like','%'.$result.'%')->orwhere('name','like','%'.$result.'%')->orwhere('title','like','%'.$result.'%')->get();
        return view('search',$data);
    }

    public function searchprice(Request $request)
    {
        $resultb= $request->resultb;
        $resultb = str_replace('','%',$resultb);
        $data['detail']= Pageusers::where('price','like','%'.$resultb.'%')->get();
        return view('searchprice',$data);
    }

    public function chitietdetail()
    {
        $detail = Pageusers::all(); 
        return view('browse-jobs-details',['detail'=>$detail]);
    }
    
    public function chitiet($id)
    {
        $detail = DB::table('detail')->where('id',$id)->first();
        return view('browse-jobs-details',compact('detail'));
     
    }

    //-------------------------------------------------------------------------admin----------------------------------------------------------------//
    public function getDanhsachdata()
    {
        $detail = Pageusers::all(); 
        return view('admin.datadetail.data',['detail'=>$detail]);
    }

    public function getThemdata()
    {
        return view('admin.datadetail.themdata');
    }

    public function postThemdata(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'ten'=>'required',
            'title'=>'required',
            'description'=>'required',
            'TomTat'=>'required',
            'price'=>'required',
        ],
        [
            'name.required'=>'not empty',
            'ten.required'=>'not empty',
            'title.required'=>'not empty',
            'description.required'=>'not empty',
            'TomTat.required'=>'not empty',
            'price.required'=>'not empty',
        ]);

        $detail = new Pageusers;
        $detail->name = $request->name;
        $detail->ten = $request->ten;
        $detail->title = $request->title;
        $detail->description = $request->description;
        $detail->TomTat = $request->TomTat;
        $detail->price = $request->price;
        $detail->save();
        return redirect('admin/danhsachdata')->with('thongbao','Đăng ký thành công');
    }

    //--------------admindata----------------//

    public function getSuadata($id)
    {
        $detail = Pageusers::find($id);
        return view('admin.datadetail.suadata',['detail'=>$detail]);
    }

    public function postSuadata(Request $request,$id)
    {
        $detail= Pageusers::find($id);
        $this->validate($request,[
            'name'=>'required',
            'ten'=>'required',
            'title'=>'required',
            'description'=>'required',
            'TomTat'=>'required',
            'price'=>'required',
        ],
        [
            'name.required'=>'not empty',
            'ten.required'=>'not empty',
            'title.required'=>'not empty',
            'description.required'=>'not empty',
            'TomTat.required'=>'not empty',
            'price.required'=>'not empty',
        ]);
        $detail = Pageusers::find($id);
        $detail->name = $request->name;
        $detail->ten = $request->ten;
        $detail->title = $request->title;
        $detail->description = $request->description;
        $detail->TomTat = $request->TomTat;
        $detail->price = $request->price;
        $detail->save();

        return redirect('admin/danhsachdata')->with('thongbao','sửa thành công');
    }

    public function getXoadata($id)
    {
        $theloai = Pageusers::find($id);
        $theloai-> delete();
        return redirect('admin/danhsachdata')->with('thongbao','bạn đã xóa thành công');
    }
     //--------------adminuserfreelancer----------------//
    // public function getDanhsachuser()
    // {
    //     $user_freelancer = Register::all(); 
    //     return view('admin.user.user',['user_freelancer'=>$user_freelancer]);
    // }

    // public function getThemuser()
    // {
    //     return view('admin.user.themuser');
    // }

    // public function postThemuser(Request $request)
    // {
    //     $this->validate($request,[
    //         'name'=>'required|min:3',
    //         'email'=>'required|email|unique:User_freelancer,email',
    //         'password'=>'required|min:3|max:32',
    //     ],
    //     [
    //         'name.required'=>'bạn chưa nhập tên người dùng',
    //         'name.min'=>'tên người dùng ít nhất có 3 ký tự',
    //         'email.required'=>'bạn chưa nhập email',
    //         'email.email'=>'bạn chưa nhập đúng định dạng email',
    //         'email.unique'=>'email đã tồn tại',
    //         'password.required'=>'bạn chưa nhập mật khẩu',
    //         'password.min'=>'mật khẩu có ít nhất 3 ký tự',
    //         'password.max'=>'mật khẩu có tối đa 32 ký tự',
    //     ]);

    //     $user_freelancer = new Register;
    //     $user_freelancer->name = $request->name;
    //     $user_freelancer->email = $request->email;
    //     $user_freelancer->password = bcrypt($request->password);
    //     $user_freelancer->save();
    //     return redirect('admin/danhsachuser')->with('thongbao','nhập thành công');
    // }

    // public function getSuauser($id)
    // {
    //     $user_freelancer = Register::find($id);
    //     return view('admin.user.suauser',['user_freelancer'=>$user_freelancer]);
    // }

    // public function postSuauser(Request $request,$id)
    // {
    //     $user_freelancer= Register::find($id);
    //     $this->validate($request,[
    //         'name'=>'required|min:3',
    //         'email'=>'required|email|unique:User_freelancer,email',
    //         'password'=>'required|min:3|max:32',
    //     ],
    //     [
    //         'name.required'=>'bạn chưa nhập tên người dùng',
    //         'name.min'=>'tên người dùng ít nhất có 3 ký tự',
    //         'email.required'=>'bạn chưa nhập email',
    //         'email.email'=>'bạn chưa nhập đúng định dạng email',
    //         'email.unique'=>'email đã tồn tại',
    //         'password.required'=>'bạn chưa nhập mật khẩu',
    //         'password.min'=>'mật khẩu có ít nhất 3 ký tự',
    //         'password.max'=>'mật khẩu có tối đa 32 ký tự',
    //     ]);

    //     $user_freelancer = Register::find($id) ;
    //     $user_freelancer->name = $request->name;
    //     $user_freelancer->email = $request->email;
    //     $user_freelancer->password = bcrypt($request->password);
    //     $user_freelancer->save();
    //     return redirect('admin/danhsachuser')->with('thongbao','sửa thành công');
        
    // }

    // public function getXoauser($id)
    // {
    //     $user_freelancer = Register::find($id);
    //     $user_freelancer-> delete();
    //     return redirect('admin/danhsachuser')->with('thongbao','bạn đã xóa thành công');
    // }

     public function getDanhsachuser()
    {
        $users = Register::all(); 
        return view('admin.user.user',['users'=>$users]);
    }
    public function getThemuser()
    {
        return view('admin.user.themuser');
    }

    public function postThemuser(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:3|max:32',
        ],
        [
            'name.required'=>'bạn chưa nhập tên người dùng',
            'name.min'=>'tên người dùng ít nhất có 3 ký tự',
            'email.required'=>'bạn chưa nhập email',
            'email.email'=>'bạn chưa nhập đúng định dạng email',
            'email.unique'=>'email đã tồn tại',
            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu có ít nhất 3 ký tự',
            'password.max'=>'mật khẩu có tối đa 32 ký tự',
        ]);

        $users = new Register;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect('admin/danhsachuser')->with('thongbao','nhập thành công');
    }

    public function getSuauser($id)
    {
        $users = Register::find($id);
        return view('admin.user.suauser',['users'=>$users]);
    }

    public function postSuauser(Request $request,$id)
    {
        $users= Register::find($id);
        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:3|max:32',
        ],
        [
            'name.required'=>'bạn chưa nhập tên người dùng',
            'name.min'=>'tên người dùng ít nhất có 3 ký tự',
            'email.required'=>'bạn chưa nhập email',
            'email.email'=>'bạn chưa nhập đúng định dạng email',
            'email.unique'=>'email đã tồn tại',
            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu có ít nhất 3 ký tự',
            'password.max'=>'mật khẩu có tối đa 32 ký tự',
        ]);

        $users = Register::find($id) ;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect('admin/danhsachuser')->with('thongbao','sửa thành công');
        
    }

    public function getXoauser($id)
    {
        $users = Register::find($id);
        $users-> delete();
        return redirect('admin/danhsachuser')->with('thongbao','bạn đã xóa thành công');
    }


    public function getThemuserfreelancer()
    {
        return view('post-a-project');
    }

    public function postThemuserfreelancer(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'ten'=>'required',
            'title'=>'required',
            'description'=>'required',
            'TomTat'=>'required',
            'price'=>'required',
        ],
        [
            'name.required'=>'not empty',
            'ten.required'=>'not empty',
            'title.required'=>'not empty',
            'description.required'=>'not empty',
            'TomTat.required'=>'not empty',
            'price.required'=>'not empty',
        ]);

        $detail = new Pageusers;
        $detail->name = $request->name;
        $detail->ten = $request->ten;
        $detail->title = $request->title;
        $detail->description = $request->description;
        $detail->TomTat = $request->TomTat;
        $detail->price = $request->price;
        $detail->save();
        return redirect('browse-jobs')->with('thongbao','nhập thành công');
    }


     //--------------admincontactfreelancer----------------//
     public function getDanhsachcontact()
     {
         $contact = Contact::all(); 
         return view('admin.contact.contact',['contact'=>$contact]);
     }
 
     public function getThemcontact()
     {
         return view('admin.contact.themcontact');
     }
 
     public function postThemcontact(Request $request)
     {
         $this->validate($request,[
             'c_name'=>'required|min:3',
             'c_email'=>'required|email|unique:contact,c_email',
         ],
         [
             'c_name.required'=>'bạn chưa nhập tên người dùng',
             'c_name.min'=>'tên người dùng ít nhất có 3 ký tự',
             'c_email.required'=>'bạn chưa nhập email',
             'c_email.email'=>'bạn chưa nhập đúng định dạng email',
             'c_email.unique'=>'email đã tồn tại',
         ]);
 
         $contact = new Contact;
         $contact->c_name = $request->c_name;
         $contact->c_email = $request->c_email;
         $contact->save();
         return redirect('admin/danhsachcontact')->with('thongbao','nhập thành công');
     }
 
     public function getSuacontact($id)
     {
         $contact = Contact::find($id);
         return view('admin.contact.suacontact',['contact'=>$contact]);
     }
 
     public function postSuacontact(Request $request,$id)
     {
        
         $this->validate($request,[
            'c_name'=>'required|min:3',
            'c_email'=>'required|email|unique:contact,c_email',
        ],
        [
            'c_name.required'=>'bạn chưa nhập tên người dùng',
            'c_name.min'=>'tên người dùng ít nhất có 3 ký tự',
            'c_email.required'=>'bạn chưa nhập email',
            'c_email.email'=>'bạn chưa nhập đúng định dạng email',
            'c_email.unique'=>'email đã tồn tại',
        ]);

        $contact= Contact::find($id);
        $contact->c_name = $request->c_name;
        $contact->c_email = $request->c_email;
        $contact->save();
         return redirect('admin/danhsachcontact')->with('thongbao','sửa thành công');
         
     }
 
     public function getXoacontact($id)
     {
         $contact = Contact::find($id);
         $contact-> delete();
         return redirect('admin/danhsachcontact')->with('thongbao','bạn đã xóa thành công');
     }

     //---------------------------------------admin-auth------------------------------------------//


     public function getDanhsachauth()
     {
         $admin = Admin::all(); 
         return view('admin.auth.auth',['admin'=>$admin]);
     }
 
     public function getThemauth()
     {
         return view('admin.auth.themauth');
     }
 
     public function postThemauth(Request $request)
     {
        
        $this->validate($request,[
            'email'=>'required',
            'quyen'=>'required',
            'password'=>'required',
        ],
        [
            'email.required'=>'not empty',
            'quyen.required'=>'not empty',
            'password.required'=>'not empty',
        ]);
 
         $admin = new Admin;
         $admin->email = $request->email;
         $admin->quyen = $request->quyen;
         $admin->password = bcrypt($request->password);
         $admin->save();
         return redirect('admin/danhsachauth')->with('thongbao','nhập thành công');
     }
 
     public function getSuaauth($id)
     {
         $admin = Admin::find($id);
         return view('admin.auth.suaauth',['admin'=>$admin]);
     }
 
     public function postSuaauth(Request $request,$id)
     {
         $admin= Admin::find($id);
         $this->validate($request,[
            'quyen'=>'required',
            'password'=>'required',
        ],
        [
            'quyen.required'=>'not empty',
            'password.required'=>'not empty',
        ]);
 
         $admin = Admin::find($id);
         $admin->quyen = $request->quyen;
         $admin->password = $request->password;
         $admin->save();
         return redirect('admin/danhsachauth')->with('thongbao','sửa thành công');
         
     }
 
     public function getXoaauth($id)
     {
         $admin = Admin::find($id);
         $admin-> delete();
         return redirect('admin/danhsachauth')->with('thongbao','bạn đã xóa thành công');
     }

    
    public function getdangnhapadmin()
    {
        $admin = User::all(); 
        return view('admin.auth.dangnhap',['admin'=>$admin]);
    }

    public function postdangnhapadmin(Request $request)
    {



         $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32',
        ],
        [
            'email.required'=>'bạn chưa nhập tên người dùng',
            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu có ít nhất 3 ký tự',
            'password.max'=>'mật khẩu có tối đa 32 ký tự',
        ]);
        $arr =[
            'email'=> $request->email,
            'password'=> $request->password
        ];
        if(Auth::attempt($arr))
        {
            return redirect('admin/danhsachdata');
        }
        else{
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập thất bại,vui lòng nhập lại name và password');
        }

    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('admin/dangnhap');
    }




    

}
