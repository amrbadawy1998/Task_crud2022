<?php

namespace modules\articles\Controller;

use App\Http\Controllers\Controller;
use modules\articles\Model\article;
use modules\articles\Requests\create_article__Request;
use modules\articles\Requests\update_article__Request;
use modules\categories\Model\category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class articleController extends Controller
{
    public function index(){
        $article = article::all();
        return view("Dashboard.page.articles.show" ,compact("article") );
    }

    //======================================
    // this function  go to  page add user
    //======================================

    public  function  create(){
       $categories = category::all();
        return view("Dashboard.page.articles.add" , compact("categories"));
    }

//    //========================================
//    // this function to store data in database
//    //========================================
//
    public function store(create_article__Request $request ){
        $data = $request->except("image");
        if ($request->image){
            Image::make($request->image)->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path("upload/articles/".$request->image->hashName()));
            $data["image"]=$request->image->hashName();
        }
        article::create($data);
        session()->flash("success","تم الاضافه  بنجاح");
        return redirect()->back();
    }

    public function  edit(article $article){
        $categories = category::all();
        return view("Dashboard.page.articles.edit",compact("article","categories"));
    }

    public function  update(update_article__Request $request){

        $data = $request->except("_token");

        if ($request->image){

            Image::make($request->image)->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path("upload/articles/".$request->image->hashName()));
            $data["image"]=$request->image->hashName();
        }

        article::where('id',$request->id)->update($data);
        session()->flash("success","تم التعديل  بنجاح");
        return redirect()->back();
    }

    public function delete(article $article){
        article::query()->where("id" , $article->id)->delete();
        session()->flash("success","تم الحذف  بنجاح");
        return redirect()->back();
    }

}
