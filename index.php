<!DOCTYPE html>
<html>

  <head>
	<meta name = "Description" content ="Connects computer science students with resources divided by class"/>
    <title> CS Undergrad Resources </title>
	<link rel="stylesheet" href = "CSresources2.css" />
  </head>
  
  <body>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57652096-1', 'auto');
  ga('send', 'pageview');

</script>
  
	<?php include 'mainHeader.php'?>
	
	<div class = "BodyContainer">
		
		<div class = "LeftPanel">
			<ul id = "NavMenu">
				<?php include 'leftNavMenu.php';?>
			</ul>
		</div><!--End LeftPanel-->
		
		<div class = "RightPanel">
			<ul id = "NavMenu">
				<?php include 'rightNavMenu.php';?>
			</ul>
		</div><!--End RightPanel-->
			
		<div class = "MiddlePanel">
			<div class = "MainContent">
				<p> Welcome to the CS Undergrad Resource page. Here you will find resources related to all of the common CS undergrad core courses.
				Please select your course from the menu on the left to find resources.</p>
			</div><!--End Main Content-->
		</div><!--End MiddlePanel-->
		
		<div class = "Push"></div>
	</div><!--End BodyContainer-->
	
	<div class = "Footer">
		<?php include 'footer.php';?>
	</div><!-- end footer-->
	
  </body>
  
</html>
