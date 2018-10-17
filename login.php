<?php  
	include("header.php");
	
	if (isset($_REQUEST['submit']) && $_REQUEST['submit']=="Sign in") {
		$_SESSION['user'] = $_POST['fan'];
		header("Location: verification.php");
	}

?>
 <div class="body">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center">
					<div style="margin-top: 50px; margin-bottom: 50px" class="spbox">
						<h3>Login</h3>
						<form action="login.php" method="post">
							<input type="text" name="fan" placeholder="FAN"> <br>
							<input type="password" name="password" placeholder="Password"> <br>
							<input type="submit" value="Sign in" name="submit" class="btn btn-cv">
						</form>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
<?php 
	include("footer.php");
 ?>