<!DOCTYPE html>
<html>

  <head>
	<meta name = "Description" content ="Connects computer science students with resources divided by class"/>
    <title> Suggest a Resource </title>
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
				Have a resource to suggest? Enter the information below and we will check it out. <br><br> 
				<input type="text" name="email" size="20" value="Visitor E-Mail"><br> 
				<p>Resource Type:</p>
				<ol>
					<li><input type = "radio" name = "resourcetype" value = "Book">Book</li>
					<li><input type = "radio" name = "resourcetype" value = "Website">Website</li>
					<li><input type = "radio" name = "resourcetype" value = "Video">Video</li>
					<li><input type = "radio" name = "resourcetype" value = "Academic Paper">Academic Paper</li>
					<li><input type = "radio" name = "resourcetype" value = "Other">Other</li>
				</ol>
				<p><input type="text" name="url" size="50" value="Resource URL"></p>
				<textarea name ="comments" rows = "5" cols = "50">Anything you want to say about the resource?</textarea>
				<br/>
				<input type="submit" name="submit" value="Submit"> 
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
