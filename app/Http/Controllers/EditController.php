<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class EditController extends Controller
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
        $read = user::all();

        // return view('home');
        return view('adminpage.adminproduct.edit' , compact('read'));
    }
}
