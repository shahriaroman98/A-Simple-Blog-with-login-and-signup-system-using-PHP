<?php 

include 'config/db.php';

session_start();

//create query
$query = "SELECT * FROM posts ORDER BY id DESC";

//get result
$result = mysqli_query($conn, $query);

//fetch(display) data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>



<?php include 'layouts/header.php'; ?>


	<div class="container">
		<?php foreach ($posts as $data): ?>
		<div class="row justify-content-center my-5">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title"><?php echo $data['title']; ?></h4>
					</div>
					<div class="card-body">
						<p><?php echo $data['body']; ?></p>
						<p>
							<a href="details.php?id=<?php echo $data['id']; ?>" class="btn btn-secondary btn-sm">View</a>
							<?php if (isset($_SESSION['username']) == true): ?>||
							<a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm">Edit</a> ||
							<a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
							<?php endif ?>
						</p>
					</div>
					<div class="card-footer">
						<p>Created On <span class="text-primary"><?php echo $data['created_at']; ?></span> By <span class="text-primary"><?php echo $data['author']; ?></span></p>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	</div>

<?php include 'layouts/footer.php'; ?>



