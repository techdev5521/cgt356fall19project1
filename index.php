<!DOCTYPE html>
<html lang="em-US">
	
	<head>
		<title>Project 1: Home</title>

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
			<?php include('includes/navigation.php'); ?>
		</header>



		<main>
			<section id="header" class="jumbotron text-center">
				<div class="container">
					<h1 class="jumbotron-heading">Welcome to GameGo</h1>
					<p class="lead text-muted">Playing With Power</p>
				</div>
			</section>

			<div class="container">
				
				<div class="row my-5 game-banner" id="modern-warfare">
					<div class="col-md-4 py-5 game-text-overlay">
						<h2>Call of Duty Modern Warfare</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, dolor impedit tempore. Molestias rerum voluptatum cumque accusantium ullam consequatur quibusdam!</p>
					</div>
				</div>

				<div class="row my-5 game-banner" id="red-dead-redemption-2">
					<div class="col-md-4 py-5 game-text-overlay">
						<h2>Red Dead Redemption 2</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, dolor impedit tempore. Molestias rerum voluptatum cumque accusantium ullam consequatur quibusdam!</p>
					</div>
				</div>

				<div class="row my-5 game-banner" id="death-stranding">
					<div class="col-md-4 py-5 game-text-overlay">
						<h2>Death Stranding</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, dolor impedit tempore. Molestias rerum voluptatum cumque accusantium ullam consequatur quibusdam!</p>
					</div>
				</div>

			</div>
		</main>



		<footer>
			<?php include("includes/footer.html"); ?>
		</footer>



		<!-- Bootstrap JavaScript -->
		<?php include('includes/bootstrap_javascript.html') ?>

	</body>


</html>