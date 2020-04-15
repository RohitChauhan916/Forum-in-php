<?php
   include ('session.php');
   include ('content_function.php');
?> 
<a href="logout.php"><button>logout</button></a>
<?php if(isset($login_session)){
   echo "<div><p><a href='/Forum-in-php/newtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'>
   add new topics</a></p></div>";
}
?>

<?php disptopics($_GET['cid'], $_GET['scid']); ?>