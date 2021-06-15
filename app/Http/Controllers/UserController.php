<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.acl.user.edit',compact('data'));
    }
    
    public function update(Request $request,$id)
    {
        $data = User::find($id);
       
        $data->update($request->all());
        return redirect(route('admin'))->with('message','Update Done');
    }
}
