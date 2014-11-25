<!DOCTYPE html>
     
  <head>
   	<link href="../stylesheet.css" rel="stylesheet" type="text/css">
	<title>iWare</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta charset="UTF-8">
  	<meta name="keywords" content="apple iphone ipad ipod iware phones ios">
  	
  	<script>
  	var image1=new Image()
	image1.src="../iphone/images/iphone_front/front/2g_small.png"
	var image2=new Image()
	image2.src="../iphone/images/iphone_front/front/3g_small.png"
	var image3=new Image()
	image3.src="../iphone/images/iphone_front/front/3gs_small.png"
	var image4=new Image()
	image4.src="../iphone/images/iphone_front/front/4g_small.png"
	var image5=new Image()
	image5.src="../iphone/images/iphone_front/front/4gs_small.png"
	var image6=new Image()
	image6.src="../iphone/images/iphone_front/front/5g_small.png"
	var image7=new Image()
	image7.src="../iphone/images/iphone_front/front/5gc_small.png"
	var image8=new Image()
	image8.src="../iphone/images/iphone_front/front/5gs_small.png"
	</script>
  	
  
  </head>
  <body>
  	<div class="header">
  		<div id="header_left">
  			<img src="../iware_logo.png" id="logo" alt="iWare"/>
  		</div> <!-- end of div header_left -->
  	</div> <!-- end of div header -->
  		<div id="navPos">
			<div id="navMenu">
					<ul>
					
						<li><a href="home.php">Home</a></li>
						
						<li><a href="../iphone/iphone.php">iPhone</a>
							<ul>
								<li><a href="../iphone/iphone_2g.php">iPhone 2G</a></li>
								<li><a href="../iphone/iphone_3g.php">iPhone 3G</a></li>
								<li><a href="../iphone/iphone_3gs.php">iPhone 3GS</a></li>
								<li><a href="../iphone/iphone_4g.php">iPhone 4G</a></li>
								<li><a href="../iphone/iphone_4gs.php">iPhone 4G</a></li>
								<li><a href="../iphone/iphone_5g.php">iPhone 5G</a></li>
								<li><a href="../iphone/iphone_5gc.php">iPhone 5GC</a></li>
								<li><a href="../iphone/iphone_5gs.php">iPhone 5GS</a></li>
							</ul> <!-- end innner UL -->
						</li> <!-- eind main LI -->	
						
						<li><a href="../tutorials/tutorials.php">Tutorials</a></li> <!-- eind main LI -->	
						
						<li><a href="#">About</a>
							<ul>
								<li><a href="../about/contact.php">Contact</a></li>
								<li><a href="../about/sitemap.php">Sitemap</a></li>
							</ul> <!-- end innner UL -->
						</li> <!-- eind main LI -->	
							
					</ul> <!-- end main UL -->
			</div> <!-- end of div navMenu -->
		</div> <!-- end of div navPos -->
	
	
	<div class="contentwrapper">
	
		<div id="breadCrumbs">
			<a href="home.php">home</a>
		</div> <!-- end of div breadCrumbs -->
			
		<div class="content">
			<div id="slideshow">
				<img src=".../iphone/images/iphone_front/front/2g_small.png" id="slide" alt="slideshow"/>
		
				<script>
					<!--
					//variable that will increment through the images
					var step=1
					function slideit(){
					//if browser does not support the image object, exit.
					if (!document.images){
						return
					}
					document.images.slide.src=eval("image"+step+".src")
					if (step<8){
						step++
					}
					else {
						step=1
					}
					//call function "slideit()" every 2.5 seconds
					setTimeout("slideit()",2500)
					}
					slideit()
					//-->
				</script>
			</div> <!-- end of div slideshow -->
					
			<div id="home_content">
				<p>De iPhone is een smartphone van Apple. Met de iPhone is het onder
				meer mogelijk te bellen, sms'en, mailen, internetten, muziek te
				beluisteren, foto's en video's te maken en te bekijken, en games te
				downloaden en te spelen. Dit apparaat was met de HTC Touch een van de
				eerste smartphones met een on-screen-toetsenbord. Het heeft geen
				mechanische toetsen om telefoonnummers of sms-berichten in te tikken. De
				iPhone gebruikt iOS, een aangepaste versie van Mac OS X (het
				besturingssysteem voor Apple Mac-computers). Deze software creëert onder
				andere de virtuele toetsen op het aanraakscherm voor de bediening.</p>

				<p>Over de iPhone werd al gespeculeerd lang voordat hij uitgebracht
				werd. In 2002 waren er al geruchten dat een iPhone in de maak was In
				september 2005 kondigde Apple de Motorola ROKR E1 aan, de eerste mobiele
				telefoon die met iTunes kon worden gesynchroniseerd. Omdat de
				Apple-ontwerpers het tot 2006 te druk hadden met de ontwikkeling van de
				iPod-lijn, werd samenwerking met Motorola gezocht. Steve Jobs gaf
				na de lancering toe dat hij niet gelukkig was met de ROKR. In
				september 2006 verwijderde Apple de ROKR-ondersteuning in iTunes. In
				plaats daarvan bood iTunes ondersteuning voor een nog onbekende mobiele
				telefoon, waarmee niet alleen audio-, maar ook video- en foto-bestanden
				tussen telefoon en desktopcomputer uitgewisseld konden worden. Dit
				leidde in verschillende media tot speculaties over een eigen mobiele
				telefoon van Apple.</p>
			</div> <!-- end of div home_content -->
			
	
				
		</div>
	
	<div class="push"></div>
	</div>
	<div class="footer">
		<?php include('../footer/footer.php'); ?>
	</div>
  </body>
</html>