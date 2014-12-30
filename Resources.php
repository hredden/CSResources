<?php
$course = htmlspecialchars($_GET['course']);
$courseID = htmlspecialchars(mysql_real_escape_string($_GET['id']));
include "../CSResourcesDBConnect.php";
include "functions.php";
?>
<!DOCTYPE html>
<html>

  <head>
	<meta name = "Description" content ="Connects computer science students with resources divided by class"/>
    <title> Resources </title>
	<link rel="stylesheet" href = "CSresources2.css" />
  </head>
  
  <body>
  
	<?php include "mainHeader.php"?>
	
	<div class = "BodyContainer">
	
		<div class = "LeftPanel">
			<ul id = "NavMenu">
				<?php include 'leftNavMenu.php';?>
			</ul>
		</div><!--End LeftPanel -->
		
		<div class = "RightPanel">
			<ul id = "NavMenu">
				<?php include 'rightNavMenu.php';?>
			</ul>
		</div> <!--End LeftPanel -->
			
		<div class = "MiddlePanel">
		<div class = "MainContent">
			<?php echo '<h2 style = "color: blue; text-align: center;">'.$course.' </h2>' ?>
			
			<div class = "Books">
				
				<ul class = "BookList">
				
					<!--Populate BooksList -->
					<?php
					
					
					$query = book_query($courseID); 
					$result = mysqli_query($dbcon, $query);	
					
					if(mysqli_num_rows($result) != 0){
						echo '<h2> Books </h2>';
						while($link = mysqli_fetch_assoc($result))
						echo '<li><a href = "'.$link['Web_Address'].'">'.$link['Title'].'</a> by '.$link['Author'].' ('.$link['Publication_date'].') - '.$link['Description'].'</li>';
					}
					
					/*mysqlind version
					$stmt = $dbcon-> prepare("select r.Title, r.Author, r.Publication_date, r.Web_Address, r.Description
							  from resources_t r inner join courseresource_t cr on r.Resource_ID = cr.Resource_ID
							  inner join courses_t c on cr.Course_ID = c.Course_ID
							  where resource_type = \"B\" && c.Course_ID = ?");
					$stmt->bind_param("i", $courseID);				
					
					if($stmt->execute()){
						$result = $stmt->get_result();
						if($result->num_rows > 0){
							echo '<h2> Books </h2>';
							while($link = $result->fetch_assoc())
								echo '<li><a href = "'.$link['Web_Address'].'">'.$link['Title'].'</a> by '.$link['Author'].' ('.$link['Publication_date'].') - '.$link['Description'].'</li>';
						}
					}*/	
					
					?>
				</ul> <!-- end BookList -->
			</div><!--End Books -->
			
			<div class = "Videos">
				
				<ul class = "VideoList">
					<!--Populate VideoList -->
					
					<?php
					
					$query = video_query($courseID);
					$result = mysqli_query($dbcon, $query);
					
					if(mysqli_num_rows($result) != 0){
						echo '<h2> Videos </h2>';
						while($link = mysqli_fetch_assoc($result))
						echo '<li><a href = "'.$link['Web_Address'].'">'.$link['Title'].'</a> by '.$link['Author'].' ('.$link['Publication_date'].') - '.$link['Description'].'</li>';
					}
					
					/*mysqlind version
					$stmt = $dbcon-> prepare("select r.Title, r.Author, r.Publication_date, r.Web_Address, r.Description
							  from resources_t r inner join courseresource_t cr on r.Resource_ID = cr.Resource_ID
							  inner join courses_t c on cr.Course_ID = c.Course_ID
							  where resource_type = \"V\" && c.Course_ID = ?");
					$stmt->bind_param("i", $courseID);					
					
					if($stmt->execute()){
						$result = $stmt->get_result();
						if($result->num_rows > 0){
							echo '<h2> Videos </h2>';
							while($link = $result->fetch_assoc())
								echo '<li><a href = "'.$link['Web_Address'].'">'.$link['Title'].'</a> by '.$link['Author'].' ('.$link['Publication_date'].') - '.$link['Description'].'</li>';
						}
					}*/
					
					?>
				
				</ul>
				
			</div><!--End Videos -->
			
			<div class = "Websites">
				
					<ul class = "WebsiteList">
				
					<!--Populate WebsiteList -->
					<?php
				
					$query = website_query($courseID);
					$result = mysqli_query($dbcon, $query);
					
					if(mysqli_num_rows($result) != 0){
						echo '<h2> Websites </h2>';
						while($link = mysqli_fetch_assoc($result))
						echo '<li><a href = "'.$link['Web_Address'].'">'.$link['Title'].'</a> by '.$link['Author'].' ('.$link['Publication_date'].') - '.$link['Description'].'</li>';
					}
					
					/*mysqlind version
					$stmt = $dbcon-> prepare("select r.Title, r.Author, r.Publication_date, r.Web_Address, r.Description
							  from resources_t r inner join courseresource_t cr on r.Resource_ID = cr.Resource_ID
							  inner join courses_t c on cr.Course_ID = c.Course_ID
							  where resource_type = \"W\" && c.Course_ID = ?");
					$stmt->bind_param("i", $courseID);					
					
					if($stmt->execute()){
						$result = $stmt->get_result();
						if($result->num_rows > 0){
							echo '<h2> Websites </h2>';
							while($link = $result->fetch_assoc())
								echo '<li><a href = "'.$link['Web_Address'].'">'.$link['Title'].'</a> by '.$link['Author'].' ('.$link['Publication_date'].') - '.$link['Description'].'</li>';
						}
					}*/
										
					?>
				</ul> <!-- end websitelist -->
				
				
			</div><!--End Websites -->
			
			<div class = "Papers">
				
				<ul class = "PaperList">
				
					<!--Populate PaperList -->
					<?php
					
					$query = paper_query($courseID);
					$result = mysqli_query($dbcon, $query);
										
					if(mysqli_num_rows($result) != 0){
						echo '<h2> Papers </h2>';
						while($link = mysqli_fetch_assoc($result))
						echo '<li><a href = "'.$link['Web_Address'].'">'.$link['Title'].'</a> by '.$link['Author'].' ('.$link['Publication_date'].') - '.$link['Description'].'</li>';
					}
					
					
					/*mysqlind version
					$stmt = $dbcon-> prepare("select r.Title, r.Author, r.Publication_date, r.Web_Address, r.Description
							  from resources_t r inner join courseresource_t cr on r.Resource_ID = cr.Resource_ID
							  inner join courses_t c on cr.Course_ID = c.Course_ID
							  where resource_type = \"P\" && c.Course_ID = ?");
					$stmt->bind_param("i", $courseID);					
					
					if($stmt->execute()){
						$result = $stmt->get_result();
						if($result->num_rows > 0){
							echo '<h2> Papers </h2>';
							while($link = $result->fetch_assoc())
								echo '<li><a href = "'.$link['Web_Address'].'">'.$link['Title'].'</a> by '.$link['Author'].' ('.$link['Publication_date'].') - '.$link['Description'].'</li>';
						}
					}*/
										
					?>
				</ul> <!-- end paperList -->
				
			</div><!--End Papers -->
		</div><!--end MainContent-->	
		</div><!--End MiddlePanel -->
				
	</div>	<!--End BodyContainer -->
	
	<div class = "Footer">
		<?php include 'footer.php';?>
	</div><!-- end footer-->
			
  </body>
  
</html>
