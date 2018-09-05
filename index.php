<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Manvir Quiz</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/Carousel-Hero.css">
		<link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/untitled-1.css">
		<link rel="stylesheet" href="assets/css/untitled.css">
	</head>

	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand navbar-link" href="#">M&A </a>
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
						<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navcol-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="" role="presentation">
							<a href="#"data-toggle="modal" data-target="#myModal">Login </a>
						</li>
						<li role="presentation">
							<a href="#aboutus">About Us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="carousel slide" data-ride="carousel" id="carousel-1">
			<div class="carousel-inner" role="listbox">
				<div class="item">
					<div class="jumbotron hero-nature carousel-hero">
						<h1 class="hero-title">Start Quiz</h1>
						<p class="hero-subtitle">
							Pllease click the below Login button to Start Quizz Game.
						</p>
						<p>
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
								Login
							</button>

						</p>
					</div>
				</div>
				<div class="item">
					<div class="jumbotron hero-photography carousel-hero">
						<h1 class="hero-title">Start Quiz </h1>
						<p class="hero-subtitle">
							Pllease click the below Login button to Start Quizz Game.
						</p>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
							Login
						</button>

					</div>
				</div>
				<div class="item active">
					<div class="jumbotron hero-technology carousel-hero">
						<h1 class="hero-title">Start Quiz </h1>
						<p class="hero-subtitle">
							Pllease click the below Login button to Start Quizz Game.
						</p>
						<p>
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
								Login
							</button>

						</p>
					</div>
				</div>
			</div>
			<div>
				<a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
				<a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
			</div>
			<ol class="carousel-indicators">
				<li data-target="#carousel-1" data-slide-to="0"></li>
				<li data-target="#carousel-1" data-slide-to="1"></li>
				<li data-target="#carousel-1" data-slide-to="2" class="active"></li>
			</ol>
		</div>

		<div class="m">
			<!-- Modal sign in -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title" style="text-align:center;">Login</h4>
						</div>
						<div class="modal-body">
							<form role="form" action="login.php" method="post">
								<div class="form-group">
									<label class="control-label">Username </label>
									<input class="form-control" type="text" name="username" placeholder="username" id="username" required>
								</div>

								<div class="form-group">
									<label class="control-label">Password </label>
									<input class="form-control" type="password" name="password" placeholder="password" id="password"required>
								</div>

								<button class="btn  btn-block" style="background: #28a4c9;color: white"type="submit">
									LOGIN
								</button>
								<a class="btn btn-link center-block" role="button" id="hide" data-toggle="modal" data-target="#myModal1">Register Now</a>
							</form>
						</div>
					</div>

				</div>

			</div>
		</div>
		</div>
		<!-- Modal1 sign up -->
		<div class="modal fade" id="myModal1" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							&times;
						</button>
						<h4 class="modal-title" style="text-align:center;">sign out</h4>
					</div>
					<div class="modal-body">
						<form role="form" action="registration.php" method="post">
							<div class="form-group">
								<label class="control-label">Username </label>
								<input class="form-control" type="text" name="form-username" placeholder="username" id="form-username"required>
							</div>
							<div class="form-group">
								<label class="control-label">Email </label>
								<input class="form-control" type="text" name="form-email" placeholder="email" id="form-email"required>
							</div>

							<div class="form-group">
								<label class="control-label">Password </label>
								<input class="form-control" type="password" name="form-password" placeholder="password" id="form-password"required>
							</div>

							
							<div class="form-group">
								<label class="control-label">Phone </label>
								<input class="form-control" type="int" name="form-phone" placeholder="phone" id="form-phone"required>
							</div>
							<div class="form-group">
								<label class="control-label">Address </label>
								<input class="form-control" type="text" name="form-address" placeholder="address" id="form-address"required>
							</div>

							<button class="btn  btn-block" type="submit" style="background: #28a4c9; color: white">
								Sign up
							</button>
							<a class="btn btn-link center-block" id="hide1"role="button" data-toggle="modal" data-target="#myModal1">Already have Account</a>
						</form>
					</div>
				</div>

			</div>

		</div>
		</div>

		<div id="aboutus" class="projects-horizontal">
			<div class="container">
				<div class="intro">
					<h2 class="text-center">About Us</h2>
					<p class="text-center">
						We are two member in team.we belive to make a simple and good looking UI Quiz.
					</p>
				</div>
				<div class="row projects">
					<div class="col-sm-6 item">
						<div class="row">
						
							<div class="col-md-12">
								<h3 class="name">Manvir Singh</h3>
								<p class="description">
									B.Tech in Computer and Science Engineering.
									Email:-manvirsingh98@yahoo.com
									Mobile:-647-624-2711
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 item">
						<div class="row">
							
							<div class="col-md-12">
								<h3 class="name">Akash Patel</h3>
								<p class="description">
									B.Tech in Electronics Engineering.
									Email:-Akashpatel@yahoo.com
									Mobile:-647-701-2429
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer"style="text-align: center; background-color: #222;color: white;">Manvir Singh <tr>|</tr> Akash Patel</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#hide").click(function() {

					$(".m").fadeOut(300);
				});

				$("#hide1").click(function() {

					$(".m").fadeIn(200);
				});

			});
		</script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>

</html>