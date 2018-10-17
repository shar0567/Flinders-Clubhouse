<?php  
	include("header.php");
	
	if (isset($_REQUEST['submit']) && $_REQUEST['submit']=="verify") {
		header("Location: index.php");
	}

?>
<div class="body">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center">
					<div style="margin-top: 50px; margin-bottom: 50px" class="spbox">
						<h3>Please enter the code sent to your email</h3>
						<form action="verification.php" method="post">
							<input type="text" name="fan" placeholder="Verification code"> <br>
							<input type="submit" value="verify" name="submit" class="btn btn-cv">
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