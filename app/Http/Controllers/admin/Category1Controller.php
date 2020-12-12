<?php

namespace App\Http\Controllers\admin;
//use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Category1;


class Category1Controller extends Controller
{
    public function index()
    {
         $categories=Category1::all();
       //return DB::table('categories')->select('name','slug','created_at')->get();
        return view('admin.category.category1',compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
      /* DB::table('categories')->insert([
           'name'=> $request->name,
           'slug'=>str_slug($request->name,'_'),
       ]);*/
       $category= new Category1();
       $category->name=$request->name;
       $category->slug=str_slug($request->name,'_');
       $category->save();

       return redirect('admin\category1');
    }
    public function delete($id)
    {
       // DB::table('categories')->where('id',$id)->delete();
      // Category1::where('id', $id)->delete();
      $category=Category1::find($id);
      $category->delete();
        return redirect()->back();
    }
  public function update_page($id){
      $category=Category1::find($id);
      return view('admin.category.update',compact('category'));
  }
  public function update(Request $request)
  {
    $category=Category1::find($request->id);
    $category->name=$request->name;
     $category->slug=str_slug($request->name,'_');
     $category->save();
    return redirect('admin/category1');

  }
}  
    