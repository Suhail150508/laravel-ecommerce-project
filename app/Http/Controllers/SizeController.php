<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $size= Size::all();
      return view('admin.size.all_size',compact('size'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {

$sizes = explode(',',$request->size);
         $size = new Size;
         $size->size=Json_encode($sizes);
         $size->save();
         return Redirect()->back();

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
         $sizes=  Size::find($id);
        if($sizes->status==1){
            $sizes->update(['status'=>0]);

        }
        else{
            $sizes->update(['status'=>1]);
        }
        return redirect()->back()->with('message','changed sizes');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Size $size)
    {
       return view('admin.size.update',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        $sizes = explode(',',$request->size);
     $update = $size->update([

         'size'=>json_encode($sizes)

     ]);

 if($update)

 return Redirect::to('/sizes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size  $size)
    {
      $delete= $size->delete();

      if($delete)
      return redirect()->back();
    }
}
