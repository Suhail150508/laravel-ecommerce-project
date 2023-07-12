<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $color= Color::all();
      return view('admin.color.all_color',compact('color'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {

$colors = explode(',',$request->color);
         $color = new Color;
         $color->color=Json_encode($colors);
         $color->save();
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
         $colors=  Color::find($id);
        if($colors->status==1){
            $colors->update(['status'=>0]);

        }
        else{
            $colors->update(['status'=>1]);
        }
        return redirect()->back()->with('message','changed colors');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
       return view('admin.color.update',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
        $colors = explode(',',$request->color);
     $update = $color->update([

         'color'=>json_encode($colors)

     ]);

 if($update)

 return Redirect::to('/colors');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
      $delete= $color->delete();

      if($delete)
      return redirect()->back();
    }
}
