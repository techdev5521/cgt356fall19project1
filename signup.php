<?php 

	// Start Session
	session_start();

?>

<!DOCTYPE html>
<html lang="em-US">
	
	<head>
		<title>GameGo Signup</title>

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
			<form action="doSignup.php" method="POST">
				<div class="row">
					<div class="col-md-12">
						
						<h1 class="text-center">Signup</h1>
						<p class="text-center">Already have an account? <a href="login.php">Login</a></p>

						<!-- Session Error Message -->
						<?php printSessionErrorMessage(); ?>
						
						<div class="card my-3 py-3 px-3 box-shadow">

							<h2 class="text-center mt-3">About You</h2>
							<hr>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="firstName">First Name</label>
										<input type="text" name="firstName" id="firstName" class="form-control" value="<?php getSessionVariable("firstName"); ?>" required>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label for="lastName">Last Name</label>
										<input type="text" name="lastName" id="lastName" class="form-control" value="<?php getSessionVariable("lastName"); ?>" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  value="<?php getSessionVariable("email"); ?>" required>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="tel" name="phone" id="phone" class="form-control" value="<?php getSessionVariable("phone"); ?>" required>
									</div>
								</div>
							</div>

							<h2 class="text-center mt-3">Login Info</h2>
							<hr>							

							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" name="username" id="username" class="form-control" value="<?php getSessionVariable("username"); ?>" required>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" class="form-control" required>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label for="passwordConfirm">Password (Confirm)</label>
										<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" required>
									</div>
								</div>
							</div>

							<h2 class="text-center mt-3">Billing Info</h2>
							<hr>							

							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<h5>Add A Card</h5>
										</div>

										<div class="card-body">
											<div class="row">

												<div class="col-md-8">
													<div class="form-group">
														<label for="cardNumber">Card Number</label>
														<input type="number" name="cardNumber" id="cardNumber" class="form-control" value="<?php getSessionVariable("cardNumber"); ?>" required>
													</div>
												</div>

												<div class="col-md-4">
													<div class="form-group">
														<label for="cardType">Card Type</label>
														<select name="cardType" id="cardType" class="form-control">
															<option <?php if(returnSessionVariable("cardType") == "Visa") { echo("selected"); } ?> value="Visa">Visa</option>
															<option <?php if(returnSessionVariable("cardType") == "Mastercard") { echo("selected"); } ?> value="Mastercard">Mastercard</option>
															<option <?php if(returnSessionVariable("cardType") == "American Express") { echo("selected"); } ?> value="American Express">American Express</option>
															<option <?php if(returnSessionVariable("cardType") == "Discover") { echo("selected"); } ?> value="Discover">Discover</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">

												<div class="col-md-4">
													<div class="form-group">
														<label for="cardExpirationMonth">Month</label>
														<select name="cardExpirationMonth" id="cardExpirationMonth" class="form-control">
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "01") { echo("selected"); } ?> value="01">01</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "02") { echo("selected"); } ?> value="02">02</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "03") { echo("selected"); } ?> value="03">03</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "04") { echo("selected"); } ?> value="04">04</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "05") { echo("selected"); } ?> value="05">05</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "06") { echo("selected"); } ?> value="06">06</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "07") { echo("selected"); } ?> value="07">07</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "08") { echo("selected"); } ?> value="08">08</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "09") { echo("selected"); } ?> value="09">09</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "10") { echo("selected"); } ?> value="10">10</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "11") { echo("selected"); } ?> value="11">11</option>
															<option <?php if(returnSessionVariable("cardExpirationMonth") == "12") { echo("selected"); } ?> value="12">12</option>
														</select>
													</div>
												</div>

												<div class="col-md-4">
													<div class="form-group">
														<label for="cardExpirationYear">Year</label>
														<select name="cardExpirationYear" id="cardExpirationYear" class="form-control">
															<option <?php if(returnSessionVariable("cardExpirationYear") == "19") { echo("selected"); } ?> value="19">19</option>
															<option <?php if(returnSessionVariable("cardExpirationYear") == "20") { echo("selected"); } ?> value="20">20</option>
															<option <?php if(returnSessionVariable("cardExpirationYear") == "21") { echo("selected"); } ?> value="21">21</option>
															<option <?php if(returnSessionVariable("cardExpirationYear") == "22") { echo("selected"); } ?> value="22">22</option>
															<option <?php if(returnSessionVariable("cardExpirationYear") == "23") { echo("selected"); } ?> value="23">23</option>
															<option <?php if(returnSessionVariable("cardExpirationYear") == "24") { echo("selected"); } ?> value="24">24</option>
															<option <?php if(returnSessionVariable("cardExpirationYear") == "25") { echo("selected"); } ?> value="25">25</option>
														</select>
													</div>
												</div>

												<div class="col-md-4">
													<div class="form-group">
														<label for="cardCVV">CVV</label>
														<input type="number" name="cardCVV" id="cardCVV" class="form-control" value="<?php getSessionVariable("cardCVV"); ?>" required>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="billingFirstName">First Name (as seen on card)</label>
												<input type="text" name="billingFirstName" id="billingFirstName" class="form-control" value="<?php getSessionVariable("billingFirstName"); ?>" required>
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="billingLastName">Last Name (as seen on card)</label>
												<input type="text" name="billingLastName" id="billingLastName" class="form-control" value="<?php getSessionVariable("billingLastName"); ?>" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="billingStreet">Street Address</label>
												<input type="text" name="billingStreet" id="billingStreet" class="form-control" value="<?php getSessionVariable("billingStreet"); ?>" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="billingCity">City</label>
												<input type="text" name="billingCity" id="billingCity" class="form-control" value="<?php getSessionVariable("billingCity"); ?>" required>
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group">
												<label for="billingState">State</label>
												<select name="billingState" id="billingState" class="form-control" required>
													<option <?php if(returnSessionVariable("billingState") == "AL") { echo("selected"); } ?> value="AL">AL</option>
													<option <?php if(returnSessionVariable("billingState") == "AK") { echo("selected"); } ?> value="AK">AK</option>
													<option <?php if(returnSessionVariable("billingState") == "AR") { echo("selected"); } ?> value="AR">AR</option>	
													<option <?php if(returnSessionVariable("billingState") == "AZ") { echo("selected"); } ?> value="AZ">AZ</option>
													<option <?php if(returnSessionVariable("billingState") == "CA") { echo("selected"); } ?> value="CA">CA</option>
													<option <?php if(returnSessionVariable("billingState") == "CO") { echo("selected"); } ?> value="CO">CO</option>
													<option <?php if(returnSessionVariable("billingState") == "CT") { echo("selected"); } ?> value="CT">CT</option>
													<option <?php if(returnSessionVariable("billingState") == "DC") { echo("selected"); } ?> value="DC">DC</option>
													<option <?php if(returnSessionVariable("billingState") == "DE") { echo("selected"); } ?> value="DE">DE</option>
													<option <?php if(returnSessionVariable("billingState") == "FL") { echo("selected"); } ?> value="FL">FL</option>
													<option <?php if(returnSessionVariable("billingState") == "GA") { echo("selected"); } ?> value="GA">GA</option>
													<option <?php if(returnSessionVariable("billingState") == "HI") { echo("selected"); } ?> value="HI">HI</option>
													<option <?php if(returnSessionVariable("billingState") == "IA") { echo("selected"); } ?> value="IA">IA</option>	
													<option <?php if(returnSessionVariable("billingState") == "ID") { echo("selected"); } ?> value="ID">ID</option>
													<option <?php if(returnSessionVariable("billingState") == "IL") { echo("selected"); } ?> value="IL">IL</option>
													<option <?php if(returnSessionVariable("billingState") == "IN") { echo("selected"); } ?> value="IN">IN</option>
													<option <?php if(returnSessionVariable("billingState") == "KS") { echo("selected"); } ?> value="KS">KS</option>
													<option <?php if(returnSessionVariable("billingState") == "KY") { echo("selected"); } ?> value="KY">KY</option>
													<option <?php if(returnSessionVariable("billingState") == "LA") { echo("selected"); } ?> value="LA">LA</option>
													<option <?php if(returnSessionVariable("billingState") == "MA") { echo("selected"); } ?> value="MA">MA</option>
													<option <?php if(returnSessionVariable("billingState") == "MD") { echo("selected"); } ?> value="MD">MD</option>
													<option <?php if(returnSessionVariable("billingState") == "ME") { echo("selected"); } ?> value="ME">ME</option>
													<option <?php if(returnSessionVariable("billingState") == "MI") { echo("selected"); } ?> value="MI">MI</option>
													<option <?php if(returnSessionVariable("billingState") == "MN") { echo("selected"); } ?> value="MN">MN</option>
													<option <?php if(returnSessionVariable("billingState") == "MO") { echo("selected"); } ?> value="MO">MO</option>	
													<option <?php if(returnSessionVariable("billingState") == "MS") { echo("selected"); } ?> value="MS">MS</option>
													<option <?php if(returnSessionVariable("billingState") == "MT") { echo("selected"); } ?> value="MT">MT</option>
													<option <?php if(returnSessionVariable("billingState") == "NC") { echo("selected"); } ?> value="NC">NC</option>	
													<option <?php if(returnSessionVariable("billingState") == "NE") { echo("selected"); } ?> value="NE">NE</option>
													<option <?php if(returnSessionVariable("billingState") == "NH") { echo("selected"); } ?> value="NH">NH</option>
													<option <?php if(returnSessionVariable("billingState") == "NJ") { echo("selected"); } ?> value="NJ">NJ</option>
													<option <?php if(returnSessionVariable("billingState") == "NM") { echo("selected"); } ?> value="NM">NM</option>			
													<option <?php if(returnSessionVariable("billingState") == "NV") { echo("selected"); } ?> value="NV">NV</option>
													<option <?php if(returnSessionVariable("billingState") == "NY") { echo("selected"); } ?> value="NY">NY</option>
													<option <?php if(returnSessionVariable("billingState") == "ND") { echo("selected"); } ?> value="ND">ND</option>
													<option <?php if(returnSessionVariable("billingState") == "OH") { echo("selected"); } ?> value="OH">OH</option>
													<option <?php if(returnSessionVariable("billingState") == "OK") { echo("selected"); } ?> value="OK">OK</option>
													<option <?php if(returnSessionVariable("billingState") == "OR") { echo("selected"); } ?> value="OR">OR</option>
													<option <?php if(returnSessionVariable("billingState") == "PA") { echo("selected"); } ?> value="PA">PA</option>
													<option <?php if(returnSessionVariable("billingState") == "RI") { echo("selected"); } ?> value="RI">RI</option>
													<option <?php if(returnSessionVariable("billingState") == "SC") { echo("selected"); } ?> value="SC">SC</option>
													<option <?php if(returnSessionVariable("billingState") == "SD") { echo("selected"); } ?> value="SD">SD</option>
													<option <?php if(returnSessionVariable("billingState") == "TN") { echo("selected"); } ?> value="TN">TN</option>
													<option <?php if(returnSessionVariable("billingState") == "TX") { echo("selected"); } ?> value="TX">TX</option>
													<option <?php if(returnSessionVariable("billingState") == "UT") { echo("selected"); } ?> value="UT">UT</option>
													<option <?php if(returnSessionVariable("billingState") == "VT") { echo("selected"); } ?> value="VT">VT</option>
													<option <?php if(returnSessionVariable("billingState") == "VA") { echo("selected"); } ?> value="VA">VA</option>
													<option <?php if(returnSessionVariable("billingState") == "WA") { echo("selected"); } ?> value="WA">WA</option>
													<option <?php if(returnSessionVariable("billingState") == "WI") { echo("selected"); } ?> value="WI">WI</option>	
													<option <?php if(returnSessionVariable("billingState") == "WV") { echo("selected"); } ?> value="WV">WV</option>
													<option <?php if(returnSessionVariable("billingState") == "WY") { echo("selected"); } ?> value="WY">WY</option>
												</select>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label for="billingZip">Zip Code</label>
												<input type="number" name="billingZip" id="billingZip" class="form-control" value="<?php getSessionVariable("billingZip"); ?>" required="">
											</div>
										</div>
									</div>
								</div>
							</div>

							<h2 class="text-center mt-3">Shipping Info <span class="text-muted">(if different from billing)</span></h2>
							<hr>

							<div class="row">
								<div class="col-md-12">
									<div class="row">

										<div class="col-md-6">
											<div class="form-group">
												<label for="shippingFirstName">First Name</label>
												<input type="text" name="shippingFirstName" id="shippingFirstName" class="form-control" value="<?php getSessionVariable("shippingFirstName"); ?>" >
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="shippingLastName">Last Name</label>
												<input type="text" name="shippingLastName" id="shippingLastName" class="form-control" value="<?php getSessionVariable("shippingLastName"); ?>" >
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="shippingStreet">Street Address</label>
												<input type="text" name="shippingStreet" id="shippingStreet" class="form-control" value="<?php getSessionVariable("shippingStreet"); ?>" >
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="shippingCity">City</label>
												<input type="text" name="shippingCity" id="shippingCity" class="form-control" value="<?php getSessionVariable("shippingCity"); ?>" >
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group">
												<label for="shippingState">State</label>
												<select name="shippingState" id="shippingState" class="form-control">
													<option <?php if(returnSessionVariable("shippingState") == "AL") { echo("selected"); } ?> value="AL">AL</option>
													<option <?php if(returnSessionVariable("shippingState") == "AK") { echo("selected"); } ?> value="AK">AK</option>
													<option <?php if(returnSessionVariable("shippingState") == "AR") { echo("selected"); } ?> value="AR">AR</option>
													<option <?php if(returnSessionVariable("shippingState") == "AZ") { echo("selected"); } ?> value="AZ">AZ</option>
													<option <?php if(returnSessionVariable("shippingState") == "CA") { echo("selected"); } ?> value="CA">CA</option>
													<option <?php if(returnSessionVariable("shippingState") == "CO") { echo("selected"); } ?> value="CO">CO</option>
													<option <?php if(returnSessionVariable("shippingState") == "CT") { echo("selected"); } ?> value="CT">CT</option>
													<option <?php if(returnSessionVariable("shippingState") == "DC") { echo("selected"); } ?> value="DC">DC</option>
													<option <?php if(returnSessionVariable("shippingState") == "DE") { echo("selected"); } ?> value="DE">DE</option>
													<option <?php if(returnSessionVariable("shippingState") == "FL") { echo("selected"); } ?> value="FL">FL</option>
													<option <?php if(returnSessionVariable("shippingState") == "GA") { echo("selected"); } ?> value="GA">GA</option>
													<option <?php if(returnSessionVariable("shippingState") == "HI") { echo("selected"); } ?> value="HI">HI</option>
													<option <?php if(returnSessionVariable("shippingState") == "IA") { echo("selected"); } ?> value="IA">IA</option>
													<option <?php if(returnSessionVariable("shippingState") == "ID") { echo("selected"); } ?> value="ID">ID</option>
													<option <?php if(returnSessionVariable("shippingState") == "IL") { echo("selected"); } ?> value="IL">IL</option>
													<option <?php if(returnSessionVariable("shippingState") == "IN") { echo("selected"); } ?> value="IN">IN</option>
													<option <?php if(returnSessionVariable("shippingState") == "KS") { echo("selected"); } ?> value="KS">KS</option>
													<option <?php if(returnSessionVariable("shippingState") == "KY") { echo("selected"); } ?> value="KY">KY</option>
													<option <?php if(returnSessionVariable("shippingState") == "LA") { echo("selected"); } ?> value="LA">LA</option>
													<option <?php if(returnSessionVariable("shippingState") == "MA") { echo("selected"); } ?> value="MA">MA</option>
													<option <?php if(returnSessionVariable("shippingState") == "MD") { echo("selected"); } ?> value="MD">MD</option>
													<option <?php if(returnSessionVariable("shippingState") == "ME") { echo("selected"); } ?> value="ME">ME</option>
													<option <?php if(returnSessionVariable("shippingState") == "MI") { echo("selected"); } ?> value="MI">MI</option>
													<option <?php if(returnSessionVariable("shippingState") == "MN") { echo("selected"); } ?> value="MN">MN</option>
													<option <?php if(returnSessionVariable("shippingState") == "MO") { echo("selected"); } ?> value="MO">MO</option>
													<option <?php if(returnSessionVariable("shippingState") == "MS") { echo("selected"); } ?> value="MS">MS</option>
													<option <?php if(returnSessionVariable("shippingState") == "MT") { echo("selected"); } ?> value="MT">MT</option>
													<option <?php if(returnSessionVariable("shippingState") == "NC") { echo("selected"); } ?> value="NC">NC</option>
													<option <?php if(returnSessionVariable("shippingState") == "NE") { echo("selected"); } ?> value="NE">NE</option>
													<option <?php if(returnSessionVariable("shippingState") == "NH") { echo("selected"); } ?> value="NH">NH</option>
													<option <?php if(returnSessionVariable("shippingState") == "NJ") { echo("selected"); } ?> value="NJ">NJ</option>
													<option <?php if(returnSessionVariable("shippingState") == "NM") { echo("selected"); } ?> value="NM">NM</option>
													<option <?php if(returnSessionVariable("shippingState") == "NV") { echo("selected"); } ?> value="NV">NV</option>
													<option <?php if(returnSessionVariable("shippingState") == "NY") { echo("selected"); } ?> value="NY">NY</option>
													<option <?php if(returnSessionVariable("shippingState") == "ND") { echo("selected"); } ?> value="ND">ND</option>
													<option <?php if(returnSessionVariable("shippingState") == "OH") { echo("selected"); } ?> value="OH">OH</option>
													<option <?php if(returnSessionVariable("shippingState") == "OK") { echo("selected"); } ?> value="OK">OK</option>
													<option <?php if(returnSessionVariable("shippingState") == "OR") { echo("selected"); } ?> value="OR">OR</option>
													<option <?php if(returnSessionVariable("shippingState") == "PA") { echo("selected"); } ?> value="PA">PA</option>
													<option <?php if(returnSessionVariable("shippingState") == "RI") { echo("selected"); } ?> value="RI">RI</option>
													<option <?php if(returnSessionVariable("shippingState") == "SC") { echo("selected"); } ?> value="SC">SC</option>
													<option <?php if(returnSessionVariable("shippingState") == "SD") { echo("selected"); } ?> value="SD">SD</option>
													<option <?php if(returnSessionVariable("shippingState") == "TN") { echo("selected"); } ?> value="TN">TN</option>
													<option <?php if(returnSessionVariable("shippingState") == "TX") { echo("selected"); } ?> value="TX">TX</option>
													<option <?php if(returnSessionVariable("shippingState") == "UT") { echo("selected"); } ?> value="UT">UT</option>
													<option <?php if(returnSessionVariable("shippingState") == "VT") { echo("selected"); } ?> value="VT">VT</option>
													<option <?php if(returnSessionVariable("shippingState") == "VA") { echo("selected"); } ?> value="VA">VA</option>
													<option <?php if(returnSessionVariable("shippingState") == "WA") { echo("selected"); } ?> value="WA">WA</option>
													<option <?php if(returnSessionVariable("shippingState") == "WI") { echo("selected"); } ?> value="WI">WI</option>
													<option <?php if(returnSessionVariable("shippingState") == "WV") { echo("selected"); } ?> value="WV">WV</option>
													<option <?php if(returnSessionVariable("shippingState") == "WY") { echo("selected"); } ?> value="WY">WY</option>
												</select>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label for="shippingZip">Zip Code</label>
												<input type="number" name="shippingZip" id="shippingZip" class="form-control" value="<?php getSessionVariable("shippingZip"); ?>" >
											</div>
										</div>
									</div>
								</div>
							</div>

							<button class="btn btn-lg btn-secondary btn-block" type="submit">Signup</button>

						</div>
					</div>
				</div>
			</form>
		</main>

<!-- verifies password -->
<script>
	document.getElementById("firstName").focus();

    var password = document.getElementById("password"), confirm_password = document.getElementById("passwordConfirm");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

</script>
		<!-- Place mouse in billingName box on page load -->
		<script>
			document.getElementById("firstName").focus();
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