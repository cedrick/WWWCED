<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Palawan Amazing Holidays</title>
	<!-- Start VisualSlideShow.com HEAD section -->
	<?php include ("templates/style.css"); ?>
	<link rel="stylesheet" type="text/css" href="engine/css/slideshow.css" media="screen" />
	<style type="text/css">.slideshow a#vlb{display:none}</style>
	<script type="text/javascript" src="engine/js/mootools.js"></script>
	<script type="text/javascript" src="engine/js/visualslideshow.js"></script>
	<script type="text/javascript" src="templates/library/jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){	
		changeWidth(600);
		 function changeWidth(menuWidth){
			 var menuItems = $('#menu li').size();
			 var itemWidth = (menuWidth/menuItems)-2;
			 
			 $('#menu').css({'width': menuWidth +'px'});
			 $('#menu a').css({'width': itemWidth +'px'});
	
		 }
	});
	</script>
	<!-- End VisualSlideShow.com HEAD section -->
</head>
<body style="background-color:#ffffff">
	<!-- Start VisualSlideShow.com BODY section -->
<div class="container">
	<div class="header">
	</div>
		<div id="show" class="slideshow">
			<div class="slideshow-images">
			<a href=""><img id="slide-0" src="data/images/1.jpg" alt="1" title="1" /></a>
			<a href=""><img id="slide-1" src="data/images/3.jpg" alt="3" title="3" /></a>
			<a href=""><img id="slide-2" src="data/images/2.jpg" alt="2" title="2" /></a>
			<a href=""><img id="slide-3" src="data/images/4.jpg" alt="4" title="4" /></a>
			<a href=""><img id="slide-4" src="data/images/5.jpg" alt="5" title="5" /></a>
			<a href=""><img id="slide-5" src="data/images/6.jpg" alt="6" title="6" /></a>
			<a href=""><img id="slide-6" src="data/images/7.jpg" alt="7" title="7" /></a>
			<a href=""><img id="slide-7" src="data/images/8.jpg" alt="8" title="8" /></a>
			</div>
		<a id="vlb" href="http://visualslideshow.com">Flash Slideshow Maker by VisualSlideshow.com v1.6</a>
		</div>
</div>
	<!-- End VisualSlideShow.com BODY section -->
</body>
</html>