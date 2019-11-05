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
						
						<div class="card my-5 py-3 px-3 box-shadow">

							<h2 class="text-center mt-3">About You</h2>
							<hr>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="firstName">First Name</label>
										<input type="text" name="firstName" id="firstName" class="form-control" required>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label for="lastName">Last Name</label>
										<input type="text" name="lastName" id="lastName" class="form-control" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" class="form-control" required>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="tel" name="phone" id="phone" class="form-control" required>
									</div>
								</div>
							</div>

							<h2 class="text-center mt-3">Login Info</h2>
							<hr>							

							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" name="username" id="username" class="form-control" required>
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
														<input type="number" name="cardNumber" id="cardNumber" class="form-control" required>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="cardType">Card Type</label>
														<select name="cardType" id="cardType" class="form-control">
															<option value="Discover">Visa</option>
															<option value="Mastercard">Mastercard</option>
															<option value="American Express">American Express</option>
															<option value="Discover">Discover</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="cardExpirationMonth">Month</label>
														<select name="cardExpirationMonth" id="cardExpirationMonth" class="form-control">
															<option value="01">01</option>
															<option value="02">02</option>
															<option value="03">03</option>
															<option value="04">04</option>
															<option value="05">05</option>
															<option value="06">06</option>
															<option value="07">07</option>
															<option value="08">08</option>
															<option value="09">09</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="cardExpirationYear">Year</label>
														<select name="cardExpirationYear" id="cardExpirationYear" class="form-control">
															<option value="19">19</option>
															<option value="20">20</option>
															<option value="21">21</option>
															<option value="22">22</option>
															<option value="23">23</option>
															<option value="24">24</option>
															<option value="25">25</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="cardCVV">CVV</label>
														<input type="number" name="cardCVV" id="cardCVV" class="form-control" required>
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
												<input type="text" name="billingFirstName" id="billingFirstName" class="form-control" required>
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="billingLastName">Last Name (as seen on card)</label>
												<input type="text" name="billingLastName" id="billingLastName" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="billingStreet">Street Address</label>
												<input type="text" name="billingStreet" id="billingStreet" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="billingCity">City</label>
												<input type="text" name="billingCity" id="billingCity" class="form-control" required>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="billingState">State</label>
												<select name="billingState" id="billingState" class="form-control" required>
													<option value="AL">AL</option>
													<option value="AK">AK</option>
													<option value="AR">AR</option>	
													<option value="AZ">AZ</option>
													<option value="CA">CA</option>
													<option value="CO">CO</option>
													<option value="CT">CT</option>
													<option value="DC">DC</option>
													<option value="DE">DE</option>
													<option value="FL">FL</option>
													<option value="GA">GA</option>
													<option value="HI">HI</option>
													<option value="IA">IA</option>	
													<option value="ID">ID</option>
													<option value="IL">IL</option>
													<option value="IN">IN</option>
													<option value="KS">KS</option>
													<option value="KY">KY</option>
													<option value="LA">LA</option>
													<option value="MA">MA</option>
													<option value="MD">MD</option>
													<option value="ME">ME</option>
													<option value="MI">MI</option>
													<option value="MN">MN</option>
													<option value="MO">MO</option>	
													<option value="MS">MS</option>
													<option value="MT">MT</option>
													<option value="NC">NC</option>	
													<option value="NE">NE</option>
													<option value="NH">NH</option>
													<option value="NJ">NJ</option>
													<option value="NM">NM</option>			
													<option value="NV">NV</option>
													<option value="NY">NY</option>
													<option value="ND">ND</option>
													<option value="OH">OH</option>
													<option value="OK">OK</option>
													<option value="OR">OR</option>
													<option value="PA">PA</option>
													<option value="RI">RI</option>
													<option value="SC">SC</option>
													<option value="SD">SD</option>
													<option value="TN">TN</option>
													<option value="TX">TX</option>
													<option value="UT">UT</option>
													<option value="VT">VT</option>
													<option value="VA">VA</option>
													<option value="WA">WA</option>
													<option value="WI">WI</option>	
													<option value="WV">WV</option>
													<option value="WY">WY</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="billingZip">Zip Code</label>
												<input type="number" name="billingZip" id="billingZip" class="form-control" required="">
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
												<input type="text" name="shippingFirstName" id="shippingFirstName" class="form-control">
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="shippingLastName">Last Name</label>
												<input type="text" name="shippingLastName" id="shippingLastName" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="shippingStreet">Street Address</label>
												<input type="text" name="shippingStreet" id="shippingStreet" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="shippingCity">City</label>
												<input type="text" name="shippingCity" id="shippingCity" class="form-control">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="shippingState">State</label>
												<select name="shippingState" id="shippingState" class="form-control">
													<option value="AL">AL</option>
													<option value="AK">AK</option>
													<option value="AR">AR</option>	
													<option value="AZ">AZ</option>
													<option value="CA">CA</option>
													<option value="CO">CO</option>
													<option value="CT">CT</option>
													<option value="DC">DC</option>
													<option value="DE">DE</option>
													<option value="FL">FL</option>
													<option value="GA">GA</option>
													<option value="HI">HI</option>
													<option value="IA">IA</option>	
													<option value="ID">ID</option>
													<option value="IL">IL</option>
													<option value="IN">IN</option>
													<option value="KS">KS</option>
													<option value="KY">KY</option>
													<option value="LA">LA</option>
													<option value="MA">MA</option>
													<option value="MD">MD</option>
													<option value="ME">ME</option>
													<option value="MI">MI</option>
													<option value="MN">MN</option>
													<option value="MO">MO</option>	
													<option value="MS">MS</option>
													<option value="MT">MT</option>
													<option value="NC">NC</option>	
													<option value="NE">NE</option>
													<option value="NH">NH</option>
													<option value="NJ">NJ</option>
													<option value="NM">NM</option>			
													<option value="NV">NV</option>
													<option value="NY">NY</option>
													<option value="ND">ND</option>
													<option value="OH">OH</option>
													<option value="OK">OK</option>
													<option value="OR">OR</option>
													<option value="PA">PA</option>
													<option value="RI">RI</option>
													<option value="SC">SC</option>
													<option value="SD">SD</option>
													<option value="TN">TN</option>
													<option value="TX">TX</option>
													<option value="UT">UT</option>
													<option value="VT">VT</option>
													<option value="VA">VA</option>
													<option value="WA">WA</option>
													<option value="WI">WI</option>	
													<option value="WV">WV</option>
													<option value="WY">WY</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="shippingZip">Zip Code</label>
												<input type="number" name="shippingZip" id="shippingZip" class="form-control">
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

<!-- Place mouse in billingName box on page load -->
<script>
	document.getElementById("firstName").focus();

	function checkPassword() {
		let password1 = document.getElementById("password").value;
		let password2 = document.getElementById("confirmPassword").value;

		else if (password1 === password2) {
			return true;
		}
		else{
			alert ("Passwords do not match: Please try again...");
			return false;
		}
	}

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