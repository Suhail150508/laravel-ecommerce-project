<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $unit= Unit::all();
      return view('admin.unit.all_unit',compact('unit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {


         $units = new Unit;
         $units->name=$request->name;
         $units->description = $request->description;

        $units->save();
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
         $units=  Unit::find($id);
        if($units->status==1){
            $units->update(['status'=>0]);

        }
        else{
            $units->update(['status'=>1]);
        }
        return redirect()->back()->with('message','changed units');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Unit $unit)
    {
       return view('admin.unit.update',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {

     $update = $unit->update([

         'name'=>$request->name,
        'description'=>$request->description,
     ]);

 if($update)

 return Redirect::to('/units');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit  $unit)
    {
      $delete= $unit->delete();

      if($delete)
      return redirect()->back();
    }
}
