<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css"/>
    <title>Yelp Camp - Campgrounds</title>
</head>
<body style="background: white !important;">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="padding-top: 2rem !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../Assets/Logo.svg" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form class="d-flex">
      <span class="navbar-text">
        <a href="login.php">Login</a>
    </span>
      <button type="button" class="btn btn-create" style="font-size:1.1rem !important;">Create an accoount</button>
      </form>
    </div>
  </div>
</nav>
</div>
<div class="container">
<div class="row gx-5 d-flexbox">
    <div class="col-4" style="border: 1px solid var(--color-muted);">
        <div class="map-section my-auto">
            <img src="../Assets/Map.png">
        </div>
    </div>
    <div class="col-8" style="border: 1px solid var(--color-muted);">test</div>

</div>
</div>

<!--JQUERY + BOOTSTRAP JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
</body>