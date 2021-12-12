<?php
include '../config.php';
?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="fontawesome/js/all.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
<!--    <link rel="stylesheet" href="css/home.css"> -->
</head>

<body class="body">
    <header>
        <nav class="navbar navbar-expand-sm header-top">
            <a class="navbar-brand logo" href="home.php">
                    SleepingBeauty
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
            </div>
            <div class="narr">
                <ul class="nav justify-content-end">
                    <?php
                    session_start();
                    if (!isset($_SESSION['username'])) {
                    ?>
                        <li class="nav-item">
                            <a type="button" class="nav-link active " href="#" data-toggle="modal" data-target="#login">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a type="button" class="nav-link active " href="#" data-toggle="modal" data-target="#sign-up">
                                Sign Up
                            </a>
                        </li>
                        <?php
                    } else {
                        $a = $_SESSION['username'];
                        $us = mysqli_query($conn, "SELECT * FROM users WHERE username = '$a' OR email = '$a'");
                        $uss = mysqli_fetch_all($us);
                        foreach ($uss as $u) {
                        ?>
                            <li class="users">
                                <a class="nav-link active" href=""><i class="fa fa-user"></i>&nbsp;<?php echo $u[15] ?></a>
                            </li>
                            <?php
                            if ($u[6] >= 1) {
                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle magana" data-toggle="dropdown" href="#">Magana</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item i" href="account.php">Account</a>
                                        <a class="dropdown-item i" href="patner.php">Partner</a>
                                        <a class="dropdown-item i" href="personnal.php">Personnal</a>
                                        <a class="dropdown-item i" href="posts.php">Posts</a>
                                    </div>
                                </li>
                            <?php
                            } ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="logout.php">Logout</a>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light header-bottom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                  
                    
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <div class="contain" style="width: 100%;">
        









        <!--modal sign up -->
        <div class="modal fade" id="sign-up" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="overflow: auto;">
            <form action="modal-sign-up1.php" method="post">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">First_name</label>
                                    <input type="text" name="f_name" class="form-control" id="validationDefault01" placeholder="..." required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Last_name</label>
                                    <input type="text" name="l_name" class="form-control" id="validationDefault02" placeholder="..." required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Email</label>
                                    <input type="email" name="email" class="form-control" id="validationDefault02" placeholder="..." required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">Password</label>
                                    <input type="password" name="password1" class="form-control" id="validationDefault01" placeholder="..." required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">Re-Password</label>
                                    <input type="password" name="password2" class="form-control" id="validationDefault01" placeholder="..." required>
                                </div>
                            </div>
                            
                            
                            <div class="dropdown-divider"></div>
                            <button type="submit" class="btn btn-primary">Sign up</button>
                            <div class="dropdown-divider"></div>
                            <a type="button" class="dropdown-item" href="#" data-dismiss="modal" data-toggle="modal" data-target="#login">
                                Have you around ? Sign In
                            </a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>









        <!-- Modal login -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <form action="login.php" method="post">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email..." required>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password..." required>
                            </div>
                            <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="dropdownCheck">
                                Remember me
                            </label>
                        </div> -->
                            <button type="submit" class="btn btn-primary" name="sign-in">Sign in</button>
                            <div class="dropdown-divider"></div>
                            <a type="button" class="dropdown-item" href="#" data-dismiss="modal" data-toggle="modal" data-target="#sign-up">
                                New around here? Sign Up
                            </a>

                            <a class="dropdown-item" href="#">Forgot password?</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>