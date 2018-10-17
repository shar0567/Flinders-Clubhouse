<?php  
	include("header.php");

	$club_id = $_SESSION['club_id'];
	$user_id = $_SESSION['user'];

	// if(isset($_REQUEST['admin']) && $_REQUEST['admin']=="Make Admin"){
	// 	$user_id = $_POST['id'];
	// 	$sql4 = "INSERT INTO clubadmin ('FAN', 'club_id') ($user_id, $club_id)";
	// 	echo "INSERT INTO clubadmin (FAN, club_id) ('$user_id', '$club_id')";
	// 	mysqli_query($con, $sql4);
	// }

	$sql = "SELECT * FROM club WHERE club_id='$club_id'";
	$result = mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	$club_name = $row['club_name'];
	$club_description = $row['club_description'];
	$club_img = $row['club_img'];

	if(isset($_GET['del'])){
		$id = $_GET['del'];
		$sql3 = "DELETE FROM members WHERE FAN = '$id' AND club_id= '$club_id'";
		mysqli_query($con, $sql3);
	}
	if(isset($_GET['adm'])){
		$id = $_GET['adm'];
		$sql4 = "INSERT INTO clubadmin (FAN, club_id) VALUES ('$id', '$club_id')";
		mysqli_query($con, $sql4);
	}
	if(isset($_GET['rem'])){
		$id = $_GET['rem'];
		$sql7 = "DELETE FROM eventbooked WHERE FAN='$id'";
		mysqli_query($con, $sql7);
	}
?>

<div class="body">
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr>
					<div class="col-md-3 ">
						<img class="club-logo" src="<?php echo $club_img;?>">
					</div>
					<div class="col-md-6 club-title">
						<h1><?php echo $club_name; ?></h1>
					</div>
					<div class="col-md-3 club-button">
						<?php 
							echo '<a href="club.php?clubid='.$club_id.'" class="btn btn-cv btn-block">Go back to club';							
						?></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<hr><h3>Members List</h3><hr>
						<div class="col-md-2"></div>	
						<div class="col-md-8">
							<div class="spbox">
								<table style="margin-left: 130px;" border="1">
									<tr>
										<th><h4>First name</h4></th>
										<th><h4>Last name</h4></th>
										<th><h4>Remove Member</h4></th>
										<th><h4>Make Admin</h4></th>
									</tr>
									<?php
										$sql2 = "SELECT * FROM students WHERE FAN IN (SELECT FAN FROM members WHERE club_id='$club_id')";
										$result2 = mysqli_query($con, $sql2);
										if (mysqli_num_rows($result2) > 0) {
											while($row=mysqli_fetch_array($result2)){
												echo '<tr>';
												echo '<td><h3>'.$row['fname'].'</h3></td>';
												echo '<td><h3>'.$row['lname'].'</h3></td>';
												echo '<td><h3><a href="clubmanage.php?del='.$row['FAN'].'">Delete</a></h3></td>';
												echo '<td><h3><a href="clubmanage.php?adm='.$row['FAN'].'">Make Admin</a></h3></td>';
												echo '</tr>';
											}
										}else
											echo '<h3 class="text-center">Sorry no members found</h3>';
										
									?>
								</table>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div> <hr>
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<hr><h3>Event List</h3><hr>
						<div class="col-md-2"></div>	
						<div class="col-md-8">
							<?php  
								$sql5 = "SELECT * FROM events WHERE club_id='$club_id'";
								$result5 = mysqli_query($con, $sql5);
								if (mysqli_num_rows($result5) > 0) {
									while ($row=mysqli_fetch_array($result5)) {
										$event_id = $row['event_id'];
										echo '<h3 class="text-center">'.$row['event_name'].'</h3>';
										echo '<div class="spbox">';
										echo '<table style="margin-left: 200px;" border="1">';
										echo '<tr>';
										echo '<th><h4>First name</h4></th>';
										echo '<th><h4>Last name</h4></th>';
										echo '<th><h4>Remove From Event</h4></th>';
										echo '</tr>';
										$sql6 = "SELECT * FROM students WHERE FAN IN (SELECT FAN FROM eventbooked WHERE event_id='$event_id')";
										$result6 = mysqli_query($con, $sql6);
										if (mysqli_num_rows($result6) > 0) {
											while($row2=mysqli_fetch_array($result6)){
												echo '<tr>';
												echo '<td><h3>'.$row2['fname'].'</h3></td>';
												echo '<td><h3>'.$row2['lname'].'</h3></td>';
												echo '<td><h3><a href="clubmanage.php?rem='.$row2['FAN'].'">Delete</a></h3></td>';
												echo '</tr>';
											}
										}else
										echo '<h3 class="text-center">Sorry no members found</h3>';
										echo '</table>';
										echo '</div>';
							}} 
								else
									echo '<h3 class="text-center">Sorry no events found</h3>';
							?>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div> <hr>
</div>

<?php 
	include("footer.php");
?>