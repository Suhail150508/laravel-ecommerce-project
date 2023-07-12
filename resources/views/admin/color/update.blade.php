@extends('admin.master')

@section('content')

<div class="row mt-5" style="margin-top: 3rem">

    <div class="span4">

    </div>
    <div class="span8">

<div class="create_catagory " >

<form action="{{ url('/colors/'.$color->id) }}" method="post" enctype="multipart/form-data">
   @csrf
@method('PUT')
    <div class="form-group">
      <label for="size">Color</label>
      <input type="text" class="input-xlarge" name="color"  id="input" data-role="tagsinput" value="{{implode(',',Json_decode($color->color))}}" >
    </div>
    @error('size')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror

    <button type="submit" class="btn btn-primary">Add-Color</button>
  </form>

  </div>
</div>
</div>
@endsection
