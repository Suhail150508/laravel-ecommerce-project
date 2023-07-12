@extends('admin.master')

@section('content')

<div class="row mt-5" style="margin-top: 3rem">

    <div class="span4">

    </div>
    <div class="span8">

<div class="create_catagory " >

<form action="{{ url('/sizes/'.$size->id) }}" method="post" enctype="multipart/form-data">
   @csrf
@method('PUT')
    <div class="form-group">
      <label for="size">Size</label>
      <input type="text" class="input-xlarge" name="size"  id="input" data-role="tagsinput" value="{{implode(',',Json_decode($size->size))}}" >
    </div>
    @error('size')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror

    <button type="submit" class="btn btn-primary">Add-Size</button>
  </form>

  </div>
</div>
</div>
@endsection
