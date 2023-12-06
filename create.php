<?php 

include 'config/db.php';

if (isset($_POST['submit'])) {
	$var_title = mysqli_real_escape_string($conn, $_POST['title']);
	$var_body = mysqli_real_escape_string($conn, $_POST['body']);
	$var_author = mysqli_real_escape_string($conn, $_POST['author']);


	$query = "INSERT INTO posts (title, body, author) VALUES ('$var_title', '$var_body', '$var_author')";

	if (mysqli_query($conn, $query)) {
		header('Location: index.php');
	}
	else{
		echo "Something Wrong";
	}
}


?>




<?php include 'layouts/header.php'; ?>



	<div class="container">
		<div class="row justify-content-center my-5">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Create New Post</h4>
					</div>
					<div class="card-body">
						<form action="" method="POST">
							<div class="mb-3">
								<input type="text" name="title" class="form-control" placeholder="Input Post title" required>
							</div>

							<div class="mb-3">
								<textarea name="body" class="form-control" placeholder="Input Post Details" required></textarea>
							</div>

							<div class="mb-3">
								<input type="text" name="author" class="form-control" placeholder="Input Post Author" required>
							</div>

							<div class="mb-3 d-grid">
								<input type="submit" name="submit" class="btn btn-success" value="Create">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




<?php include 'layouts/footer.php'; ?>