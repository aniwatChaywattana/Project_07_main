<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Product;



class HomeController extends Controller
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
        $home = Home::all();
        return view('adminpage.adminhome' , compact('home'));
    }

    public function formadd()
    {
        //C1->From
        return view('adminpage.homeadd');
    }

    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            'name' => 'nullable',
            'detail' => 'nullable',
            'price' => 'nullable',
            // 'picture'=>'null',
        ]);
        
        Home::create($request->all());

        return redirect()->route('adminpage.adminhome');
                       
    }
}
