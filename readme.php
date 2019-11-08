<?php
session_start();
?>
<!DOCTYPE html>
<html lang="em-US">
<link rel="icon"
      type="image/png"
      href="images/logo.png">
	
	<head>
		<title>GameGo: Readme</title>

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
					<h1 class="jumbotron-heading">About The Site, Team, and Shared Dream</h1>
					<p class="lead text-muted">Deux Ex is one of the best video game series of all time. Change my mind.</p>
				</div>
			</section>

			<div class="container pb-5" id="readme">
				<div class="row justify-content-center">

                    <!-- Card for Trent -->
					<div class="card-deck">
						<div class="card box-shadow mb-3">
							<div class="card-header text-center">
								<h5>Trent Lambrecht</h5>
							</div>
							<img class="card-img-top" src="images/trent.png" alt="Trent Lambrecht">
							<div class="card-body">
								<h5 class="card-title">Waterboy</h5>
								<p class="card-text">"Failure is always an option"</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><strong>Major: </strong> VPI & Web Design</li>
							</ul>
						</div>

                        <!-- Card for Kai -->
						<div class="card box-shadow mb-3">
							<div class="card-header text-center">
								<h5>Kai Mangiaracina</h5>
							</div>
							<img class="card-img-top" src="images/kai.png" alt="Kai Mangiaracina">
							<div class="card-body">
								<h5 class="card-title">MangoTree</h5>
								<p class="card-text">"Behind every good programmer there is a frustrated programmer."</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><strong>Major: </strong> MET & VPI</li>
							</ul>
						</div>

                        <!-- Card for Justin -->
						<div class="card box-shadow mb-3">
							<div class="card-header text-center">
								<h5>Justin Campbell</h5>
							</div>
							<img class="card-img-top" src="images/justin.png" alt="Justin Campbell">
							<div class="card-body">
								<h5 class="card-title">Mom</h5>
								<p class="card-text">"A man does not look behind the door unless he has stood there himself."</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><strong>Major: </strong> Web Design & Security</li>
							</ul>
						</div>

                        <!-- Card for Brad -->
						<div class="card box-shadow mb-3">
							<div class="card-header text-center">
								<h5>Brad Williams</h5>
							</div>
							<img class="card-img-top" src="images/brad.png" alt="Brad Williams">
							<div class="card-body">
								<h5 class="card-title">Mr. Moostauche</h5>
								<p class="card-text">"Do or do not, there is no try."</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><strong>Major: </strong> VPI & Web Design</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-md-12 text-center">
						<h3>Notable Feature by Page</h3>
					</div>
				</div>

				<div class="row my-3">
					<div class="col-md-3">
						<ul class="list-group">
							<li class="list-group-item bg-info text-white">Home</li>
							<li class="list-group-item">Custom image overlays with real descriptions and links ti natch the assignment theme</li>
							<li class="list-group-item">Login aware nav bar. See how the buttons change depending on whether you're logged in or not.</li>
							<li class="list-group-item">Sticky footer, for easy access.</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="list-group">
							<li class="list-group-item bg-info text-white">Signup</li>
							<li class="list-group-item">Checks if username already exists and displays an error if so.</li>
							<li class="list-group-item">Confirms passwords match before submission.</li>
							<li class="list-group-item">Realistic presentation of credit card with real world prepopulated list options.</li>
							<li class="list-group-item">Upon successful signup, the user is redirected to the login page with a success message and username autofilled.</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="list-group">
							<li class="list-group-item bg-info text-white">Login</li>
							<li class="list-group-item">Incorrect username and password detection</li>
							<li class="list-group-item">On logout, a success message is displayed.</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="list-group">
							<li class="list-group-item bg-info text-white">Account Info</li>
							<li class="list-group-item">Auto populated modals with color and icon coordinated buttons.</li>
							<li class="list-group-item">New password requires successful confirmation of old and checks for new passwords to match.</li>
						</ul>
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-md-12 text-center">
						<h3>Notable Development and Code Items</h3>
					</div>
				</div>

				<div class="row justify-content-center my-3">

					<div class="card-deck">
						<div class="card box-shadow mb-3">
							<div class="card-header text-center">
								<h5>Reusable Code Structure and Data Sanitization</h5>
							</div>
							<div class="card-body">
								<p class="card-text">Using PHP's <code>include('');</code> function we were able to seperate files into seperate collections of code seperated by language and reduce overall card and increase the readability/flexibility of each individual page.</p>
								<hr>
								<p class="card-text">We also sanitize our data input on all logic pages by looping through the <code>$_POST</code> cariable and reqriting all values after passing through <code>mysqli::real_escape_string()</code>.</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">See <code>includes/*</code> and <code>*modal.php</code> files.</li>
							</ul>
						</div>

						<div class="card box-shadow mb-3">
							<div class="card-header text-center">
								<h5>Custom Session Management Functions</h5>
							</div>
							<div class="card-body">
								<p class="card-text">To reduce code replication and build in error checking for empty variables, we created several session management functions including:</p>
								<ul>
									<li><code>getSessionVariable()</code></li>
									<li><code>setSessionVariable()</code></li>
									<li><code>returnSessionVariable()</code></li>
									<li><code>printSessionErrorMessage()</code></li>
									<li><code>printSessionSuccessMessage()</code></li>
								</ul>
								<p>We also developed some functions to automate dynamic information loading to reduce database calls and page reloads. Most notably is the <code>printActionMenu()</code> function. When combined with the logic on the Account Info page, this allows us to load all account, login, billing an dshipping information with one database call and edit individual records via modals generated on page load.</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">See <code>includes/helper_functions.php</code></li>
							</ul>
						</div>

						<div class="card box-shadow mb-3">
							<div class="card-header text-center">
								<h5>Bootsrap Components</h5>
							</div>
							<div class="card-body">
								<p class="card-text">We've made heavy use of the Bootstrap framework including:</p>
								<ul>
									<li><strong>Alerts:</strong> for error and success messages.</li>
									<li><strong>Buttons:</strong> for navigation and interactivity.</li>
									<li><strong>Cards and Card Groups:</strong> To display credit card info, team member information and contain modal inforamtion.</li>
									<li><strong>Dropdown Menus:</strong> For action menus that allow indiviudal record editing.</li>
									<li><strong>Forms and Form Groups: For signup/login/data editing controls.</strong></li>
									<li><strong>Modals:</strong> For data manipulation in Account Info to reduce page loads.</li>
									<li><strong>Navs and Navbars:</strong> For navigation and easy mobile interaction.</li>
								</ul>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">See Bootstrap's Documention for more on these components.</li>
							</ul>
						</div>

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