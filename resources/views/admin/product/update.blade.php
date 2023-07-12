@extends('admin.master')

@section('content')

<div class="row mt-5" style="margin-top: 3rem">

    <div class="span4">

    </div>
    <div class="span8">

<div class="prodcut " >

<form action="{{ url('/products/'.$product->id) }}" method="post" enctype="multipart/form-data">
   @csrf
@method('PUT')
    <div class="form-group">
      <label for="name">Code</label>
      <input type="text" class="form-control" name="code"   value="{{ $product->code }}" placeholder="code">
    </div>
    @error('code')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name"   value="{{ $product->name }}" placeholder="name">
    </div>
    @error('name')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror

     <div class="form-group">
        <label for="name">Category</label>
        <div class="control">
            <select name="category"   style="margin-left:20px">
            <option> Select Category</option>
            @foreach ($categories as $category )

            <option value="{{$category->id  }}">{{$category->name }}</option>

            @endforeach
            </select>
        </div>
      </div>

      <div class="form-group">
        <label for="name">SubCategory</label>
        <div class="control">
            <select name="subcategory"   style="margin-left:20px">
            <option> Select SubCategory</option>
            @foreach ($subcategories as $subcategory )

            <option value="{{$subcategory->id  }}">{{$subcategory->name }}</option>

            @endforeach
            </select>
        </div>
      </div>

      <div class="form-group">
        <label for="name">Brand</label>
        <div class="control">
            <select name="brand"   style="margin-left:20px">
            <option> Select Brand</option>
            @foreach ($brands as $brand )

            <option value="{{$brand->id  }}">{{$brand->name }}</option>

            @endforeach
            </select>
        </div>
      </div>

      <div class="form-group">
        <label for="name">Unit</label>
        <div class="control">
            <select name="unit"   style="margin-left:20px">
            <option> Select Unit</option>
            @foreach ($units as $unit )

            <option value="{{$unit->id  }}">{{$unit->name }}</option>

            @endforeach
            </select>
        </div>
      </div>

      <div class="form-group">
        <label for="name">Size</label>
        <div class="control">
            <select name="size"  id="input" data-role="tagsinput" style="margin-left:20px">
            <option> Select Size</option>
            @foreach ($sizes as $size )

            <option value="{{$size->id  }}">{{implode(',',Json_decode($size->size)) }}</option>

            @endforeach
            </select>
        </div>
      </div>

      <div class="form-group">
        <label for="name">Color</label>
        <div class="control">
            <select name="color" id="input" data-role="tagsinput" style="margin-left:20px">
            <option> Select Color</option>
            @foreach ($colors as $color )

            <option value="{{$color->id  }}">{{implode(',',Json_decode($color->color)) }}</option>

            @endforeach
            </select>
        </div>
      </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea  class="form-control cleditor" name="description"   placeholder="description">{{ $product->description }}</textarea>
    </div>
    @error('description')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror

     <div class="form-group">
        <label for="name">Price</label>
        <input type="text" class="form-control" name="price" value="{{ $product->price }}"   placeholder="price">
      </div>
      @error('price')
      <div class="error" style="color:red">{{ $message }}</div>
       @enderror

    <div class="form-group ">
      <label for="image">image</label>
      <input type="file" class="form-control" name="file[]"   multiple required>
    </div>
    @error('file[]')
    <div class="error" style="color:red">{{ $message }}</div>
     @enderror

    <button type="submit" class="btn btn-primary">Update Product</button>
  </form>

  </div>
</div>
</div>
@endsection
