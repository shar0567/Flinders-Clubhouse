<?php 
require("connection.php");
session_start();
$user_id = $_SESSION['user'];
$club_id = $_SESSION['club_id'];
$event_id = $_GET['eventid'];
$sql = "SELECT FAN FROM eventbooked WHERE event_id='$event_id' AND FAN='$user_id'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
	$sql2 = "DELETE FROM eventbooked WHERE FAN = '$user_id' AND event_id='$event_id'";
	mysqli_query($con, $sql2);
}
else{
	$sql2 = "INSERT INTO eventbooked VALUES ('$event_id', '$user_id')";
	mysqli_query($con, $sql2);
}
$address = 'club.php?clubid='.$club_id;
header('Location: '.$address);
?>