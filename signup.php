<?php
// Starts PHP session and initialized $_SESSION superglobal.
session_start();

        //Metadata
		include('includes/meta.html');

		//CSS
		include('includes/css.html');

		//PHP Libraries
		include('includes/phpLibs.html');

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Sign up</title>
</head>
<body>
<header>
    <!-- Navigation -->
    <?php include('includes/logo_nav.html'); ?>
</header>

<main class="container my-5">
    <form action="#" method="POST"> <!-- get form data -->
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
                    <legend>Billing:</legend>
                    <div class="form-group">
                        <label for="billingName">Name</label>
                        <input type="text" class="form-control" id="billingName" name="billingName" value="<?php getSessionVariable("billingName"); ?>" required>
                    </div>
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

                    <!--
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="<?php //getSessionVariable("phone"); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php //getSessionVariable("email"); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="questions">Questions/Comments</label>
                        <textarea class="form-control" id="questions" name="questions" rows="5">
									<?php //getSessionVariable("questions"); ?>
								</textarea>
                    </div>
                    -->
                </fieldset>
            </section>

            <section class="col-md-6" id="shippingInformation">
                <fieldset>
                    <legend>Shipping: (if different)</legend>
                    <div class="form-group">
                        <label for="shippingName">Name</label>
                        <input type="text" class="form-control" id="shippingName" name="shippingName" value="<?php getSessionVariable("shippingName"); ?>" >
                    </div>
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
                <button type="submit" class="btn btn-info btn-block btn-lg">Proceed</button>
            </div>
        </div>
    </form>
</main>

<!-- Place mouse in billingName box on page load -->
<script>
    document.getElementById("billingName").focus();
</script>

</body>
</html>