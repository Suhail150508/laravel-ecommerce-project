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
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-user-o"></i> Logout</a></li>
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
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/ecomm_logo.png" alt="" style="width: 60px;height:60px;border-radius:30px">
								</a>
							</div>
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
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                    @foreach ($categories as $category )
                    <li><a href="{{ url('/product_by_cat'.$category->id) }}">{{ $category->name }}</a></li>
                    @endforeach


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
