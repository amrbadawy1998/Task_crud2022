<?php

namespace modules\categories\Controller;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use modules\categories\Model\category;
use modules\categories\Requests\create_category__Request;


class categoryController extends Controller
{

    public function index(){
       $categories = category::all();
        return view("Dashboard.page.category.show" ,compact("categories") );
    }

    public function apiIndex(){
        dd("a");
        $categories = category::all();
        return response()->json(['message' => 'You Do Note Have Permission', 'data' => $categories ],200);
    }

    //======================================
    // this function  go to  page add user
    //======================================

    public  function  create(){

        return view("Dashboard.page.category.add");
    }

    //========================================
    // this function to store data in database
    //========================================

    public function store(create_category__Request  $request ){
        category::create($request->validated());
        session()->flash("success","تم الاضافه  بنجاح");
        return redirect()->back();
    }

    public function  edit(category $category){
        return view("Dashboard.page.category.edit",compact("category"));
    }

    public function  update(Request $request){

        $this->validate( $request,[
            'name' => 'required|unique:categories,name,'.$request->id ,
        ]);

        category::where("id",$request->id)->update($request->except("_token"));
        session()->flash("success","تم التعديل  بنجاح");
        return redirect()->back();
    }

    public function delete(category $category){
        category::query()->where("id" , $category->id)->delete();
        session()->flash("success","تم الحذف  بنجاح");
        return redirect()->back();
    }



}
