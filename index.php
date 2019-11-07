<?php
session_start();
?>
<!DOCTYPE html>
<html lang="em-US">
<link rel="icon"
      type="image/png"
      href="images/logo.png">

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
    <?php include('includes/navigation.php'); ?>
</header>


<main>
    <section id="header" class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Welcome to GameGo</h1>
            <p class="lead text-muted">Playing With Power</p>
        </div>
    </section>

    <div class="container">

        <div class="row my-5 game-banner box-shadow" id="modern-warfare">
            <div class="col-md-4 py-5 game-text-overlay">
                <h2>Call of Duty <br>Modern Warfare</h2>
                <p>The stakes have never been higher as players take on the role of lethal Tier One operators in a heart-racing saga that will affect the global balance of power. Call of Duty®: Modern Warfare® engulfs fans in an incredibly raw, gritty, provocative narrative that brings unrivaled intensity and shines a light on the changing nature of modern war.</p>
                <a href="https://www.gamestop.com/video-games/pc/games/products/call-of-duty-modern-warfare/11097309.html" target="_blank" class="btn btn-light btn-block" role="button"><i class="fas fa-shopping-basket"></i> Buy Now </a>
                <a href="https://www.gamestop.com/video-games/pc/games/products/call-of-duty-modern-warfare/11097309.html" target="_blank" class="btn btn-light btn-block" role="button">&nbsp<i class="fas fa-info-circle"></i> More Info </a>
            </div>
        </div>

        <div class="row my-5 game-banner box-shadow" id="red-dead-redemption-2">
            <div class="col-md-4 py-5 game-text-overlay">
                <h2>Red Dead <br>Redemption 2</h2>
                <p>Red Dead Redemption 2, the critically acclaimed open world epic from Rockstar Games and the highest rated game of the console generation, now enhanced for PC with new Story Mode content, visual upgrades and more.</p>
                <a href="https://www.gamestop.com/video-games/pc/games/products/red-dead-redemption-2/11098169.html" target="_blank" class="btn btn-light btn-block" role="button"><i class="fas fa-shopping-basket"></i> Buy Now </a>
                <a href="https://www.gamestop.com/video-games/pc/games/products/red-dead-redemption-2/11098169.html" target="_blank" class="btn btn-light btn-block" role="button">&nbsp<i class="fas fa-info-circle"></i> More Info </a>
            </div>
        </div>

        <div class="row my-5 game-banner box-shadow" id="death-stranding">
            <div class="col-md-4 py-5 game-text-overlay">
                <h2>Death Stranding</h2>
                <p>Besieged by death's tide at every turn Sam Bridges must brave a world utterly transformed by the Death Stranding. Carrying the stranded remnants of the future in his hands, Sam embarks on a journey to reunite the shattered world one step at a time. What is the mystery of the Death Stranding?</p>
                <a href="https://www.gamestop.com/video-games/playstation-4/games/products/death-stranding/10174855.html" target="_blank" class="btn btn-light btn-block" role="button"><i class="fas fa-shopping-basket"></i> Buy Now </a>
                <a href="https://www.gamestop.com/video-games/playstation-4/games/products/death-stranding/10174855.html" target="_blank" class="btn btn-light btn-block" role="button">&nbsp<i class="fas fa-info-circle"></i> More Info </a>
            </div>
        </div>

    </div>
</main>


<!-- adds footer to the bottom of the page -->
<footer>
    <?php include("includes/footer.html"); ?>
</footer>

<!-- Bootstrap JavaScript -->
<?php include('includes/bootstrap_javascript.html') ?>

<!-- JS Libraries -->
<?php include('includes/jsLibs.html'); ?>

</body>


</html>