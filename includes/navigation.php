<!-- Start navigation.html -->

<div class="navbar navbar-expand-lg navbar-dark bg-dark box-shadow">
    <nav class="container d-flex justify-content-between">
        <a href="index.php" ><img class="logo_img" src="images/logo.png" alt="GameGo Logo" data-toggle="tooltip" title="Home"></a>
        <a class="navbar-brand" href="index.php" data-toggle="tooltip" title="Home">GameGo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="btn btn-light mr-2" type="button" href = "readme.php" data-toggle="tooltip" title="All About ME!!!!">Read Me</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <div class="form-inline my-2 my-lg-0">
                        <?php
                        if (returnSessionVariable("loggedIn") == false) { //if logged out
                            echo("<a class=\"btn btn-light mr-2\" type=\"button\" href = \"login.php\" data-toggle=\"tooltip\" title=\"Get Logged In!\">Login</a>");
                            echo("<a class=\"btn btn-light ml-2\" type=\"button\" href = \"signup.php\" data-toggle=\"tooltip\" title=\"Get Signed Up!\">Sign Up</a>");
                        }else { //If logged in
                            echo("<a class=\"btn btn-light mr-2\" type=\"button\" href = \"accountInfo.php\" data-toggle=\"tooltip\" title=\"Your Info!\">Account Info</a>");
                            echo("<a class=\"btn btn-light ml-2\" type=\"button\" href = \"doLogout.php\" data-toggle=\"tooltip\" title=\"Get Out of Here!\">Log Out</a>}");
                        }
                        ?>
                    </div>
                </li>
            </ul>
    </nav>
</div>
<!-- End navigation.html -->