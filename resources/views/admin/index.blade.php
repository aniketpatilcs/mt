<!DOCTYPE html>
<html lang="zxx">
<head>
<title>  Admin</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content=" " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/component.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/style_grid.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		 
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
 
                <li class="second logo admin"><h1><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>  ADMIN</a></h1></li>
					 
			</ul>
		 
			
		</div>
		<div class="clearfix"></div>
		 
			<div class="inner_content">
			    <!-- /inner_content_w3_agile_info-->
				<div class="inner_content_w3_agile_info">
				

						<div class="registration admin_agile">
							
							<div class="signin-form profile admin">
								<h2>Admin Login <?php   Session::get('admin_name'); //print_r($_SESSION); ?> </h2>
					@if(Session::has('reset_token'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('reset_token') }}</p>
@endif

								@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

								<div class="login-form">
									<form method="post" action="{{ url('/admin/login') }}" >
										@csrf
										<input type="text" name="uname"  required="">
										<input type="password" name="pass"  required="">
										<div class="tp">
											<input type="submit" name="submit"  value="LOGIN">
										</div> 
									</form>
								</div>
 							</div>

			    </div>
				<!-- //inner_content_w3_agile_info-->
			</div>
		 
		</div> 
<div class="copyrights">
	 <p>  </p>
</div>	
<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('assets/js/classie.js') }}"></script>
<script src="{{ asset('assets/js/gnmenu.js') }}"></script>

          
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
	<script src="{{ asset('assets/js/prettymaps.js') }}"></script>

				
				
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}
 
			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/bootstrap-3.1.1.min.js') }}/"></script>


</body>
</html>
