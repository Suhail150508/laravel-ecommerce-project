<?php

use App\Models\Product;


?>

@extends('frontend.master')
@section('content')



	<!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">SubCategories</h3>
                        <div class="checkbox-filter">
                            @foreach ($subcategories as $subcategory )

                            @php
                          $subCat_count = \App\Models\Product::subCat_ProductCount($subcategory->id)
                            @endphp
                            <div class="input-checkbox">
                                <input type="checkbox" id="category-1">
                                <label for="category-1">
                                    <span></span>

      <a href="{{ url('/product_by_subCat'.$subcategory->id) }}">{{ $subcategory->name }}</a>





                                    <small>{{  $subCat_count }} </small>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    {{-- <div class="aside">
                        <h3 class="aside-title">Price</h3>
                        <div class="price-filter">
                            <div id="price-slider"></div>
                            <div class="input-number price-min">
                                <input id="price-min" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Brands</h3>
                        <div class="checkbox-filter">
                            @foreach ($brands as $brand )
              @php
             $brand_count = \App\Models\Product::brand_ProductCount($brand->id)
            @endphp

                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-1">
                                <label for="brand-1">
                                    <span></span>
                              <a href="{{url('/product_by_brand'.$brand->id) }}">{{ $brand->name }}</a>
                                    <small>{{ $brand_count }}</small>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Top selling</h3>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->
                </div>
                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sort By:
                                <select class="input-select">
                                    <option value="0">Popular</option>
                                    <option value="1">Position</option>
                                </select>
                            </label>

                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">20</option>
                                    <option value="1">50</option>
                                </select>
                            </label>
                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row">
              @foreach ($products as $product )


                        @php
                        $product['image'] = explode("|", $product->image);

                        $images = $product->image[0];
                       @endphp
                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('image/'.$images) }}" alt="" >
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{  $product->category->name }}</p>
                                    <h3 class="product-name"><a href="#">{{$product->name  }}</a></h3>
                                    <h4 class="product-price">&#2547; {{ $product->price }} <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                </div>

                                <div class="add-to-cart" >
                                    <form action="{{ url('/add-to-cart') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                     </form>
                                </div>

                            </div>
                        </div>
                        <!-- /product -->
                        @endforeach

                        <div class="clearfix visible-sm visible-xs"></div>

                    </div>
                    <!-- /store products -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        <span class="store-qty">Showing 20-100 products</span>
                        <ul class="store-pagination">
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
