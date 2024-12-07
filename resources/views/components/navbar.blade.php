<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Electrochip</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="/">
            <img src="images/logo.png" alt="">
            <span class="mx-3">
                Muhamad Rafif
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                    <li class="nav-item <?php echo request()->is('/') ? 'active' : ''; ?>">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?= request()->is('about') ? 'active' : '' ?>">
                        <a class="nav-link" href="/about"> About</a>
                    </li>
                    <li class="nav-item <?= request()->is('service') ? 'active' : '' ?>">
                        <a class="nav-link" href="/service"> Service </a>
                    </li>
                    <li class="nav-item <?= request()->is('project') ? 'active' : '' ?>">
                        <a class="nav-link" href="/project"> Project </a>
                    </li>
                    <li class="nav-item <?= request()->is('contact') ? 'active' : '' ?>">
                        <a class="nav-link" href="/contact">Contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
