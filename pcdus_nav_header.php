<head>
    <title>PaulCurtis.US</title>
    <script src="resources/mdl/material.js" type="application/javascript"></script>
    <link type="text/css" rel="stylesheet" href="resources/mdl/material.css"/>
    <style>
        .mdl-layout__drawer .mdl-navigation .mdl-navigation__link {
            display: block;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            padding: 16px 40px;
            margin: 0;
            color: yellow;
        }

        .mdl-layout-title {
            /*background-image: url('../PaulCurtisDotUS/resources/img/pcdussitebackgroundsept2019.png');*/
        }

        .mdl-layout__header-row {
            background-color: purple;
        }

        .mdl-layout__drawer {
            background-color: purple;
        }

        .mdl-layout-title {
            color: yellow;
        }

        .mdl-navigation .mdl-navigation__link {
            color: yellow;
        }
    </style>
</head>
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
</div>