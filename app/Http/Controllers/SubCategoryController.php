<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory= SubCategory::all();

        return view('admin.subcategory.all_subcategory',compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $catagories =  Category::all();
        return view('admin.subcategory.create',compact('catagories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {

         $subcategories = new SubCategory;
         $subcategories->cat_id = $request->category;
         $subcategories->name=$request->name;
         $subcategories->description = $request->description;
         $subcategories->image=$request->image->store('category');

         $subcategories->save();
         return Redirect()->back();
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {    $subcategories =  SubCategory::find($id);
        if($subcategories->status==1){
            $subcategories->update(['status'=>0]);

        }
        else{
            $subcategories->update(['status'=>1]);
        }
        return redirect()->back()->with('message','changed subCategory');
   }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
       $categories = Category::all();
       return view('admin.subcategory.update',compact('subCategory','categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {

     $update = $subCategory->update([

         'name'=>$request->name,
         'cat_id'=>$request->category,
        'description'=>$request->description,
        'image'=>$request->file('image')->store('category')
     ]);

 if($update)

 return redirect::to('/sub_categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( SubCategory $subCategory)
    {
      $delete =  $subCategory->delete();
      if($delete)
      return redirect()->back();
    }
}
