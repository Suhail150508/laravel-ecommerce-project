<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="{{url('/')}}"><h4>Home</h4></a></li>
						<li class="active"><span></span></li>
						<li class="active"><span></span></li>
						<li class="active"><a href="#"><h4>Categories: </h4></a></li>
                        @foreach ($categories as $category )



                        <li><a href="{{ url('/product_by_cat'.$category->id) }}">{{ $category->name }}</a></li>
                        @endforeach

                        <li class="active"><span></span></li>
                        <li class="active"><span></span></li>
                        <li class="active"><span></span></li>
                        <li class="active"><span></span></li>
                        <li><a href="/admins"><h4>Admin</h4></a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
