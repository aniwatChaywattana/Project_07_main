<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;



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

        ]);

        if( $request->file('image') ){

            $file = $request->file('image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move( public_path('product'), $filename );

        }else{

            $filename = NULL;

        }

        Product::create([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename

        ]);

        return redirect()->route('adminpage.adminproduct.product');

    }

    public function read()
    {
        $read = user::all();

        // return view('home');
        return view('adminpage.adminproduct.edit' , compact('read'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('adminpage.adminproduct.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);

        $request->validate([

            'name' => 'nullable',
            'detail' => 'nullable',

        ]);

        if( $request->file('image') ){

            $file = $request->file('image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move( public_path('product'), $filename );

        }else{

            $filename = $product->image;

        }

        $product->update([

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image' => $filename

        ]);

        return redirect()->route('adminpage.adminproduct.product');

    }

    public function destroy($id){
        $product= Product::find($id);
        $product->delete();
        return redirect()->route('adminpage.adminproduct.product');
    }
}
