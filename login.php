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

	<main>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 my-5">
					<div class="card my-5 box-shadow px-3 py-4 bg-light">
						<form class="form-signin mx-5 my-4">
							<h2 class="text-center">Please Login</h2>
							
							<div class="form-group my-4">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
							</div>

							<div class="form-group my-4">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
							</div>

							<button class="btn btn-lg btn-secondary btn-block" type="submit">Login</button>
						</form>
					</div>
					<p class="text-center">Don't have an account? <a href="signup.php">Signup</a></p>
				</div>
			</div>
		</div>
	</main>



	<footer>
		<?php include("includes/footer.html"); ?>
	</footer>



	<!-- Bootstrap JavaScript -->
	<?php include('includes/bootstrap_javascript.html') ?>

	<!-- JS Libraries -->
	<?php include('includes/jsLibs.html'); ?>

	</body>
</html>