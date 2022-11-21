<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\user;

class ContentController extends Controller
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
        $content = Content::all();
        return view('adminpage.admincontent.content' , compact('content'));
    }

    public function formadd()
    {
        //C1->From
        return view('adminpage.admincontent.add');
    }

    public function add(Request $request)
    {

        //C2->create
        $request->validate([

            'name' => 'nullable',
            'detail' => 'nullable',

        ]);
        
        if( $request->file('image') ){

            $file = $request->file('image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move( public_path('content'), $filename );

        }else{

            $filename = NULL;

        }

        Content::create([

            'name' => $request->name,
            'detail' => $request->detail,
            'image' => $filename

        ]);

        return redirect()->route('adminpage.admincontent.content');
                       
    }

    public function edit($id)
    {
        $content = Content::find($id);
        return view('adminpage.admincontent.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {

        $content = Content::find($id);

        $request->validate([

            'name' => 'nullable',
            'detail' => 'nullable',

        ]);
        
        if( $request->file('image') ){

            $file = $request->file('image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move( public_path('content'), $filename );

        }else{

            $filename = $content->image;

        }

        $content->update([

            'name' => $request->name,
            'detail' => $request->detail,
            'image' => $filename

        ]);

        return redirect()->route('adminpage.admincontent.content');
                       
    }

    public function destroy($id)
    { 
        $content= Content::find($id);
        $content->delete();
        return redirect()->route('adminpage.admincontent.content');
    }


}
