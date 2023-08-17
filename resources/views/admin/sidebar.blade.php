<div class="container-fluid-full">
		<div class="row-fluid">

<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{route('admins')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet" style="font-size: 1.5rem"> Dashboard</span></a></li>
						{{-- <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
						<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li> --}}
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet" style="font-size: 1.2rem"> Catagories</span>   <i class="fa fa-arrow-circle-right fa-2x" style="margin-.5eft:1rem; font-size:1.3rem;background-color:black"> </i> </a>
							<ul>
								<li><a class="submenu" href="{{ url('/categories/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Catagory</span></a></li>
								<li><a class="submenu" href="{{ url('/categories') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Catagory</span></a></li>

							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet" style="font-size: 1.2rem"> SubCatagories</span>    <i class="fa fa-arrow-circle-right fa-2x" style="margin-.5eft:1rem; font-size:1.3rem;background-color:black"> </i> </a>
							<ul>
								<li><a class="submenu" href="{{ url('/sub_categories/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create SubCatagory</span></a></li>
								<li><a class="submenu" href="{{ url('/sub_categories') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All SubCatagory</span></a></li>

							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet" style="font-size: 1.2rem"> Brands</span>   <i class="fa fa-arrow-circle-right fa-2x" style="margin-.5eft:1rem; font-size:1.3rem;background-color:black"> </i> </a>
							<ul>
								<li><a class="submenu" href="{{ url('/brands/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Brand</span></a></li>
								<li><a class="submenu" href="{{ url('/brands') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Brand</span></a></li>

							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet" style="font-size: 1.2rem"> Units</span>     <i class="fa fa-arrow-circle-right fa-2x" style="margin-.5eft:1rem; font-size:1.3rem;background-color:black"> </i> </a>
							<ul>
								<li><a class="submenu" href="{{ url('/units/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Units</span></a></li>
								<li><a class="submenu" href="{{ url('/units') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Units</span></a></li>

							</ul>
						</li>


						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet" style="font-size: 1.2rem"> Size</span>    <i class="fa fa-arrow-circle-right fa-2x" style="margin-.5eft:1rem; font-size:1.3rem;background-color:black"> </i> </a>
							<ul>
								<li><a class="submenu" href="{{ url('/sizes/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Size</span></a></li>
								<li><a class="submenu" href="{{ url('/sizes') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Size</span></a></li>

							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet" style="font-size: 1.2rem"> Colors</span> <i class="fa fa-arrow-circle-right fa-2x" style="margin-.5eft:1rem; font-size:1.3rem;background-color:black"> </i> </a>
							<ul>
								<li><a class="submenu" href="{{ url('/colors/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create color</span></a></li>
								<li><a class="submenu" href="{{ url('/colors') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All color</span></a></li>

							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet" style="font-size: 1.2rem"> Products </span>    <i class="fa fa-arrow-circle-right fa-2x" style="margin-.5eft:1rem; font-size:1.3rem;background-color:black"> </i> </a>
							<ul>
								<li><a class="submenu" href="{{ url('/products/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Product</span></a></li>
								<li><a class="submenu" href="{{ url('/products') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Product</span></a></li>

							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet" style="font-size: 1.2rem"> Order</span>   <i class="fa fa-arrow-circle-right fa-2x" style="margin-.5eft:1rem; font-size:1.3rem;background-color:black"> </i></a>
							<ul>

								<li><a class="submenu" href="{{ url('/order') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All_Order</span></a></li>

							</ul>
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
