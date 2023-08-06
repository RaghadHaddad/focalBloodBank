<?php

namespace App\Http\Controllers\Queue;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function store(Request $request)
    {

        $bloodType=$request->input('bloodType');

        dispatch(new filter($bloodType));
        return redirect()->back()->with('success','bloodtype added to queue')
    }

}
