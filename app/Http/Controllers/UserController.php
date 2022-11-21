<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    public function index()
    {
        $user = User::all();
        return view('adminpage.adminuser.user' , compact('user'));
    }

    public function formadd()
    {
        //C1->From
        return view('adminpage.adminuser.add');
    }

    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            'name' => 'nullable',
            // 'picture'=>'null',
        ]);
        
        User::create($request->all());

        return redirect()->route('adminpage.adminuser.user');
                       
    }
    public function edit()
    {
        $read = User::all();

        // return view('home');
        return view('adminpage.adminuser.edit' , compact('read'));
    }
    public function destroy($id){ 
        $user= User::find($id);
        $user->delete();
        return redirect()->route('adminpage.adminuser.user');
    }
}
