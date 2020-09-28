<?php 
	require('PHPMailer/PHPMailerAutoload.php'); 
	require('crediantial.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" href="css/aos.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
	  AOS.init();
	</script>

</head>
<body>
<?php 
$conn = mysqli_connect("localhost","root","","login_register");

if(isset($_POST['login'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$select = "SELECT * FROM register WHERE email = '$email' AND password = '$password' AND status = 'Active'";
	$result = mysqli_query($conn,$select);
	$count = mysqli_num_rows($result);
	$data = mysqli_fetch_array($result);

	if ($count == 1) {

		header("location:welcome.php");
	}else{
		$msg = "This username & password invalid";
	}

}

?>

	<br><br><br><br>
	<div class="container">
		<?php if (isset($msg)) { echo $msg; } ?>
		<form action="" method="post">
			<center><h1>User Login</h1></center>
				<hr>
			<div class="col-md-12" style="width: 40%">
				<div class="form-group">
					<label>Enter Email</label>
					<input class="form-control" type="text" name="email" placeholder="Enter Email">
				</div>
				
				<div class="form-group">
					<label>Enter Password</label>
					<input class="form-control" type="password" name="password" placeholder="Enter Password">
				</div>

				<div class="form-group">
					<input class="btn btn-success pull-left" type="submit" name="login" value="Log In">
					<a href="index.php" class="btn btn-warning pull-right">forget password</a>
				</div>
			</div>
			
		</form>
	</div>

	<div class="container">

		
	</div>
				

						
					
	
	

</body>
</html>
<script src="js/aos.js"></script>
<script>
  AOS.init({
    easing: 'ease-in-out-sine'
  });
</script>