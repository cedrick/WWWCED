<html>
<head>
<title>Amazing Palawan Holidays</title>
<script type="text/javascript" src="templates/library/jquery.js"></script>
<script type="text/javascript" src="templates/library/yoxview/yoxview-init.js"></script>
<?php include ("templates/library/yoxview/yoxview.css"); ?>
<?php include ("templates/library/menu.js"); ?>
<?php include ("templates/style.css"); ?>
<script type="text/javascript">
LoadScript(yoxviewPath + "yoxview-nojquery.js");
$(document).ready(function(){
	$("#thumbnails").yoxview({
	    backgroundColor: 'Blue',
	    playDelay: 5000
	});
});
</script>
</head>
<body id="gallery">
<div class="container">
<div class="header">
</div>
<div class="spacer">
	<center>
		<img class="splash" src="templates/images/header.gif" alt="splash_head"/>
	</center>
</div>
<div class="subheader">
	<br>
	<?php include ("templates/navigation.php"); ?>
</div>
<div class="content">
<br><br>
<center>
	<div class="yoxview">
	    <a href="templates/gallery/snakei02.jpg"><img class="snake" src="templates/gallery/snake.png" alt="snake"/></a>
	    <a href="templates/gallery/crocodile-farm-palawan-entrance(1).jpg"><img class="crocodile" src="templates/gallery/crocodile_farm.png" alt="crocodile"/></a>
		<a href="templates/gallery/BlueLagoon.Scenery.1_prefRes.jpg"><img class="blue_lagoon" src="templates/gallery/blue_lagoon.png" alt="blue_lagoon"/></a>
		<a href="templates/gallery/Puerto-Princesa-Butterfly-Garden-5.jpg"><img class="butterfly.png" src="templates/gallery/butterfly.png" alt="butterfly.png"/></a>
		<br>
		<a href="templates/gallery/BlueLagoon.Sanaskela.1_prefRes.jpg"><img class="BlueLagoon" src="templates/gallery/BlueLagoon.png" alt="BlueLagoon"/></a>
		<a href="templates/gallery/BlueLagoon.Scenery.2.1_prefRes.jpg"><img class="BlueLagoon_2" src="templates/gallery/BlueLagoon_2.png" alt="BlueLagoon_2"/></a>
		<a href="templates/gallery/UndergroundRiver.2.1.RG_prefRes.jpg"><img class="under_ground" src="templates/gallery/under_ground.png" alt="under_ground"/></a>
		<a href="templates/gallery/palawan-bakers-hill.jpg"><img class="bikers" src="templates/gallery/bikers.png" alt="bikers"/></a>
		<br>
		<a href="templates/gallery/dos-palmas-facade1.jpg"><img class="dos" src="templates/gallery/dos_1.png" alt="dos"/></a>
		<a href="templates/gallery/city-tour.jpg"><img class="city" src="templates/gallery/city-tour.png" alt="city"/></a>
		<a href="templates/gallery/underground-river.JPG"><img class="under" src="templates/gallery/under.png" alt="under"/></a>
		<a href="templates/gallery/el_nido_palawan.png"><img class="nido" src="templates/gallery/el_nido.png" alt="nido"/></a>
	</div>
</center>
</div>

<?php include ("templates/footer.php"); ?>
</div>
</body>
</html>