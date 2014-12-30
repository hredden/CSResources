<html>
	<head>
		<title> RightNavMenu </title>
	</head>
	
	<body>
		<div class = "RightNavMenu">
			<?php

			include "../CSResourcesDBConnect.php";
			
			echo '<h2> Beyond Undergrad </h2> <br />';

			$query = "Select course_id, course_name from courses_t where course_id = 33 or course_id = 34";
			$result = mysqli_query($dbcon, $query);

			if (!$result) {
							die(mysqli_error($dbcon));
						}

			while($link = mysqli_fetch_array($result))
					echo '<li><a href = "Resources.php?id='.$link['course_id'].'&course='.$link['course_name'].'">'.$link['course_name'].'</a></li>';
		

			?>
		</div>
	</body>
</html>