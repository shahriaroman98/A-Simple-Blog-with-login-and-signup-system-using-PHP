<?php 

include 'config/db.php';

session_start();

if (isset($_POST['username'])) {

	$username = stripslashes($_POST['username']);
	$password = stripslashes($_POST['password']);

	$query = "SELECT * FROM users WHERE username= '$username' and password= '".md5($password)."'";

	$result = mysqli_query($conn, $query);
	$rows = mysqli_num_rows($result);

	if ($rows === 1) {
		$_SESSION['username'] = $username;
		header('Location: dashboard.php');
	}else{
		echo "Something went wrong...";
	}
}



?>





<?php include 'layouts/header.php'; ?>



	<div class="container">
		<div class="row justify-content-center my-5">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header text-center">
						<h4 class="card-title">Log In</h4>
					</div>
					<div class="card-body">
						<form action="" method="POST">

							<div class="mb-3">
								<input type="text" name="username" class="form-control" placeholder="Input Username" required>
							</div>

							<div class="mb-3">
								<input type="password" name="password" class="form-control" placeholder="Input Password" required>
							</div>

							<div class="mb-3 d-grid">
								<input type="submit" name="submit" class="btn btn-success" value="Login">
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




<?php include 'layouts/footer.php'; ?>