<?php
	session_start();
?>
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
                        <h2>Call of Duty <br>Modern Warfare</h2>
                        <p>The stakes have never been higher as players take on the role of lethal Tier One operators in a heart-racing saga that will affect the global balance of power. Call of Duty®: Modern Warfare® engulfs fans in an incredibly raw, gritty, provocative narrative that brings unrivaled intensity and shines a light on the changing nature of modern war.</p>
                        <button type="button" class="btn btn-light btn-block">Buy Now</button>
                        <button type="button" class="btn btn-light btn-block">More Info</button>
                    </div>
                </div>

                <div class="row my-5 game-banner" id="red-dead-redemption-2">
                    <div class="col-md-4 py-5 game-text-overlay">
                        <h2>Red Dead <br>Redemption 2</h2>
                        <p>Red Dead Redemption 2, the critically acclaimed open world epic from Rockstar Games and the highest rated game of the console generation, now enhanced for PC with new Story Mode content, visual upgrades and more.</p>
                        <button type="button" class="btn btn-light btn-block">Buy Now</button>
                        <button type="button" class="btn btn-light btn-block">More Info</button>
                    </div>
				</div>

				<div class="row my-5 game-banner" id="death-stranding">
					<div class="col-md-4 py-5 game-text-overlay">
						<h2>Death Stranding</h2>
						<p>Besieged by death's tide at every turn Sam Bridges must brave a world utterly transformed by the Death Stranding. Carrying the stranded remnants of the future in his hands, Sam embarks on a journey to reunite the shattered world one step at a time. What is the mystery of the Death Stranding?</p>
                        <button type="button" class="btn btn-light btn-block">Buy Now</button>
                        <button type="button" class="btn btn-light btn-block">More Info</button>
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