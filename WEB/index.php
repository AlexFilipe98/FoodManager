<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <title>Login</title>
    <meta name="description" content="Page for login">
    <meta name="author" content="AlexScorpion100">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./fonts/fontawesome/css/all.min.css">
</head>
<body>
<div id="particles-js" class="bgparticles"></div>
    <div class="container h-100 container card-body d-flex align-items-center justify-content-center">
        <div class="card shadow-lg">
            <div class="card-header text-center shadow-sm">
                <h1>Login page</h1>
            </div>
            <div class="card-body shadow-sm">
                <form class="" method="post" action="">
                    <div class="form-group font-weight-bold">
                        <label for="email"><i class="fa fa-user"></i> E-mail:</label>
                        <input class="form-control" id="email" type="text" name="email">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="pass"><i class="fa fa-lock"></i> Password:</label>
                        <input class="form-control" id="pass" type="password" name="password">
                    </div>
                    <div class="form-group text-right font-weight-bold">
                        <button class="col-4 btn btn-dark" type="submit" value="Login">
                            Login <i class="fa fa-sign-in-alt"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center shadow-sm">
                <h5 class="font-weight-bold">Welcome back bitch! </h5>
                <h5 class="">Dont have an account? <a class="font-weight-bold" href="#">Click here bitch!</a></h5>
            </div>
        </div>
    </div>

<script src="./node_modules/jquery/dist/jquery.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./node_modules/particles.js/particles.js"></script>
<script src="./node_modules/particles.js/app.js"></script>
<script src="./fonts/fontawesome/js/all.min.js"></script>

</body>
</html>