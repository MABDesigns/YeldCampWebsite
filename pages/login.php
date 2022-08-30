<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="src/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css"/>
    <title>Yelp Camp - Login</title>
</head>
<body>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-lg" style="background: white !important; padding: 0 10rem 0 10rem !important;">
                <nav class="navbar" id="navbar-login">
                    <a class="navbar-brand" href="#">
                        <img src="../Assets/Logo.svg" alt="logo">
                    </a>
                    <a href="#" class="backlink">← Back to campgrounds</a>
                </nav>
                <div class="title pb-4" id="title-login"><h1>Start exploring camps from all<br>around the world.</h1></div>
                <!--form login--> 
                <form>
                    <div class="mb-3 d-grid">
                        <label for="exampleInputUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 d-grid">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid">
                    <button type="submit" class="btn btn-login">Login</button>
                    </div>
                </form>
        </div>

        <div class="col-lg">

        </div>
    </div>
</div>                









<!--JQUERY + BOOTSTRAP JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
</body>