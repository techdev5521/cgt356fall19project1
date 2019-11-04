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
			<?php include('includes/logo_nav.html'); ?>
		</header>

		<main class="container my-5">
			<form action="login.php" method="POST"> <!-- get form data -->
				<div class="row justify-content-center">
					<div class="col-md-6 text-center">
						<h1>Sign up</h1>
						<br>
					</div>
				</div>

				<?php
				// If $_SESSION['errorMessage'] is set, echo error message.
				if (!empty($_SESSION['errorMessage'])) {
					echo "<div class=\"row justify-content-center\">\n";
					echo "<div class=\"alert alert-warning\" role=\"alert\">\n";
					getSessionVariable("errorMessage");
					echo "</div>\n";
					echo "</div>\n";
				}
				?>


				<div class="row">

					<section class="col-md-6" id="billingInformation">
						<fieldset>
							<legend>Payment information</legend>
							<div class="form-group">
								<label for="cardFirstName">First name (as on the card)</label>
								<input type="text" class="form-control" id="cardFirstName" name="cardFirstName" value="<?php getSessionVariable("cardFirstName"); ?>" required>
							</div>
							<div class="form-group">
								<label for="cardLastName">Last name (as on the card)</label>
								<input type="text" class="form-control" id="cardLastName" name="cardLastName" value="<?php getSessionVariable("cardLastName"); ?>" required>
							</div>
							<div class="form-group">
								<label for="cardType">Card Type</label>
								<input type="text" class="form-control" id="cardType" name="cardType" value="<?php getSessionVariable("cardType"); ?>" required>
							</div>
							<div class="form-group">
								<label for="cardNumber">Card Number</label>
								<input type="text" class="form-control" id="cardNumber" name="cardNumber" value="<?php getSessionVariable("cardNumber"); ?>" required>
							</div>
							<div class="form-group">
								<label for="cardExpiration">Card Expiration</label>
								<input type="date" class="form-control" id="cardExpiration" name="cardExpiration" value="<?php getSessionVariable("cardExpiration"); ?>" required>
							</div>
						</fieldset>
					</section>

					<section class="col-md-6" id="billingInformation">
						<fieldset id="billing">
							<legend>Billing:</legend>
							<div class="form-group">
								<label for="billingAddress">Address</label>
								<input type="text" class="form-control" id="billingAddress" name="billingAddress" value="<?php getSessionVariable("billingAddress"); ?>" required>
							</div>
							<div class="form-group">
								<label for="billingCity">City</label>
								<input type="text" class="form-control" id="billingCity" name="billingCity" value="<?php getSessionVariable("billingCity"); ?>" required>
							</div>
							<div class="form-group">
								<label for="billingState">State</label>
								<input type="text" class="form-control" id="billingState" name="billingState" value="<?php getSessionVariable("billingState"); ?>" required>
							</div>
							<div class="form-group">
								<label for="billingZip">Zip Code</label>
								<input type="number" class="form-control" id="billingZip" name="billingZip" value="<?php getSessionVariable("billingZip"); ?>" required>
							</div>
							<div class="form-group">
								<label for="billingCountry">Country</label>
								<input type="text" class="form-control" id="billingCountry" name="billingCountry" value="<?php getSessionVariable("billingCountry"); ?>" required>
							</div>

						</fieldset>
                    </section>

                    <section class="col-md-6" id="shippingInformation">
                        <input type="checkbox" name="shippingVisibilityCheckbox" id="shippingVisibility" onclick="toggleShippingVisibility();">Check if shipping address is different
                        <button type="submit" class="btn btn-info btn-block btn-lg" id="billingButton">Create account</button>
                    </section>

                    <section class="col-md-6" id="shippingInformation">
						<fieldset id="shippingForm">
							<legend>Shipping:</legend>
							<div class="form-group">
								<label for="shippingAddress">Address</label>
								<input type="text" class="form-control" id="shippingAddress" name="shippingAddress" value="<?php getSessionVariable("shippingAddress"); ?>" >
							</div>
							<div class="form-group">
								<label for="shippingCity">City</label>
								<input type="text" class="form-control" id="shippingCity" name="shippingCity" value="<?php getSessionVariable("shippingCity"); ?>" >
							</div>
							<div class="form-group">
								<label for="shippingState">State</label>
								<input type="text" class="form-control" id="shippingState" name="shippingState" value="<?php getSessionVariable("shippingState"); ?>" >
							</div>
							<div class="form-group">
								<label for="shippingZip">Zip Code</label>
								<input type="number" class="form-control" id="shippingZip" name="shippingZip" value="<?php getSessionVariable("shippingZip"); ?>" >
							</div>
							<div class="form-group">
								<label for="shippingCountry">Country</label>
								<input type="text" class="form-control" id="shippingCountry" name="shippingCountry" value="<?php getSessionVariable("shippingCountry"); ?>" >
							</div>
						</fieldset>
                    </section>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-info btn-block btn-lg" id="shippingButton">Create account</button>
					</div>
				</div>
			</form>
		</main>

<!-- Place mouse in billingName box on page load -->
		<script>
			// document.getElementById("billingName").focus();
		</script>

		<footer>
			<?php include("includes/footer.html"); ?>
		</footer>



		<!-- Bootstrap JavaScript -->
		<?php include('includes/bootstrap_javascript.html') ?>

		<!-- JS Libraries -->
		<?php include('includes/jsLibs.html'); ?>

	</body>


</html>