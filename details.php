<?php 

include 'config/db.php';

?>


<?php 

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
						<h4 class="card-title"><?php echo $post['title']; ?></h4>
					</div>
					<div class="card-body"><p><?php echo $post['body']; ?></p></div>
					<div class="card-footer">
						<p>Created On <span class="text-primary"><?php echo $post['created_at']; ?></span> By <span class="text-primary"><?php echo $post['author']; ?></span></p>
						<p><a href="index.php" class="btn btn-warning">Back</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'layouts/footer.php'; ?>