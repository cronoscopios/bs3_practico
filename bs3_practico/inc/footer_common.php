
<!-- Latest compiled and minified JQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

 <script>
	
	$(document).ready(function(){
		$('#mobile-menu-button').on('click', toggleMobileMenu);
	});

	function toggleMobileMenu()
	{
		var $mobileMenu = $('#mobile-main-menu');
		$mobileMenu.slideToggle('fast');
	} 
 
</script> 