<!DOCTYPE html>
     
  <head>
   	<link href="../stylesheet.css" rel="stylesheet" type="text/css"/>
   	<script src="scripts.js"></script>
	<title>iWare - iPhone 4G</title>
  	<meta charset="utf-8">
  
  </head>
  <body onload="swap_content()">
  	<div class="header">
  		<div id="header_left">
  			<img src="../iware_logo.png" id="logo" alt="iWare"/>
  		</div> <!-- end of div header_left -->
  		
  		<div id="header_right">
  			<img src="images/iphone_front/logos/4g_logo.png" id="img_logo" alt="4G logo">
  		</div> <!-- end of div header_right -->
  	</div> <!-- end of div header -->
  		<div id="navPos">
			<div id="navMenu">
					<ul>
					
						<li><a href="../home/home.php">Home</a></li>
						
						<li><a href="iphone.php">iPhone</a>
							<ul>
								<li><a href="iphone_2g.php">iPhone 2G</a></li>
								<li><a href="iphone_3g.php">iPhone 3G</a></li>
								<li><a href="iphone_3gs.php">iPhone 3GS</a></li>
								<li><a href="iphone_4g.php">iPhone 4G</a></li>
								<li><a href="iphone_4gs.php">iPhone 4GS</a></li>
								<li><a href="iphone_5g.php">iPhone 5G</a></li>
								<li><a href="iphone_5gc.php">iPhone 5GC</a></li>
								<li><a href="iphone_5gs.php">iPhone 5GS</a></li>
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
			<a href="../home/home.php">home</a><a href="iphone.php"> // iPhone</a><a href="iphone_4g.php"> // iPhone 4G</a><span id="last_breadcrumb"></span>
		</div> <!-- end of div breadCrumbs -->
			
		<div class="content">
			<div id="left">
				<div id="includeContent">
				</div> <!-- End of includeContent -->
				<?php include('include_info/iphone_info_4g.php'); ?>
			</div>  <!-- End of div left -->
			<div id="right">
				<img id="ip_image" src="images/iphone_front/front/4g_small.png" alt="4g front"/>
			</div> <!-- End of div right -->
		</div> <!-- End of div content -->
	
	<div class="push"></div>
	</div>
	<div class="footer">
		<?php include('../footer/footer.php'); ?>
	</div>
  </body>
</html>