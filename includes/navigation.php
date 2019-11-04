<!-- Start navigation.html -->

<div class="navbar navbar-expand-lg navbar-dark bg-dark box-shadow">
	<nav class="container d-flex justify-content-between">
		<a class="navbar-brand" href="#">GameGo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<div class="form-inline my-2 my-lg-0">
						<?php
                        if (1) { //if logged out
							echo("<button class=\"btn btn-light mr-2\" type=\"button\" onclick=\"window.location.href = 'login.php';\">Login</button>");
							echo("<button class=\"btn btn-light ml-2\" type=\"button\" onclick=\"window.location.href = 'signup.php';\">Sign Up</button>");
						}else { //If logged in
                            echo("<button class=\"btn btn-light mr-2\" type=\"button\" onclick=\"window.location.href = '#';\">Account information</button>");
                            echo("<button class=\"btn btn-light ml-2\" type=\"button\" onclick=\"window.location.href = '#';\">Log out</button>}");
                        }
						?>
					</div>
				</li>
			</ul>
	</nav>
</div>
<!-- End navigation.html -->