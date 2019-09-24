<html lang="en">
<head>
    <title>Paul Curtis DOT US</title>
    <script src="resources/mdl/material.js" type="application/javascript"></script>
    <link type="text/css" rel="stylesheet" href="resources/mdl/material.css"/>
    <style>
        .demo-layout-transparent {
            background: url('/resources/img/pcdussitebackgroundsept2019.png') center / cover;
            /*background-image: url("/resources/img/pcdus-site-background-sept-2019.png");*/
        }

        .demo-layout-transparent .mdl-layout__header,
        .demo-layout-transparent .mdl-layout__drawer-button {
            /* This background is dark, so we set text to white. Use 87% black instead if
               your background is light. */
            background-color: #000000;
        }

        .mdl-layout-title {
            color: #FFFFFF;
            background-color: #000000;
        }

        .mdl-layout {
            background-image: url('../PaulCurtisDotUS/resources/img/pcdussitebackgroundsept2019.png');
        }

        .mdl-layout__drawer {
            background-color: black;
        }

        .mdl-navigation {
            background-color: black;
        }

        .mdl-layout-spacer {
            background-color: black;
        }

        .material-icon {
            color: white;
        }
    </style>
</head>
<body>
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Paul Curtis DOT US</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Resume</a>
                <a class="mdl-navigation__link" href="">Portfolio</a>
                <a class="mdl-navigation__link" href="">Get in touch</a>
                <a class="mdl-navigation__link" href="">Other Stuff</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">paulcurtis.us</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="index.php">
                <img src="resources/icons/home-18/1x/baseline_home_black_18dp.png" alt="Home"/>
                Kansas</a>
            <a class="mdl-navigation__link" href="resume.php">Resume</a>
            <a class="mdl-navigation__link" href="">Portfolio</a>
            <a class="mdl-navigation__link" href="">Get in touch</a>
            <a class="mdl-navigation__link" href="">Other Stuff</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
    </main>
</div>
</body>