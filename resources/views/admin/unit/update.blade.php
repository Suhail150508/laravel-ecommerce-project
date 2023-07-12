@extends('admin.master')

@section('content')

<div class="row mt-5" style="margin-top: 3rem">

    <div class="span4">

    </div>
    <div class="span8">

<div class="create_catagory " >

<form action="{{ url('/units/'.$unit->id) }}" method="post" enctype="multipart/form-data">
   @csrf
@method('PUT')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" value="{{$unit->name}}"  placeholder="name">
    </div>
    @error('name')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror



    <div class="form-group">
      <label for="description">Description</label>
      <textarea  class="form-control cleditor" name="description"  placeholder="description">{{$unit->description}}</textarea>
    </div>
    @error('description')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror


    <button type="submit" class="btn btn-primary">Add-Unit</button>
  </form>

  </div>
</div>
</div>
@endsection
