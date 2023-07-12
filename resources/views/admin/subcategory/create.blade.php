@extends('admin.master')

@section('content')

<div class="row mt-5" style="margin-top: 3rem">

    <div class="span4">

    </div>
    <div class="span8">

<div class="create_catagory " >

<form action="{{ url('/sub_categories') }}" method="post" enctype="multipart/form-data">
   @csrf

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name"  placeholder="name">
    </div>
    @error('name')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror

     <div class="form-group">
        <label for="name">Category</label>
        <div class="control">
            <select name="category" style="margin-left:20px">
            <option> Select Category</option>
            @foreach ($catagories as $category )

            <option value="{{$category->id  }}">{{$category->name }}</option>

            @endforeach
            </select>
        </div>
      </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea  class="form-control cleditor" name="description" placeholder="description"></textarea>
    </div>
    @error('description')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror

     <div class="form-group ">
        <label for="image">image</label>
        <input type="file" class="form-control" name="image" placeholder="image">
      </div>

    <button type="submit" class="btn btn-primary">Add-Subcategory</button>
  </form>

  </div>
</div>
</div>
@endsection
