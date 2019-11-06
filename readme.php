<?php
session_start();
?>
<!DOCTYPE html>
<html lang="em-US">

<head>
    <title>GameGo: Readme</title>

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

<main>
    <section id="header" class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">About The Site, Team, and Shared Dream</h1>
            <p class="lead text-muted">Deux Ex is one of the best video game series of all time. Change my mind.</p>
        </div>
    </section>

    <div class="container pb-5" id="readme">
        <div class="row justify-content-center">

            <div class="col-xs-3">
                <div class="card box-shadow mb-3">
                    <div class="card-header text-center">
                        <h5>Trent Lambrecht</h5>
                    </div>
                    <img class="card-img-top" src="images/trent.png" alt="Trent Lambrecht">
                    <div class="card-body">
                        <h5 class="card-title">Water Boy</h5>
                        <p class="card-text">"Failure is always an option"</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Major: </strong> VPI and Web Design</li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-3">
                <div class="card box-shadow mb-3">
                    <div class="card-header text-center">
                        <h5>Kai Mangiaracina</h5>
                    </div>
                    <img class="card-img-top" src="images/kai.PNG" alt="Kai Mangiaracina" style="max-width: 300px">
                    <div class="card-body">
                        <h5 class="card-title">"MangoTree"</h5>
                        <p class="card-text">Behind every good programmer</p>
                        <p class="card-text">there is a frustrated programmer.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Major: </strong> MET & VPI</li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-3">
                <div class="card box-shadow mb-3">
                    <div class="card-header text-center">
                        <h5>Justin Campbell</h5>
                    </div>
                    <img class="card-img-top" src="images/justin.png" alt="Justin Campbell">
                    <div class="card-body">
                        <h5 class="card-title">Mom</h5>
                        <p class="card-text">I have been around the world and back and I am not looking back</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Major: </strong> Web Design</li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-3">
                <div class="card box-shadow mb-3">
                    <div class="card-header text-center">
                        <h5>Brad Williams</h5>
                    </div>
                    <img class="card-img-top" src="images/brad.png" alt="Brad Williams">
                    <div class="card-body">
                        <h5 class="card-title">Doc</h5>
                        <p class="card-text">SHORT QUOTE</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Major: </strong> Web Design</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <p>Extras (above and beyond) if any</p>
    <p>Explanation of any 'quirks' in your system</p>
</main>

<footer>
    <?php include("includes/footer.html"); ?>
</footer>


<!-- Bootstrap JavaScript -->
<?php include('includes/bootstrap_javascript.html') ?>

<!-- JS Libraries -->
<?php include('includes/jsLibs.html'); ?>

</body>
</html>