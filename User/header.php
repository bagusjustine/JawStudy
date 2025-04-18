<?php session_start();
include "../koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Gambar/unesa.png" type="image/x-icon">
    <title>Jaweb</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <!-- CSS -->
    <link href="../style.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="background-navbar fixed-top">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto" href="#"></a>

                    <!-- Toggle button (hamburger) -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Offcanvas menu -->
                    <div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" aria-current="page" href="home.php">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" aria-current="page" href="aksara.php">AKSARA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" aria-current="page" href="jabot.php">JABOT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" aria-current="page" href="sejarah.php">SEJARAH</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" aria-current="page" href="video.php">VIDEO</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" aria-current="page" href="tujuan.php">TUJUAN</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
<main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>