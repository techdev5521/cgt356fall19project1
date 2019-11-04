<!DOCTYPE html>
<html lang="em-US">

<head>
    <title>Account Info</title>

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




<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md text-center my-4">
                <h1>Hi, <?php getSessionVariable("firstName"); ?></h1>
            </div>
        </div>

        <form>
            <div class="row">
                <div class="col-md-12">
                    <fieldset id="personal">
                        <legend>Personal Information</legend>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php getSessionVariable("firstName"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="<?php getSessionVariable("lastName"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php getSessionVariable("email"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="<?php getSessionVariable("phone"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php getSessionVariable("username"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php getSessionVariable("password"); ?>" disabled required >
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <fieldset id="billing"><!-- this is the Billing info that is on the right side-->
                        <legend>Billing Information</legend>
                        <div class="form-group">
                            <label for="billingStreet">Street</label>
                            <input type="text" class="form-control" id="billingStreet" name="billingStreet" value="<?php getSessionVariable("billingStreet"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="billingAddress">Billing Address</label>
                            <input type="text" class="form-control" id="billingAddress" name="billingAddress" value="<?php getSessionVariable("billingCity"); ?>, <?php getSessionVariable("billingState"); ?>, <?php getSessionVariable("billingZip"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="billingCountry">Country</label>
                            <input type="text" class="form-control" id="billingCountry" name="billingCountry" value="<?php getSessionVariable("billingCountry"); ?>" disabled required >
                        </div>
                    </fieldset>
                </div>

                <div class="col-md-4">
                    <fieldset id="card"><!-- this is the card info that is on the right side-->
                        <legend>Card Information</legend>
                        <div class="form-group">
                            <label for="cardName">Card Holder Name</label>
                            <input type="text" class="form-control" id="cardName" name="cardName" value="<?php getSessionVariable("cardName"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="number" class="form-control" id="cardNumber" name="cardNumber" value="<?php getSessionVariable("cardNumber"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="cardType">Card Type</label>
                            <input type="text" class="form-control" id="cardType" name="cardType" value="<?php getSessionVariable("cardType"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="cardExpiration">Expiration Date</label>
                            <input type="date" class="form-control" id="cardExpiration" name="cardExpiration" value="<?php getSessionVariable("cardExpiration"); ?>" disabled required >
                        </div>
                    </fieldset>
                </div>

                <div class="col-md-4">
                    <fieldset id="shipping"><!-- this is the Shipping info that is on the right side-->
                        <legend>Shipping Information</legend>
                        <div class="form-group">
                            <label for="shippingStreet">Street</label>
                            <input type="text" class="form-control" id="shippingStreet" name="shippingStreet" value="<?php getSessionVariable("shippingStreet"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="shippingAddress">Shipping Address</label>
                            <input type="text" class="form-control" id="shippingAddress" name="shippingAddress" value="<?php getSessionVariable("shippingCity"); ?>, <?php getSessionVariable("shippingState"); ?>, <?php getSessionVariable("shippingZip"); ?>" disabled required >
                        </div>
                        <div class="form-group">
                            <label for="shippingCountry">Country</label>
                            <input type="text" class="form-control" id="shippingCountry" name="shippingCountry" value="<?php getSessionVariable("shippingCountry"); ?>" disabled required >
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
        <br>
        <br>
    </div>
</main>




<footer>
    <?php include("includes/footer.html"); ?>
</footer>

<!-- Bootstrap JavaScript -->
<?php include('includes/bootstrap_javascript.html') ?>

</body>
</html>