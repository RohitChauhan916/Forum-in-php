<?php
$f_usr= $_POST["username"];
$f_pswd= $_POST["password"];
$con=mysqli_connect("localhost","root","","forum");
if(!$con)
{
        die('Connection Failed'.mysqli_error());
}
if(!mysqli_select_db($con,'forum')){
    echo "Database not selected";
}

$result=mysqli_query($con,"select * from fm_login");
while($row=mysqli_fetch_array($result))
{
    if($row["username"]==$f_usr && $row["password"]==$f_pswd)
    header("location: welcome.php");
    else
    $error = "Your Login Name or Password is invalid";
}
?>