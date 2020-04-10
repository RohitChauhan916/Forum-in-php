<?php
   include('session.php');
?> 
<a href="logout.php"><button>logout</button></a>

<?php
   $select = mysqli_query($db,"SELECT * FROM categories");
   while($row = mysqli_fetch_assoc($select)) {
      echo "<h1>".$row['category_title']."</h1>";
   }
?>