@extends('admin.master')

@section('content')
{{-- Bootstrap CSS Lins  --}}

<div class="row mt-5" style="margin-top: 3rem">

    <div class="span4">

    </div>
    <div class="span8">

<div class="create_catagory " >

<form action="{{ url('/sizes/') }}" method="post" enctype="multipart/form-data">
   @csrf
<fieldset>
    <div class="form-group">
      <label for="name">Size</label>
      <input type="text" class="input-xlarge" name="size" id="input" data-role="tagsinput" required >
    </div>
    @error('size')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror

<div class="form-actions">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</fieldset>
  </form>

  </div>
</div>
</div>

@endsection
