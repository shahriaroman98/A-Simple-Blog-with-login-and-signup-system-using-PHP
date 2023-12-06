<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Blog</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="register.php" class="nav-link">Signup</a></li>
        <?php if (isset($_SESSION['username']) == true): ?>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
      <?php endif ?>
      </ul>
    </div>
  </div>
</nav>