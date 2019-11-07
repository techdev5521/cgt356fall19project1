<?php 
	// Start Session
	session_start();
?>

<!DOCTYPE html>
<html lang="em-US">
<link rel="icon"
      type="image/png"
      href="images/logo.png">

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

					<!-- Display success message if signup successful. -->
					<?php if (!empty($_GET['signupSuccessful'])) {
						if ($_GET['signupSuccessful']) {
							echo("<div class=\"alert alert-success text-center\" role=\"alert\">Your account was created successfully. Please login.</div>");
						}
					} ?>

					<!-- Display success message if logout successful. -->
					<?php if (!empty($_GET['logoutSuccessful'])) {
						if ($_GET['logoutSuccessful']) {
							echo("<div class=\"alert alert-success text-center\" role=\"alert\">You logged out successfully.</div>");
						}
					} ?>
					
					<?php printSessionErrorMessage(); ?>

					<div class="card my-5 box-shadow px-3 py-4 bg-light">
						<form action="doLogin.php" method="POST" class="form-signin mx-5 my-4">
							<h2 class="text-center">Please Login</h2>
							
							<div class="form-group my-4">
								<!-- Autopopulate username if coming from successful signup -->
								<?php if (!empty($_GET['signupSuccessful'] && !empty($_GET['username']))) {
									if ($_GET['signupSuccessful']) {
										$username = $_GET['username'];
									}
								} ?>
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php if(!empty($username)) {echo($username);} ?>" required>
							</div>

							<div class="form-group my-4">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
							</div>

							<button class="btn btn-lg btn-secondary btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
						</form>
					</div>
					<p class="text-center">Don't have an account? <a href="signup.php">Sign Up</a></p>
				</div>
			</div>
		</div>
	</main>


    <!-- adds footer to the bottom of the page -->
    <footer>
		<?php include("includes/footer.html"); ?>
	</footer>



	<!-- Bootstrap JavaScript -->
	<?php include('includes/bootstrap_javascript.html') ?>

	<!-- JS Libraries -->
	<?php include('includes/jsLibs.html'); ?>

	</body>
</html>