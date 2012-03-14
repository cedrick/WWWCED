<script type="text/javascript">
$(document).ready(function(){	
	changeWidth(1000);
	 function changeWidth(menuWidth){
		 var menuItems = $('#menu li').size();
		 var itemWidth = (menuWidth/menuItems)-2;
		 
		 $('#menu').css({'width': menuWidth +'px'});
		 $('#menu a').css({'width': itemWidth +'px'});

	 }
});
</script>