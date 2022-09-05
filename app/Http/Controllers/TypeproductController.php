<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProducts;

class TypeproductController extends Controller
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
        $typeproduct = TypeProducts::all();
        return view('adminpage.admintypeproduct.typeproduct' , compact('typeproduct'));
    }

    public function formadd()
    {
        //C1->From
        return view('adminpage.admintypeproduct.add');
    }

    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            'name' => 'nullable',
            // 'picture'=>'null',
        ]);
        
        TypeProducts::create($request->all());

        return redirect()->route('adminpage.admintypeproduct.typeproduct');
                       
    }
}