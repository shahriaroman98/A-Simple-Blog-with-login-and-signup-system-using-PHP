<?php 

include 'config/db.php';


if (isset($_POST['submit'])) {

	$username = stripslashes($_POST['username']);
	$username = mysqli_real_escape_string($conn, $username);

	$email = stripslashes($_POST['email']);
	$email = mysqli_real_escape_string($conn, $email);

	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($conn, $password);


	$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '".md5($password)."')";

	if (mysqli_query($conn, $query)) {
				header('Location: login.php');
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
						<h4 class="card-title">Register Here</h4>
					</div>
					<div class="card-body">
						<form action="" method="POST">

							<div class="mb-3">
								<input type="text" name="username" class="form-control" placeholder="Input Username" required>
							</div>

							<div class="mb-3">
								<input type="text" name="email" class="form-control" placeholder="Input Email" required>
							</div>

							<div class="mb-3">
								<input type="password" name="password" class="form-control" placeholder="Input Password" required>
							</div>

							<div class="mb-3 d-grid">
								<input type="submit" name="submit" class="btn btn-success" value="Register">
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>





<?php include 'layouts/footer.php'; ?>