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
            // 'picture'=>'null',
        ]);
        
        Product::create($request->all());

        return redirect()->route('adminpage.adminproduct.product');
                       
    }
    
    public function read()
    {
        $read = user::all();

        // return view('home');
        return view('adminpage.adminproduct.edit' , compact('read'));
    }

    public function edit($id){
        $product = Product::find($id);
        return view('adminpage.adminproduct.edit',compact('read'));
    }

    public function update(Request $request, $id){
        if ($request->hasFile('picture')) {

            $product = Product::find($id);

             // ลบรูปภาพ

            if ($product->picture != 'nopic.jpg') {

                File::delete(public_path() . '/admin/upload/product/' . $product->picture);

            }

            //เพิ่มรูปภาพ

            $filename = Str::random(10) . '.' . $request->file('picture')->getClientOriginalExtension();

            $request->file('picture')->move(public_path() . '/admin/upload/product/', $filename);

            Image::make(public_path() . '/admin/upload/product/' . $filename);

            $product->picture = $filename;

            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ

            $product->name = $request->name;
            $product->detail = $request->detail;


        } else{

        $product = Product::find($id);
        $product->name = $request->name;
        $product->detail = $request->detail;
    }
        $product->update();
        return redirect()->route('adminpage.adminproduct.product');
    }
    public function destroy($id){ 
        $product= Product::find($id);
        $product->delete();
        return redirect()->route('adminpage.adminproduct.product');
    }
}
