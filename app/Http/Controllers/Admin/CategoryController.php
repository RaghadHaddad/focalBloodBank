<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\getClientOriginalExtension;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
   public function index()
   {
    $category= Category::all();
    return view('admin.users.index',compact('category'));
   }
   public function add()
   {
    return view('admin.category.add');
   }
   public function insert(Request $request)
   {
    $category=new Category();
    $file = $request->file('image');
    $ext = $file->getClientOriginalExtension();
    $filename = time().'.'.$ext;
    $file->move(public_path('images'),$filename);
    $category -> name=$request -> input('name');
    $category -> slug=$request -> input('slug');
    $category -> description=$request -> input('description');
    $category -> status=$request -> input('status') == True ? '1' : '0';
    $category -> popular=$request -> input('popular') == True ? '1' : '0';
    $category -> image= $filename ;
    $category -> meta_title = $request -> input('meta_title');
    $category -> meta_descrip =$request -> input('meta_descrip');
    $category -> meta_keywords =$request -> input('meta_keywords');

    $category->save();

    return redirect('/dashboard')->with('status','category added successfully');

    // if($request -> hasFile('image'))
    // {
    //     $file = $request->file('image');
    //     $ext = $file->getClientOriginalExtension();
    //     $filename = time().'.'.$ext;
    //     $file->move('assets/uploads/category/',$filename);
    //     $category->image = $filename;
    // }
   }
   public function edit($id)
   {
    $category=Category::find($id);
    return view('admin.category.edit',compact('category'));
   }
   public function update(Request $request,$id)
   {
    $category=Category::find($id);
    $path='images/'.$category->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move(public_path('images'),$filename);

        $category -> name=$request -> input('name');
        $category -> slug=$request -> input('slug');
        $category -> description=$request -> input('description');
        $category -> status=$request -> input('status') == True ? '1' : '0';
        $category -> popular=$request -> input('popular') == True ? '1' : '0';
        $category->image =$filename;
        $category -> meta_title = $request -> input('meta_title');
        $category -> meta_descrip =$request -> input('meta_descrip');
        $category -> meta_keywords =$request -> input('meta_keywords');
        $category->update();
        return redirect('/dashboard')->with('status','Category Updated Successfully');
    // if($request->hasFile('image'))
    // {
    //     $path='images/'.$category->image;
    //     if(File::exists($path))
    //     {
    //         File::delete($path);
    //     }
    //     $filename = time().'.'. request()->image->getClientOriginalExtension();
    //     request()->image->move(public_path('images'),$filename);
    //     $category->image =$filename;
    // }

   }
   public function destroy($id)
   {
    $category=Category::find($id);
    if($category->image)
    {
        $path='images/'.$category->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $category->delete();
        return redirect('categories')->with('Category Deleted Successfully');
    }
   }
}

