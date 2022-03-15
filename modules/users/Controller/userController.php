<?php

namespace modules\users\Controller;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use modules\users\Model\user;
use modules\users\Requests\create_user_Request;
use modules\users\Requests\update_user_Request;


class userController extends Controller
{

    public function index(){
       $data = user::all();
        return view("Dashboard.page.users.show"  ,compact("data"));
    }

    //======================================
    // this function  go to  page add user
    //======================================

    public  function  create(){
        return view("Dashboard.page.users.add");
    }

    //========================================
    // this function to store data in database
    //========================================

    public function store(create_user_Request $request ){
        $data = $request->except("password" , "password_confirmation" , "_token");
        $data['password'] =  hash::make($request->password);
        user::create($data);
        session()->flash("success","تم الاضافه  بنجاح");
        return redirect()->back();
    }

    public function  edit(user $user){
        return view("Dashboard.page.users.edit",compact("user"));
    }

    public function  update(update_user_Request $request){
        user::where('id',$request->id)->update($request->validated() );
        session()->flash("success","تم التعديل  بنجاح");
        return redirect()->back();
    }

    public function delete(user $user){
        user::query()->where("id" , $user->id)->delete();
        session()->flash("success","تم الحذف  بنجاح");
        return redirect()->back();
    }



}
