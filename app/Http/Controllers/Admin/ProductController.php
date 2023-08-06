<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $products= Product::all();
    //     return view('admin.products.index',compact('products'));
    // }

    // public function add()
    // {
    //     $category=Category::all();
    //      return view('admin.products.add',compact('category'));
    // }
    // public function insert(Request $request)
    // {
    //     $product=new Product();
    //     $file = $request->file('image');
    //     $ext = $file->getClientOriginalExtension();
    //     $filename = time().'.'.$ext;
    //     $file->move(public_path('productImages'),$filename);
    //     $product -> cate_id=$request -> input('cate_id');
    //     $product -> name=$request -> input('name');
    //     $product -> slug=$request -> input('slug');
    //     $product -> small_description=$request -> input('small_description');
    //     $product -> description=$request -> input('description');
    //     $product -> original_price=$request -> input('original_price');
    //     $product -> selling_price=$request -> input('selling_price');
    //     $product -> image= $filename ;
    //     $product -> tax = $request -> input('tax');
    //     $product -> qty = $request -> input('qty');
    //     $product -> status=$request -> input('status') == True ? '1' : '0';
    //     $product -> trending=$request -> input('trending') == True ? '1' : '0';
    //     $product -> meta_title = $request -> input('meta_title');
    //     $product -> meta_description =$request -> input('meta_description');
    //     $product -> meta_keywords =$request -> input('meta_keywords');

    //     $product->save();
    //     return redirect('/products')->with('status','product added successfully');
    // }
    // public function edit($id)
    // {
    //     $products=Product::find($id);
    //     return view('admin.products.edit',compact('products'));
    // }
    // public function update(Request $request,$id)
    // {
    //     $product=Product::find($id);
    //     $path='productImages/'.$product->image;
    //     if(File::exists($path))
    //     {
    //         File::delete($path);
    //     }
    //     $file = $request->file('image');
    //     $ext = $file->getClientOriginalExtension();
    //     $filename = time().'.'.$ext;
    //     $file->move(public_path('productImages'),$filename);

    //     $product -> name=$request -> input('name');
    //     $product -> slug=$request -> input('slug');
    //     $product -> small_description=$request -> input('small_description');
    //     $product -> description=$request -> input('description');
    //     $product -> original_price=$request -> input('original_price');
    //     $product -> selling_price=$request -> input('selling_price');
    //     $product -> image= $filename ;
    //     $product -> tax = $request -> input('tax');
    //     $product -> qty = $request -> input('qty');
    //     $product -> status=$request -> input('status') == True ? '1' : '0';
    //     $product -> trending=$request -> input('trending') == True ? '1' : '0';
    //     $product -> meta_title = $request -> input('meta_title');
    //     $product -> meta_description =$request -> input('meta_description');
    //     $product -> meta_keywords =$request -> input('meta_keywords');

    //     $product->update();
    //     return redirect('/products')->with('status','product updated successfully');
    // }
    // public function destroy($id)
    // {
    //     $product=Product::find($id);
    //     if($product->image)
    //     {
    //         $path='productImages/'.$product->image;
    //         if(File::exists($path))
    //         {
    //             File::delete($path);
    //         }
    //     }
    //     $product->delete();
    //     return redirect('products')->with('product Deleted Successfully');
    // }
}
