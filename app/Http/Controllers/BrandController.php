<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $brands= Brand::all();
      return view('admin.brand.all_brand',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {


         $brands = new Brand;
         $brands->name=$request->name;
         $brands->description = $request->description;

        $brands->save();
        // $this->dispatchBrowserEvent('success',['message'=>'new brand is added!']);
        return back()->with('message','New brand added.');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {   $brands=  Brand::find($id);
        if($brands->status==1){
            $brands->update(['status'=>0]);

        }
        else{
            $brands->update(['status'=>1]);
        }
        return redirect()->back()->with('message','changed subCategory');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Brand $brand)
    {
       return view('admin.brand.update',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {

     $update = $brand->update([

         'name'=>$request->name,
        'description'=>$request->description,
     ]);

 if($update)

 return Redirect::to('/brands');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
      $delete= $brand->delete();

      if($delete)
      return redirect()->back();
    }
}
