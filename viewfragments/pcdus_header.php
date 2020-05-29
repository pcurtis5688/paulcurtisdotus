<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PaulCurtis.us || Home</title>
    <!-- Material Design Bootstrap Core CSS & Custom Style Sheets, Font Awesome CSS -->
    <link href="/external_resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/external_resources/css/mdb.min.css" rel="stylesheet">
    <link type="text/css" href="/pcdus_customresources/style/pcdus-style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>
<?php /* HEADER NAV BAR PHP FRAGMENT ///*/ ?>
<nav
        class="navbar fixed-top navbar-expand-lg
			navbar-dark scrolling-navbar textalign">
    <div class="container">
        <a href="/index.php"> <?php $pcdus_main_graphic_path = "external_resources/img/pcdus_graphic.png";
            echo '<img src="' . $pcdus_main_graphic_path . '" alt="www.PaulCurtis.us"'; ?>
        </a>

        <!-- TOGGLE DROPDOWN NAV BUTTON -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="true"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NAVIGATION HEADER BAR (LEFT & RIGHT) -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li id="navHomeLink" class="nav-item active"><a class="nav-link"
                                                                    href="#"
                                                                    onclick="navBarItemClicked('home');">Home<span
                                    class="sr-only">(current)</span>
                        </a></li>
                    <li id="navContactLink" class="nav-item"><a class="nav-link"
                                                                href="#"
                                                                onclick="navBarItemClicked('contact');">Contact</a></li>
                    <li id="navPortfolioLink" class="nav-item"><a class="nav-link"
                                                                  href="#" onclick="navBarItemClicked('portfolio');">Portfolio</a>
                    </li>
                    <li id="navBlogLink" class="nav-item"><a class="nav-link" href="#"
                                                             onclick="navBarItemClicked('blog');">Blog</a></li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item"><a
                                href="../documents/Paul_Curtis_Resume_May_2020.pdf"
                                class="nav-link border border-light rounded" target="_blank">Resume</a></li>
                    <li class="nav-item"><a
                                href="https://www.linkedin.com/in/paulcphilly/"
                                class="nav-link border border-light rounded" target="_blank"> <i
                                    class="fab fa-linkedin"></i>LinkedIn
                        </a></li>
                    <li class="nav-item"><a href="https://github.com/pcurtis5688/"
                                            style="float: right;" class="nav-link border border-light rounded"
                                            target="_blank"> <i class="fab fa-github mr-2"></i>GitHub
                            Repositories
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>