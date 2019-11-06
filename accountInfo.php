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
			<?php include('includes/navigation.php'); ?>
		</header>




		<main class="container">
			<div class="card my-5 py-3 px-3 box-shadow">

				<h2 class="text-center mt-3">About You</h2>
				<hr>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="firstName">First Name</label>
							<input type="text" name="firstName" id="firstName" class="form-control" required disabled>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="lastName">Last Name</label>
							<input type="text" name="lastName" id="lastName" class="form-control" required disabled>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" required disabled>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="phone">Phone</label>
							<input type="tel" name="phone" id="phone" class="form-control" required disabled>
						</div>
					</div>
				</div>

				<h2 class="text-center mt-3">Login Info</h2>
				<hr>							

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control" required disabled>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control" required disabled>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							<label for="passwordConfirm">Password (Confirm)</label>
							<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" required  disabled>
						</div>
					</div>
				</div>

				<h2 class="text-center mt-3">Billing Info</h2>
				<hr>							

				<div class="row">
					<table class="table">
						<thead>
							<tr>
								<th>Card</th>
								<th>Card Type</th>
								<th>Card Expiration</th>
								<th>Name</th>
								<th>Address</th>
							</tr>
						</thead>
						<tbody>
							<?php 

								// Build  Query
								// $sql = "SELECT UniqueID,Name,Color,Role,KillCount FROM Members";

								// Execute Query, returns mysqli_result class
								// $result = $conn->query($sql);

								// Query Error Checking
								// if ($result->num_rows <= 0){
									// die("No data returned.");
								// }

								// Build Table Body
								// for($i = 1; $i <= $result->num_rows; $i++){
									// $row = $result->fetch_assoc();
									
								// 	echo("<tr>");
								// 	echo("<td>" . trim($row['UniqueID']) . "</td>");
								// 	echo("<td>" . trim($row['Name']) . "</td>");
								// 	echo("<td>" . trim($row['Color']) . "</td>");
								// 	echo("<td>" . trim($row['Role']) . "</td>");
								// 	echo("<td>" . trim($row['KillCount']) . "</td>");
								// 	echo("</tr>");
								// }

							?>
						</tbody>
						<tfoot>
							<tr>
								<td class="text-center text-muted" colspan="5">Information pulled from Assignment 07 Database</td>
							</tr>
						</tfoot>
					</table>
				</div>

				<h2 class="text-center mt-3">Shipping Info <span class="text-muted">(if different from billing)</span></h2>
				<hr>

				<div class="row">
					
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