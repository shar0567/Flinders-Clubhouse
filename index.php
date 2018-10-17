<?php  
	include("header.php");
?>
<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Find new exciting clubs</h1>
					<div class="row">
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
				</div>
			</div>
		</div>
	</div>
	<div class="skillsets">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h1>Find Clubs by types</h1>
					<p>Flinders offers students from all backgrounds to find and participate in clubs with like minded people.</p>
					<div class="skills">
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="">Cultural</a></li>
								<li><a href="">Economics</a></li>
								<li><a href="">Music</a></li>
								<li><a href="">Dance</a></li>
								<li><a href="">Art</a></li>
								<li><a href="">Theatre</a></li>
								<li><a href="">Sports</a></li>
							</ul>
						</div>
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="">Science</a></li>
								<li><a href="">Technology</a></li>
								<li><a href="">Astronomy</a></li>
								<li><a href="">IT</a></li>
								<li><a href="">Robotics</a></li>
								<li><a href="">Defence</a></li>
								<li><a href="">Health</a></li>
							</ul>
						</div>
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="">Social</a></li>
								<li><a href="">Business</a></li>
								<li><a href="">LGBTQ</a></li>
								<li><a href="">Religious</a></li>
								<li><a href="">Political</a></li>
								<li><a href="">Country specific</a></li>
								<li><a href="">Martial Art</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="spbox">
						<h1>Have some ideas? Send them over to us!</h1>
						<a href="#" class="btn btn-cv btn-block">Start your new club</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="topclubs">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="page-heading">
						<h2>Top Clubs</h2>
						<p>Here is a featured list of the most popular clubs at Flinders Uni!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="client">
						<a href="">
							<img src="images/clubs/1/logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="">
							<img src="images/clubs/2/logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="">
							<img src="images/clubs/3/logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="">
							<img src="images/clubs/4/logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="">
							<img src="images/clubs/5/logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="">
							<img src="images/clubs/6/logo.png">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="jobhunter">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 padding-left">
					<div class="left-col">
						<div class="col-text">
							<div class="page-heading heading4">
								<h2>
									Join hundreds of clubs waiting for you at <span>Flinders Clubhouse</span>
								</h2>
								<hr>
								<p>
									FUSA is here to help you to realize your maximum <br> potential and expand your free time to do the things <br> that you love!
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 padding-left">
					<div class="right-col">
						<img class="fusalogo" src="images/fusalogo.png">
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	include("footer.php");
 ?>