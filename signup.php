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
    <form action="signup2.php" onsubmit="preventDefault(); checkPassword();" method="POST"> <!-- get form data -->
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

            <section class="col-md-6" id="personalInformation">
                <fieldset>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="<?php getSessionVariable("firstName"); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="<?php getSessionVariable("lastName"); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php getSessionVariable("email"); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php getSessionVariable("phone"); ?>" required>
                    </div>
                </fieldset>
            </section>
            <section class="col-md-6" id="loginInformation">
                <fieldset>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php getSessionVariable("username"); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php getSessionVariable("password"); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="password" value="<?php getSessionVariable("password"); ?>" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info btn-block btn-lg" id="shippingButton">Proceed</button>
                </fieldset>
            </section>
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