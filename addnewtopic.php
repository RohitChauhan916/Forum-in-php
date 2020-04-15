<?php
    include ('session.php');

    $topic = $_POST['topic'];
    $content = $_POST['content'];
    $cid = $_GET['cid'];
    $scid = $_GET['scid'];

    $insert = mysqli_query($db, "INSERT INTO topics (`category_id`, `subcategory_id`, `author`, `title`, `content`, `date_posted`) 
    VALUES ('".$cid."', '".$scid."', '".$_SESSION['login_user']."', '".$topic."', '".$content."', NOW());");

    if($insert){
        header("Location: /forum-in-php/topics.php?cid=".$cid."&scid=".$scid."");
    }
?>