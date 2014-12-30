<?php

	function book_query($courseID){
		$query = "select r.Title, r.Author, r.Publication_date, r.Web_Address, r.Description
							  from resources_t r inner join courseresource_t cr on r.Resource_ID = cr.Resource_ID
							  inner join courses_t c on cr.Course_ID = c.Course_ID
							  where resource_type = \"B\" && c.Course_ID = ".$courseID;
		return $query;
	
	}
	
	function video_query($courseID){
		$query = "select r.Title, r.Author, r.Publication_date, r.Web_Address, r.Description
							  from resources_t r inner join courseresource_t cr on r.Resource_ID = cr.Resource_ID
							  inner join courses_t c on cr.Course_ID = c.Course_ID
							  where resource_type = \"V\" && c.Course_ID = ".$courseID;
		return $query;
	
	}
	
	function website_query($courseID){
		$query = "select r.Title, r.Author, r.Publication_date, r.Web_Address, r.Description
							  from resources_t r inner join courseresource_t cr on r.Resource_ID = cr.Resource_ID
							  inner join courses_t c on cr.Course_ID = c.Course_ID
							  where resource_type = \"W\" && c.Course_ID = ".$courseID;
		return $query;
	
	}
	
	function paper_query($courseID){
		$query = "select r.Title, r.Author, r.Publication_date, r.Web_Address, r.Description
							  from resources_t r inner join courseresource_t cr on r.Resource_ID = cr.Resource_ID
							  inner join courses_t c on cr.Course_ID = c.Course_ID
							  where resource_type = \"P\" && c.Course_ID = ".$courseID;
		return $query;
	
	}
?>

