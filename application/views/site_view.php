<html>
<head>Home</head>
<!-- View -->

<p> This is my home page </p>

<?php
	foreach ($rows as $r) 
	{
	   //echo '<h1>'.$r->id;
		 echo '<h1>'.$r->title; 
	   //echo '<h2>'.$r->author;
		 echo '<h3>'.$r->contents;
	}
?>
</html>