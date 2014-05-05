<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="utf-8" />		
		<title>Music Finder</title>  
		<link rel="stylesheet" href="../Css/global.css" /> 
		<link rel="icon" type="image/png" href="../Links/musicIcon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 		   
		<![endif]-->
	</head> 
	
	
	     
		<body>
		   <?php include_once('controller/header.php')   ?>
		
		   
	             <form id="searchBar"  method="post" onsubmit=" return checkFields()"  action="controller/artistSearch.php">
	                
	             	<div class="search" > 
	             <label class="label"   for="artist" >Artist </label> 
	            <input class="textInput" id="artistSearchInput" onkeyup="javascript: inputBlurred(this)" type="search" name="artist" id="artist" placeholder="Search for an artist" />
	            
					</div>
				
				
				<div class="search" "> 
	             <label class="label"  for="record" >Record </label> 
	            <input class="textInput" id="recordSearchInput" onkeyup="javascript: inputBlurred(this)" type="search" name="record" id="record" placeholder="Search for a record" />
	            
					</div>
					
					
					
				<div class="search" > 
	             <label class="label" for="album" >Album </label> 
	            <input class="textInput" id= "albumSearchInput"  type="search"  onkeyup="javascript: inputBlurred(this)" name="album" id="album" placeholder="Search for a album" />
	            
					</div>
					
					
					
					
				<div class="search" > 
	             <label class="label"  for="genre" >Genre </label> 
	            <input class="textInput" id= "genreSearchInput" type="search" onkeyup="javascript: inputBlurred(this)" name="genre" id="genre" placeholder="Search for a genre" />
	            
					</div>
					
					<script src="../JavaScript/InputChange.js">

	     			</script>
				
				<input class= "searchButton" type="submit" value="Search" />
				</form>	   	
		   	


		
		   <?php include_once('controller/footer.php'); ?>
		</body>
	
	
	
	
	
</html>