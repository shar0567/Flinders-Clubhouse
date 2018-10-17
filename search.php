<?php  
	include("header.php");
?>
	<div class="body">
		<div class="container">
			<div class="row">
				<hr>
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<form action="search.php" method="post">
						<div class="input-group">
						      <input type="text" class="form-control" name="searchtext" placeholder="Search for clubs here...">
						      <span class="input-group-btn">
						        <input type="submit" class="btn btn-default" name="submit" value="Search">
						      </span>
						</div><!-- /input-group -->
					</form>
				</div><!-- /.col-lg-3 -->
				<div class="col-lg-3"></div>
			</div><!-- /.row -->
			<hr>
			<div class="row text-center">
				<h3>Search results</h3>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<?php 
						$keyword = $_POST["searchtext"];
						$sql = "SELECT * FROM club WHERE club_name LIKE '%$keyword%'";
						$result = mysqli_query($con, $sql);
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_array($result)) {
								echo '<div class="spbox">';
									echo '<div class="container">';
										echo '<div class="row">';
											echo '<div class="col-md-3">';
												echo '<img style="width: 120px" class="club-logo" src="'.$row['club_img'].'">';
											echo '</div>';
											echo '<div class="col-md-6">';
												echo '<a href="club.php?clubid='.$row['club_id'].'"><h4>'.$row['club_name'].'</h4></a>';
												echo '<hr>';
												echo $row['club_description'];
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							}
						}
						else
							echo '<h2 class="text-center">Sorry no results found</h2>';
					?>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
	<hr>
<?php 
	include("footer.php");
 ?>