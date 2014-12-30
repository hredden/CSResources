<html>
	<head>
		<title> LeftNavMenu </title>
	</head>
	
	<body>
		<div class = "LeftNavMenu">
			<?php

			include "../CSResourcesDBConnect.php";
			
			echo '<h2> Topics </h2> <br />';

			echo '<li><a href = "index.php"> Home </a></li>';


			$query = "Select course_id, course_name from courses_t";
			$result = mysqli_query($dbcon, $query);

			if(!$result){
			echo "Invalid query, You should fire your web designer.";
			}
			
			while($link = mysqli_fetch_array($result))
					echo '<li><a href = "Resources.php?id='.$link['course_id'].'&course='.$link['course_name'].'">'.$link['course_name'].'</a></li>';
		

			?>
		</div>
	</body>
</html>