<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class ProductController extends Controller
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
        $product = Product::all();
        return view('adminpage.adminproduct.product' , compact('product'));
    }

    public function formadd()
    {
        //C1->From
        return view('adminpage.adminproduct.add');
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
        
        Product::create($request->all());

        return redirect()->route('adminpage.adminproduct.product');
                       
    }
}
