<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="em-US">
<link rel="icon"
      type="image/png"
      href="images/logo.png">
	
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
			<?php include('includes/navigation.php'); ?>
		</header>




		<main class="container">

			<div class="dropdown show">
				<a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-cog"></i>
 				</a>

 				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i>Edit</a>
					<a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
				</div>
			</div>

			<h2 class="text-center mt-5">Hi, <?php getSessionVariable("firstName") ?>!</h2>

			<div class="card my-5 box-shadow">
				<div class="card-header">
					<h4 class="text-center">Account Info</h4>
				</div>
				
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="firstName">First Name</label>
								<input type="text" name="firstName" id="firstName" class="form-control" value="<?php getSessionVariable("firstName") ?>" required disabled>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="lastName">Last Name</label>
								<input type="text" name="lastName" id="lastName" class="form-control" value="<?php getSessionVariable("lastName") ?>" required disabled>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" id="email" class="form-control" value="<?php getSessionVariable("email") ?>" required disabled>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="tel" name="phone" id="phone" class="form-control" value="<?php getSessionVariable("phone") ?>" required disabled>
							</div>
						</div>
					</div>
					<button class="btn btn-info btn-block">Edit Account Info</button>
				</div>
			</div>

			<div class="card my-5 box-shadow">
				<div class="card-header">
					<h4 class="text-center">Login Info</h4>
				</div>
				
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" class="form-control" value="<?php getSessionVariable("username") ?>" required disabled>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control" value="Roll Tide" required disabled>
							</div>
						</div>
					</div>
					<button class="btn btn-info btn-block">Edit Login Info</button>
				</div>
			</div>

			<div class="card my-5 box-shadow">

				<div class="card-header">
					<h4 class="text-center">Billing Info</h4>
				</div>
				
				<div class="card-body">
					<div class="row">
						<table class="table table-striped mx-3 text-center">
							<thead>
								<tr>
									<th>Card #</th>
									<th>Type</th>
									<th>Expiration</th>
									<th>Name</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<?php
									// Open Database Connection
									include("includes/openDBConn.php");

									// Select all but username from Billing
									$sql = "SELECT `cardNumber`, `cardType`, `cardExpirationMonth`, `cardExpirationYear`, `cardCVV`, ";
									$sql = $sql . "`billingFirstName`, `billingLastName`, `billingStreet`, `billingCity`, `billingState`, `billingZip` FROM `Billing` ";
									$sql = $sql . "WHERE username='" . returnSessionVariable("username") . "'";
									$result = $conn->query($sql);

									// Populate table rows
									for($i = 0; $i < $result->num_rows; $i++){
										$row = $result->fetch_assoc();
										echo("<tr>");	
										echo("<td>" . substr($row['cardNumber'], 12) . "</td>"); // Card
										echo("<td>" . $row['cardType'] . "</td>");	// Card Type
										echo("<td>" . $row['cardExpirationMonth'] . "/" . $row['cardExpirationYear'] . "</td>"); // Card Expiration
										echo("<td>" . $row['billingFirstName'] . " " . $row['billingLastName'] . "</td>"); // Name
										echo("<td>" . $row['billingStreet'] . ", " .  $row['billingCity'] . ", " . $row['billingState'] . " " . $row['billingZip'] . "</td>");	// Address
										echo("</tr>");
									}

									// Close Database Connection
									include("includes/closeDBConn.php");
								?>
							</tbody>
							<tfoot>
								<tr>
									<td class="text-center text-muted" colspan="5"><?php echo "Retrived " . $result->num_rows . " Cards."; ?></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>

			<div class="card my-5 box-shadow">
				<div class="card-header text-center">
					<h4>Shipping Info</h4>
				</div>

				<div class="card-body">
					<div class="row">
						<table class="table table-striped mx-3 text-center">
							<thead>
								<tr>
									<th>Name</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<?php
									// Open Database Connection
									include("includes/openDBConn.php");

									// Select all but username from Shipping
									$sql = "SELECT `shippingFirstName`, `shippingLastName`, `shippingStreet`, `shippingCity`, `shippingState`, `shippingZip` FROM `Shipping` ";
									$sql = $sql . "WHERE username='" . returnSessionVariable("username") . "'";
									$result = $conn->query($sql);

									// Populate table rows
									for($i = 0; $i < $result->num_rows; $i++){
										$row = $result->fetch_assoc();
										echo("<tr>");	
										echo("<td>" . $row['shippingFirstName'] . " " . $row['shippingLastName'] . "</td>"); // Name
										echo("<td>" . $row['shippingStreet'] . ", " .  $row['shippingCity'] . ", " . $row['shippingState'] . " " . $row['shippingZip'] . "</td>");	// Address
										echo("</tr>");
									}

									// Close Database Connection
									include("includes/closeDBConn.php");
								?>
							</tbody>
							<tfoot>
								<tr>
									<td class="text-center text-muted" colspan="5"><?php echo "Retrived " . $result->num_rows . " shipping addresses."; ?></td>
								</tr>
							</tfoot>
						</table>
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