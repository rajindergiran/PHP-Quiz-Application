<?php
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'quizdb');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (mysqli_connect_error()) {
	echo "Could not connect to MySql. Please try again";
	exit();
}

if (isset($_GET['p'])) {

	$username = $_GET['p'];
}

if (!isset($_POST['submit'])) {

	$sSQL = "SELECT ID, usernamesignup , emailsignup,phonesignup,addresssignup FROM LoginRegistration WHERE usernamesignup = '$username' ";
	$query = mysqli_query($conn, $sSQL);
	$row = mysqli_fetch_array($query);

} else {
	$id = $_POST['userid'];
	$uname = $_POST['form-username'];
	$uemail = $_POST["form-email"];
	$upassword = $_POST['form-password'];
	$uphone = $_POST["form-phone"];
	$uaddress = $_POST["form-address"];

	$sSQL = "UPDATE LoginRegistration SET  usernamesignup = '$uname',passwordsignup ='$upassword'  , emailsignup = '$uemail',phonesignup = '$uphone' , addresssignup = '$uaddress'  WHERE ID = '$id' ";
	echo $sSQL;
	$isupdated = mysqli_query($conn, $sSQL);
	if ($isupdated) {
		header("Location:questions.php");
		session_start();
		$_SESSION['username'] = $uname;
	} else {
		header("Location : error.php");
		echo "error";

	}

}
?>
<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
				&times;
			</button>
			<h4 class="modal-title" style="text-align:center;">Update</h4>
		</div>
		<div class="modal-body">
			<form role="form" action="update_profile.php" method="post">
				<div class="form-group">
					<label class="control-label">Username </label>

					<input class="form-control" type="text" name="form-username" placeholder=<?php echo $row['usernamesignup']?>
					id="form-username"required>
				</div>
				<div class="form-group">
					<label class="control-label">Email </label>
					<input class="form-control" type="text" name="form-email" placeholder=<?php echo $row['emailsignup']?> id="form-email"required>
				</div>

				<div class="form-group">
					<label class="control-label">Password </label>
					<input class="form-control" type="password" name="form-password" placeholder="password" id="form-password"required>
				</div>

				
				<div class="form-group">
					<label class="control-label">Phone </label>
					<input class="form-control" type="int" name="form-phone" placeholder=<?php echo $row['phonesignup']?> id="form-phone"required>
				</div>
				<div class="form-group">
					<label class="control-label">Address </label>
					<input class="form-control" type="text" name="form-address" placeholder=<?php echo $row['addresssignup']?> id="form-address"required>
					<input type="hidden"  name="userid" value=<?php echo $row['ID']?> />
				</div>

				<button class="btn  btn-block" name='submit' type="submit" style="background: #28a4c9; color: white">
					update
				</button>
			</form>
		</div>
	</div>

</div>

