<!DOCTYPE html>
<html lang="em-US">

<head>
	<title>Login</title>

	<!-- Metadata-->
	<?php include('includes/meta.html'); ?>

	<!-- CSS -->
	<?php include('includes/css.html'); ?>

	<!-- PHP Libraries -->
	<?php include('includes/phpLibs.html'); ?>

</head>

<body>

<header>
	<!-- Navigation -->
	<?php include('includes/logo_nav.html'); ?>
</header>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4 my-5">
			<div class="card my-5 box-shadow px-3 py-4">
				<form class="form-signin">
					<h2 class="text-center">Please Login</h2>
					
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
					</div>

					<button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>



<footer>
	<?php include("includes/footer.html"); ?>
</footer>



<!-- Bootstrap JavaScript -->
<?php include('includes/bootstrap_javascript.html') ?>

</body>
</html>