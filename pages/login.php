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
        <div class="col-lg mx-auto loginform">
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
                    <div class="text-muted">Not a user yet? <a href="register.php">Create an account</a></div>
                    </div>
                </form>
        </div>
        <div class="col-lg">
                <div class="quote-box">
                    <div class="quote">
                         <p>"YelpCamp has honestly<br>saved me hours of<br>research time, ad the<br>
                          camps on here are<br>definitely well picked and<br>added."</p>
                    </div>
                    <div class="card border-0 shadow-none bg-transparent">
                        <div class="card-body d-flex align-items-center p-0">
                            <img src="..\Assets\User Testimonial.svg" alt="" class="rounded-circle flex-shrink-0 me-3 fit-cover">
                            <div>
                                <h5 class="fw-bold text-black mb-0">May Andrews</h5>
                                <p class="text-muted mb-1 pt-0">Professional Hiker</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>                









<!--JQUERY + BOOTSTRAP JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
</body>