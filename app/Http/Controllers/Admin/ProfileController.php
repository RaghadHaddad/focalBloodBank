<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\user;
use App\models\Donor;
class ProfileController extends Controller
{
    public function show()
    {
        $user=User::where('role_as','0')->get();
        // dd($user);
        return view('admin.profile.show',compact('user'));
    }
    public function viewProfile($id)
    {
        $donor=Donor::find($id);
        $user=User::find($id);
        return view('admin.profile.ViewProfile',compact('donor','user'));
    }


}
