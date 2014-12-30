<!DOCTYPE html>
<html>

  <head>
	<meta name = "Description" content ="Connects computer science students with resources divided by class"/>
    <title> Contact Us </title>
	<link rel="stylesheet" href = "CSresources2.css" />
  </head>
  
  <body>
  
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
			<div class = "ContactForm">
				
			<!--Code from HostGator-->
			<form action="http://www.csundergradresources.com/cgi-sys/formmail.pl" method="post">	
				<input type="hidden" name="recipient" value="contact@csundergradresources.com"> 
				<input type="hidden" name="subject" value="Contact Us E-Mail"> 
				Thanks for deciding to contact us! We welcome any comments or suggestions. <br><br> 
				<p><input type="text" name="email" size="20" value="Visitor E-Mail"><br></p>
				<textarea name ="comments" rows = "5" cols = "50">Enter comments or suggestions here.</textarea>
				<br/>
				<input type="submit" name="submit" value="E-Mail Me!"> 
				<input type="hidden" name="redirect" value="http://csundergradresources.com/thankyou.php"> 
			</form> 
				
			</div><!--End ContactForm-->
		</div><!--End MiddlePanel-->
		
		<div class = "Push"></div>
	</div><!--End BodyContainer-->
	
	<div class = "Footer">
		<?php include 'footer.php';?>
	</div><!-- end footer-->
	
  </body>
  
</html>
