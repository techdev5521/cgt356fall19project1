<!DOCTYPE html>
<html lang="em-US">

<head>
    <title>Login</title>

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

<div class="wrapper">
    <form class="form-signin">
        <h2 class="form-signin-heading">Please Login</h2>
        <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
</div>



<footer>
    <?php include("includes/footer.html"); ?>
</footer>



<!-- Bootstrap JavaScript -->
<?php include('includes/bootstrap_javascript.html') ?>

</body>
</html>