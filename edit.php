<?php 

include 'config/db.php';

include 'auth.php';


	if (isset($_POST['update'])) {
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$var_title = mysqli_real_escape_string($conn, $_POST['title']);
		$var_body = mysqli_real_escape_string($conn, $_POST['body']);
		$var_author = mysqli_real_escape_string($conn, $_POST['author']);

		$query = "UPDATE posts SET
				  title = '$var_title',
				  body = '$var_body',
				  author = '$var_author'
				  WHERE id = {$update_id}";

			if (mysqli_query($conn, $query)) {
				header('Location: index.php');
			}else{
				echo "Something went wrong...";
			}
	}



    $id = mysqli_real_escape_string($conn, $_GET['id']);

	$query = "SELECT * FROM posts WHERE id = ".$id;

	$result = mysqli_query($conn, $query);

	$post = mysqli_fetch_assoc($result);

?>




<?php include 'layouts/header.php'; ?>

<div class="container">
		<div class="row justify-content-center my-5">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Edit Post</h4>
					</div>
					<div class="card-body">
						<form action="" method="POST">
							<div class="mb-3">
								<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>" placeholder="Input Post title" required>
							</div>

							<div class="mb-3">
								<textarea name="body" class="form-control" required>value="<?php echo $post['body']; ?>"</textarea>
							</div>

							<div class="mb-3">
								<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>" placeholder="Input Post Author" required>
							</div>

							<div class="mb-3 d-grid">
								<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
								<input type="submit" name="update" class="btn btn-success" value="Update">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'layouts/footer.php'; ?>