@extends('admin.master')



@section('content')

<div class="row all_products" style="margin:2rem 16rem;width:80%">
    {{-- <div class="col-md-8">

    </div> --}}

    <div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Images</th>
                  <th>price</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>
          </thead>
          @foreach ($products as $product )
          @php
          $product['image'] = explode("|",$product->image);
        @endphp
          <tbody>

            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    @foreach ($product->image as $images )
                    <img src="{{ asset('/image/'. $images) }}" alt="img" style="width: 60px">
                    @endforeach

                </td>
                <td> &#2547: {{  $product->price }}</td>

                <td>
                    @if($product->status==1)
                    <span class="label label-important">Active</span>
                    @else
                    <span class="label label-secondary">Deactive</span>
                    @endif
                </td>
       {{-- @if ($categories->status==1) --}}
                <td class="row">
                    <div class="span3"></div>

                    <div class="span2">

         @if($product->status==1)

              <a class="btn btn-success" href="{{ url('/products'.$product->id) }}" >
                <i class="halflings-icon white thumbs-down"></i>
            </a>

            @else

            <a class="btn btn-danger" href="{{ url('/products'.$product->id)  }}" >
                <i class="halflings-icon white thumbs-up"></i>
            </a>
            @endif
            </div>
{{-- @else --}}

               <div class="span2">

                    <a class="btn btn-info" href="{{url('/products/'.$product->id.'/edit')}}" style="margin-left: 1rem">
                        <i class="halflings-icon white edit"></i>
                    </a>
                </div>

                    <div class="span2">
                        <form method="post" action="{{ url('/products/'.$product->id ) }}" style="margin-left: 1rem">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> <i class="halflings-icon white trash"></i></button>

                        </form>
                    </div>

                    <div class="span3"></div>
                </td>
            </tr>


          </tbody>
          @endforeach
      </table>
    </div>

</div>

@endsection
