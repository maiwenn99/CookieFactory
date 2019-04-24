<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cookie Factory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/styles.css" />
</head>
<body>
  <header>
      <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-info fixed-top">
          <a class="navbar-brand" href="/"><i class="fas fa-cookie-bite"></i> Cookies Factory</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                  aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
              <ul class="navbar-nav ml-auto nav-flex-icons">
                  <li class="nav-item">
                      <a class="nav-link waves-effect waves-light" href="/index.php">
                          <i class="fas fa-shopping-bag"></i> Shop
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link waves-effect waves-light" href="/cart.php">
                          <i class="far fa-credit-card"></i> Cart
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link waves-effect waves-light" href="/logout.php">
                          <i class="fas fa-sign-out-alt"></i> Log Out
                      </a>
                  </li>

              </ul>
          </div>
      </nav>
</header>
<main>
    <div class="container-fluid text-left">
        <strong>Hello <?= $_SESSION["login"] ?? "Wilder" ?> !</strong>
    </div>
</main>