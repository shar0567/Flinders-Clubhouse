<?php  
	include("header.php");

	$club_id = $_GET['clubid'];
	$_SESSION['club_id'] = $club_id;
	$user_id = $_SESSION['user'];

	$sql = "SELECT * FROM club WHERE club_id='$club_id'";
	$result = mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	$club_name = $row['club_name'];
	$club_description = $row['club_description'];
	$club_img = $row['club_img'];

	$sql2 = "SELECT * FROM `members` WHERE FAN='$user_id' AND club_id='$club_id'";
	$result2 = mysqli_query($con, $sql2);
	$existingMember = false;
	$rows2 = mysqli_num_rows($result2);
	if($rows2 > 0)
		$existingMember = true;

	$sql3 = "SELECT * FROM `clubadmin` WHERE FAN='$user_id' AND club_id='$club_id'";
	$result3 = mysqli_query($con, $sql3);
	$clubadmin = false;
	$rows3 = mysqli_num_rows($result3);
	if($rows3 > 0)
		$clubadmin = true;
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
							if ($clubadmin) 
								echo '<a href="clubmanage.php" class="btn btn-cv btn-block">Manage Club';
							elseif ($existingMember) 
								echo '<a href="clubreg.php" class="btn btn-cv btn-block">Leave';
							else
								echo '<a href="clubreg.php" class="btn btn-cv btn-block">Join';
							
						?></a>
					</div>
				</div>
			</div>
			<div class="row events-panel">
				<div class="col-md-12">
					<div class="text-center">
						<hr><h3>Upcoming Events</h3><hr>
						<div class="col-md-2"></div>	
						<div class="col-md-8">
							<?php 
								$sql4 = "SELECT * FROM events WHERE club_id = '$club_id'";
								$result4 = mysqli_query($con, $sql4);
								if (mysqli_num_rows($result4) > 0) {
									while ($row = mysqli_fetch_array($result4)) {
										$booking = 'Book Event';
										$event_id = $row['event_id'];
										$sql5 = "SELECT FAN FROM eventbooked WHERE event_id='$event_id' AND FAN='$user_id'";
										$result5 = mysqli_query($con, $sql5);
										if(mysqli_num_rows($result5) > 0){
											$booking = 'Cancel Booking';
										}
										echo '<div class="spbox">';
										echo '<img style="width: 650px" src="'.$row['event_img'].'">';
										echo '<h3>'.$row['event_name'].'</h3>';
										echo '<h4>'.$row['event_start'].'</h4>';
										echo '<h4>'.$row['event_description'].'</h4>';
										echo '<a href="eventreg.php?eventid='.$row['event_id'].'" class="btn btn-cv btn-block">'.$booking.'</a>';
										echo '</div>';
									}
								}
								else{
									echo '<h2 class="text-center">Sorry no events found</h2>';
								}
							?>
							<!-- <div class="spbox">
								<img style="width: 650px" src="images/events/1/event1.jpg">
								<h3>Event Title</h3>
								<h4>Event Date</h4>
								<h4>Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
								<a href="#" class="btn btn-cv btn-block">Book Event</a>
							</div> -->
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
			<div class="row message-board">
				<div class="col-md-12">
					<div class=" text-center">
						<hr><h3>message board</h3><hr>	
						<div class="row">
							<div class="container">
								<div class="col-md-12">
									Coming soon
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row about-us">
				<div class="col-md-12">
					<div class=" text-center">
						<hr><h3>About us</h3><hr>	
						<div class="row">
							<div class="container">
								<div class="club-description col-md-12">
									<?php 
										echo $club_description;
									?>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
<?php 
	include("footer.php");
 ?>