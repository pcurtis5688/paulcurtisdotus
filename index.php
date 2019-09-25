<html lang="en">
<head>
    <title>PaulCurtis.us</title>
    <script src="resources/mdl/material.js" type="application/javascript"></script>
    <link type="text/css" rel="stylesheet" href="resources/mdl/material.css"/>
    <style>
        .demo-layout-transparent .mdl-layout__header,
        .demo-layout-transparent .mdl-layout__drawer-button {
            /* This background is dark, so we set text to white. Use 87% black instead if
               your background is light. */
            color: #3496e9;
        }

        .mdl-layout-title {
            color: black;
        }

        .mdl-layout {
            /*background-image: url('../PaulCurtisDotUS/resources/img/pcdussitebackgroundsept2019.png');*/
        }

        .mdl-layout__header-row {
            background-color: purple;
        }

        .mdl-layout__drawer {
            background-color: purple;
        }
    </style>
</head>
<body>
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">PaulCurtis.US</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Home (Kansas, toto)</a>
                <a class="mdl-navigation__link" href="">Resume</a>
                <a class="mdl-navigation__link" href="">Portfolio</a>
                <a class="mdl-navigation__link" href="">Get in touch</a>
                <a class="mdl-navigation__link" href="">Other Stuff</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">PaulCurtis.US</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Resume</a>
            <a class="mdl-navigation__link" href="">Portfolio</a>
            <a class="mdl-navigation__link" href="">Get in touch</a>
            <a class="mdl-navigation__link" href="">Other Stuff</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <?php include('content_index.php'); ?>
    </main>
</div>
</body>