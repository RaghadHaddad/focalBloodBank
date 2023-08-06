<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // public function index()
    // {
    //     $item_products=Product::where('trending' ,'1')->take(15)->get();
    //     $trend_cate=Category::where('popular' ,'1')->take(15)->get();
    //     return view('frontend.index',compact('item_products','trend_cate'));
    // }
    // public function category()
    // {
    //     $category=Category::where('status','0')->get();
    //     return view('frontend.category' , compact('category'));
    // }
    // public function viewCategory($slug)
    // {
    //     if(Category::where('slug',$slug)->exists())
    //     {
    //         $category=Category::where('slug',$slug)->first();
    //         $products=Product::where('cate_id',$category->id)->where('status','0')->get();
    //         return view('frontend.products.indexProduct',compact('category','products'));
    //     }
    //     else{
    //         return redirect('/')->with('status','Slug does not exists');
    //     }

    // }
    // public function productView($cate_slug,$prod_slug)
    // {
    //     if(Category::where('slug',$cate_slug)->exists())
    //     {
    //         if(Product::where('slug',$prod_slug)->exists())
    //         {

    //            $products=Product::where('slug',$prod_slug)->get();
    //         //    info( $products);
    //            return view('frontend.products.view',compact('products'));
    //         }
    //         else{
    //             return redirect('/')->with('status','The link was broken');
    //         }
    //     }
    //     else{
    //         return redirect('/')->with('status','No such category found');
    //     }
    // }
}
