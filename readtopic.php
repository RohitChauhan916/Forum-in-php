<?php
   include ('session.php');
   include ('content_function.php');
	addview ("$_GET[cid]", "$_GET[scid]", "$_GET[tid]");
   ?> 
   <html>
   <head>
   </head>
   <body>
<a href="logout.php"><button>logout</button></a>
<?php disptopic("$_GET[cid]", "$_GET[scid]", "$_GET[tid]"); ?>
</body>
</html>