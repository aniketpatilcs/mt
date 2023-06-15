
<div class="w3_agileits_top_nav">

  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="{{ url('user_dashboard') }}"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								<li><a href="{{ url('/user/view_record/') }}"> <i class="fa fa-tachometer"></i> Profile   </a></li>
 
	 
							 
								  <li><a href="{{ url('/user/logout') }}"> <i class="fa fa-table" aria-hidden="true"></i> Logout</a></li> 
								 
								
							 
							 
								 
							 
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="{{ url('/user/dashboard/') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i>User =<?php echo Session::get('user_name'); ?>  </a></h1></li>
					 
				 
					<li class="second top_bell_nav">
				   
				</li>

				 
				 
			</ul>
			<!-- //nav -->
			
		</div>
		
		
</div>