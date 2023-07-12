<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= Category::all();

        return view('admin.category.all_category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
    'name'=>'required',
    'description'=>'required',
    'image'=>'required',


        ]);
        $categories = new Category;
        $categories->id = $request->category;
        $categories->name=$request->name;
        $categories->description = $request->description;

        $categories->image=$request->image->store('category');
        // if($request->hasFile('image'))
        // {
        //     $file=$request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $fileName = time().'.'. $extension;
        //     $file->move('category', $fileName);
        //     $categories->image = $fileName;
        // }
        $categories->save();
        return Redirect::to('categories');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Category $category)
    {
        if($category->status==1){
            $category->update(['status'=>0]);

        }
        else{
            $category->update(['status'=>1]);
        }
        return redirect()->back()->with('message','changed category');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
    //    $category = Category::Find($id);
       return view('admin.category.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category )
    {
     $update = $category->update([

         'name'=>$request->name,
        'description'=>$request->description,
        'image'=>$request->file('image')->store('category')
     ]);

 if($update)

 return redirect::to('/categories');


        // $update =  Category::find($request->$id);
        // $update->name = $request->name;
        // $update->description = $request->description;
        // $update->image = $request->file('image')->store('category');
        // $update->save;

        //  return redirect::to('/categories');

    //    $category->image =$request->file('image')->store('category');

        // if($request->hasFile('image'))
        // {
        //     $file=$request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $fileName = time().'.'. $extension;
        //     $file->move('category', $fileName);
        //     $category->image = $fileName;
        // }



    //    if($update)
    // $category->save;



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Category $Category)
    {
      $delete =  $Category->delete();
      if($delete)
      return redirect()->back();
    }
}
