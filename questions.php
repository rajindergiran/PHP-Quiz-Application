<?php

session_start();

require_once ('includes/functions_list.php');
require_once ('quiz.php');
?>

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
		<style>
			.f.form-group {
				border: 2px solid black;
				border-radius: 10px;
				padding: 10px;
			}
			#b {

				display: block;
				margin: 0 auto;
				border-color: black;
				border: 1px solid;
				width: 250px;
				border-radius: 7px;
				margin-bottom: 13px;
			}
			#b:hover {
				background-color: black;
				color: #fff;
			}

		</style>
		<script>
function gender()
{
	var gender = document.subscribe.radio[<?php "'.$id.'"?>].checked;
		if(gender || gender1)
		{
		}
		else
		{
			errorMsg = errorMsg + "please select your gender\n"	
		}
}
</script>
	</head>

	<body>
		<!-- Preloader -->
		<!-- <div id="tt-preloader">
		<div id="pre-status">
		<div class="preload-placeholder"></div>
		</div>
		</div> -->
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
						<li class="active" role="presentation">
							<h5 style="color: green;margin-top: 17px;">Wecome:<?php
							echo $_SESSION['username'];
						?>
							</h5>
						</li>
						<li role="presentation">
							<?php print ("<a type='button'data-toggle='modal' data-target='#myModal1' href= 'update_profile.php?p={$_SESSION["username"]} '>Update Profile</a>")
							?>
						</li>
						<li role="presentation">
							<form  action="session_out.php" >
								<button onclick="" type="submit" style="margin-top: 12px;">
									Log Out
								</button>

							</form>
						</li>

					</ul>
				</div>
			</div>
		</nav>
		<div class="container hero">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1 class="text-center">Quizz Question</h1>
					<!--Display form-->
					<form action="score.php" method="post" class="f"onsubmit="gender();" >

						<?php
foreach($questions as $id => $question) {
echo "<div class=\"form-group\">";
echo "<h4> $question</h4>"."<ol>";//display the question

//Display multiple choices
$randomChoices = $choices[$id];
$randomChoices = shuffle_assoc($randomChoices);

foreach ($randomChoices as $key => $values){
echo '<li><input type="radio" name="response['.$id.'] id="'.$id.'" value="' .$values.'"/>';
						?>
						<label for="question-<?php echo($id); ?>"><?php echo($values); ?>
						</label></li>
						<?php

						}
						echo("</ul>");
						echo("</div>");
						}
						?>

						<input type="submit" name="submit" class="btn  " id="b" value="Submit Quiz" />
						</form>

						</div>
						</div>
						</div>

						<!-- Update -->
						<div class="modal fade" id="myModal1" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">

						</div>

						</div>
				</div>

				</script>
				<script src="assets/js/jquery.min.js"></script>
				<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>

</html>
<?php ?>