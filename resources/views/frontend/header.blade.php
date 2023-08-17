<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +017-98562848</a></li>
						<li><a href="suhail1054155@gmail.com"><i class="fa fa-envelope-o"></i> sohail1054155@gmail.com</a></li>

					</ul>
					<ul class="header-links pull-right">
						{{-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> --}}
                        @php
                            $customer_id = Session::get('id');
                        @endphp
                        @if ( $customer_id != Null)

                    <li>
                         <div class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"  style="color: white;background-color:black;border:none">
								<i class="fa fa-solid fa-user" style="color: white"></i>{{ Session::get('name') }}

							</a>
							<ul class="dropdown-menu" >
								<li class="dropdown-menu-title">
 									<span style="background-color:black;padding:6px;color:white;width:50px;margin:3px">Account Settings</span>
								</li>
								<li><a   href="#" style="color: black;margin-top:5px"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
								<li><a   href="{{ url('/logout') }}" style="color: black;margin-top:5px"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
								<li><a   href="{{ url('# ') }}" style="color: black;margin-top:5px"><i class="fa fa-info-circle" aria-hidden="true"></i>Details</a></li>
							</ul>
						</div>
                    </li>
                        @else
                        <li><a href="{{ url('/login') }}"><i class="fa fa-user-o"></i> Login</a></li>
                        @endif
                        <li><a href="{{ url('/register') }}"><i class="fa fa-user-o"></i> Sign-up</a></li>


					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo" style="margin-right: 2rem">
								<a href="#" class="logo">
									<img src="./img/ecomm_logo.png" alt="" style="width: 60px;height:60px;border-radius:30px">
								</a>
							</div>
                            <h2 style="color: white;margin-top:1rem;">Shopping</h2>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">

								<form action="{{ url('/search') }}" method="GET">
                                    @csrf
									<select class="input-select" name="category">
										<option value="All"  {{ request('category') == 'All' ? 'selected' : ' ' }}> All Categories</option>
                                        @foreach ($categories as $category )
										<option value="{{ $category->id }}"  {{ request('category') == $category->id ? 'selected' : ' ' }}>{{ $category->name }}</option>
                                        @endforeach
									</select>
									<input class="input" name="product" placeholder="Search here" value="{{ request('product') }}">
								<button class="search-btn">Search</button>

								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									{{-- <a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a> --}}

                                    @php

                                    $quantity = App\Models\Wishlist::where('user_ip',request()->ip())->sum('quantity');
                                @endphp
									<a href="{{ url('/all_wishlist') }}">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">{{ $quantity }}</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->

								<div class="dropdown">
                                    @php
                                    $total = App\Models\Cart::all()->where('user_ip',request()->ip())->sum(function($t){
                                      return  $t->quantity * $t->price ;
                                    });
                                    $quantity = App\Models\Cart::where('user_ip',request()->ip())->sum('quantity');
                                @endphp
									<a href="{{ url('/all_carts') }}">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">{{ $quantity }}</div>
									</a>
							</div>

							</div>
							</div>


						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
        </div>

			</header>

	<!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav" style="margin-top: 2rem;font-size:2rem">
                <!-- NAV -->
                {{-- <ul class="main-nav nav navbar-nav">
                    <li ><a href="{{url('/')}}"><h4>Home</h4></a></li>
                    <li ><span style="color: white">.</span></li>
                    <li class="active"><a href="#"><h4>Categories: </h4></a></li>

                    <li class="active">

                        @foreach ($categories as $category )
                        <div class="btn-group">
                            <button class=" btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:lightgray;color:black;font-weight:200">
                                {{ $category->name }} <i class="fa fa-sort-desc" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu">
                                @foreach ($subcategories as $subcategory )
                               <h5><a class="btn btn-primary"  href="{{ url('/product_by_subCat'.$subcategory->id) }}">{{ $subcategory->name }}</a></h5>
                                @endforeach
                            </div>
                          </div>
                          @endforeach
                    </li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li><a href="/admins"><h4>Admin</h4></a></li>

                </ul> --}}

                <ul class="main-nav nav navbar-nav">
                    <li ><a href="{{url('/')}}"><h4>Home</h4></a></li>
                    <li ></li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li class="active"><a href="#"><h4>Categories: </h4></a></li>
                    @foreach ($categories as $category )
                    <li><a href="{{ url('/product_by_cat'.$category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>

                    <li><a href="/admins"><h4>Admin</h4></a></li>
                </ul>

                <!-- /NAV -->
                <!-- /NAV -->
            </div>

            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
