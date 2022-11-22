<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\TypeProducts;

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
        $content = Content::count();
        $typeproduct = TypeProducts::count();
        $product = Product::count();
        $user = User::count();
        $home = Home::all();
        return view('adminpage.adminhome' , compact('home','user','typeproduct','content','product'));
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
