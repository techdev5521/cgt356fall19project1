<!-- Start navigation.html -->

<div class="navbar navbar-expand-lg navbar-dark bg-dark box-shadow">
    <nav class="container d-flex justify-content-between">
        <img class="logo_img" src="images/logo.png" alt="GameGo Logo" onclick="window.location.href = 'index.php'">
        <a class="navbar-brand" href="index.php">GameGo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <button class="btn btn-light mr-2" type="button" onclick="window.location.href = 'readme.php';">Read Me</button>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <div class="form-inline my-2 my-lg-0">
                        <?php
                        if (returnSessionVariable("loggedIn") == false) { //if logged out
                            echo("<button class=\"btn btn-light mr-2\" type=\"button\" onclick=\"window.location.href = 'login.php';\">Login</button>");
                            echo("<button class=\"btn btn-light ml-2\" type=\"button\" onclick=\"window.location.href = 'signup.php';\">Sign Up</button>");
                        }else { //If logged in
                            echo("<button class=\"btn btn-light mr-2\" type=\"button\" onclick=\"window.location.href = 'accountInfo.php';\">Account Info</button>");
                            echo("<button class=\"btn btn-light ml-2\" type=\"button\" onclick=\"window.location.href = 'index.php';\">Log out</button>}");
                        }
                        ?>
                    </div>
                </li>
            </ul>
    </nav>
</div>
<!-- End navigation.html -->