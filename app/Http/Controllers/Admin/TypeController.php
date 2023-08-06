<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Type;
use App\Models\Donor;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types= Type::all();
        return view('admin.Types.index',compact('types'));
    }

    public function add()
    {
        $donors=Donor::all();
        // dd($donors);
        return view('admin.Types.add',compact('donors'));
    }
    public function insert(Request $request)
    {
        $type=new Type();
        $type ->type=$request -> input('type');
        $type ->startDate=$request -> input('startDate');
        $type->owner=$request ->owner;
        // dd($request ->owner);
        $type->save();
        return redirect('/types')->with('status','type added successfully');
    }
    public function edit($id)
    {
        $type=Type::find($id);
        return view('admin.Types.edit',compact('type'));
    }
    public function update(Request $request,$id)
    {
        $type=Type::find($id);
        $type -> type=$request -> input('name');
        $type -> startDate=$request -> input('startDate');
        $type -> owner=$request -> input('owner');
        $type->update();
        return redirect('/types')->with('status','type updated successfully');
    }
    public function destroy($id)
    {
        $type=Type::find($id);
        $type->delete();
        return redirect('types')->with('type Deleted Successfully');
    }
}
