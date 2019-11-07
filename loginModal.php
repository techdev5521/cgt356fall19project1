<!-- Start loginModal.php -->

<!-- Edit Login Info Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginModal">Login Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control" value="<?php getSessionVariable("username") ?>" required disabled>
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
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Save Changes</button>
			</div>
		</div>
	</div>
</div>

<!-- End loginModal.php -->