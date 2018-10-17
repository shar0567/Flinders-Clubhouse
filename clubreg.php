<?php 
require("connection.php");
session_start();
$user_id = $_SESSION['user'];
$club_id = $_SESSION['club_id'];
$sql = "SELECT FAN FROM members WHERE club_id='$club_id' AND FAN = '$user_id'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
	$sql2 = "DELETE FROM members WHERE FAN = '$user_id' AND club_id='$club_id'";
	mysqli_query($con, $sql2);
}
else{
	$sql2 = "INSERT INTO members VALUES ('$user_id', '$club_id')";
	mysqli_query($con, $sql2);
}
$address = 'club.php?clubid='.$club_id;
header('Location: '.$address);
?>