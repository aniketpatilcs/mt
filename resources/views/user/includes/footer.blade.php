<div class="copyrights">
	 <p>  </p>
</div>	
 <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('assets/js/classie.js') }}"></script>
<script src="{{ asset('assets/js/gnmenu.js') }}"></script>

          
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
	<script src="{{ asset('assets/js/prettymaps.js') }}"></script>

				
				
<!-- //js -->
<script src="{{ asset('assets/js/screenfull.js') }}"></script>
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
