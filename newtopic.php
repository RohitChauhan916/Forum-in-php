<?php
   include('session.php');
   include('content_function.php');
?> 
<a href="logout.php"><button>logout</button></a>
<?php if(isset($login_session)){
   echo "<div><p><a href='/Forum-in-php/newtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'>
   add new topics</a></p></div>";
}
?>

<?php 
    if (isset($_SESSION['login_user'])){
       echo "<form action='/Forum-in-php/addnewtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."' method='POST'>
       <p>Title :</p>
       <input type='text' id='topic' name='topic' size='100' >
       <p>Content : </p>
       <textarea id='content' name='content'></textarea><br>
       <input type='submit' value='add new post'></form>";
    } else {
       echo "<p>Please login First <a href='/Forum-in-php/login.php'>Click Here</a></p>";
    }

?>