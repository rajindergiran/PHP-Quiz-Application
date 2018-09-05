<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$rightAnswer = 0;
$wrongAnswer = 0;
$marks = 0;

require_once ('includes/functions_list.php');
require_once ('quiz.php');

foreach ($_POST['response'] as $key => $value) {
	if ($correctAnswerArray[$key] == $value) {
		$rightAnswer++;
		$marks = $marks + 10;

	} else {
		$wrongAnswer++;
	}
}
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
		h4 {
			margin-left: 80px;
		}
    </style>
   
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">M&A </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                	<li class="active" role="presentation">
							<h5 style="color: green;margin-top: 17px;margin-right: 8px;">Wecome:<?php
							echo $_SESSION['username'];
						?>
							</h5>
						</li>
						 <li role="presentation">
							<form  action="session_out.php" >
								<button onclick="" type="submit" style="margin-top: 12px;">
									Log Out
								</button>

							</form>
						</li>               </ul>
            </div>
        </div>
    </nav>
     <div class="container hero">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="text-center">Result Of Quiz</h1>
                        
 <section class="right-content" style="border: 1px solid black";>
								
								<!-- //Display result-->
   
           <h4><span>Right Answers:-  <?php echo $rightAnswer; ?></span></h4>
           
           <h4><span >Wrong Answers:- <?php echo $wrongAnswer; ?></span></h4>
                      <h4><span>Marks:-  <?php echo $marks; ?></span></h4>

         
			<a href= 'questions.php'class="button"style=" display:block;width:100px;margin:0 auto;" >Try Again</a>

   
							</section>

						</div>
					</div>
				</div>
			</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
