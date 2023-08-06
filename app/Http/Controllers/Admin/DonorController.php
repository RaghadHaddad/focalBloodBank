<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DonorController extends Controller
{
    public function index()
    {
     $donor= Donor::all();
     return view('admin.Doners.index',compact('donor'));
    }
    public function add()
   {
    return view('admin.Doners.add');
   }
   public function insert(Request $request)
   {
    $donor=new Donor();
    $file = $request->file('Image');
    $ext = $file->getClientOriginalExtension();
    $filename = time().'.'.$ext;
    $file->move(public_path('images'),$filename);
    $donor -> name=$request -> input('name');
    $donor -> address=$request -> input('address');
    $donor -> phone=$request -> input('phone');
    $donor -> gender=$request -> input('phone');
    $donor -> status=$request -> input('status') == True ? '1' : '0';
    $donor -> bloodType=$request -> input('bloodType');
    $donor -> Image= $filename ;

    $donor->save();

    return redirect('/dashboard')->with('status','Donor added successfully');
   }
   public function edit($id)
   {
    $donor=Donor::find($id);
    return view('admin.Doners.edit',compact('donor'));
   }
   public function update(Request $request,$id)
   {
    $donor=Donor::find($id);
    $path='images/'.$donor->Image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $file = $request->file('Image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move(public_path('images'),$filename);

        $donor -> name=$request -> input('name');
        $donor -> address=$request -> input('address');
        $donor -> phone=$request -> input('phone');
        $donor -> status=$request -> input('status') == True ? '1' : '0';
        $donor->Image =$filename;
        $donor -> bloodType=$request -> input('bloodType');
        $donor->update();
        return redirect('/dashboard')->with('status','Donor Updated Successfully');
    }
    public function destroy($id)
    {
     $donor=Donor::find($id);
     if($donor->Image)
     {
         $path='images/'.$donor->Image;
         if(File::exists($path))
         {
             File::delete($path);
         }
         $donor->delete();
         return redirect('/Donors')->with('Donor Deleted Successfully');
     }
    }
    public function viewstatus()
    {
        $donor=Donor::where('status','0')->get();
        return view('admin.Doners.viewstatus',compact('donor'));
    }
}

