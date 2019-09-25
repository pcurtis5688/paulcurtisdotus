<head>
    <title>PaulCurtis.US</title>
    <link rel="stylesheet" href="http://localhost/PaulCurtisDOTUS/material-design-icons/"/>
    <script src="http://localhost/PaulCurtisDOTUS/resources/mdl/material.js" type="application/javascript"></script>
    <link type="text/css" rel="stylesheet" href="../resources/mdl/material.css"/>
    <style>
        .mdl-layout__drawer .mdl-navigation .mdl-navigation__link {
            display: block;
            -webkit-flex-shrink: 0;
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

        /*@font-face {*/
        /*    font-family: 'Material Icons';*/
        /*    font-style: normal;*/
        /*    font-weight: 400;*/
        /*    src: url(https://example.com/MaterialIcons-Regular.eot); !* For IE6-8 *!*/
        /*    src: local('Material Icons'),*/
        /*    local('MaterialIcons-Regular'),*/
        /*    url(https://example.com/MaterialIcons-Regular.woff2) format('woff2'),*/
        /*    url(https://example.com/MaterialIcons-Regular.woff) format('woff'),*/
        /*    url(https://example.com/MaterialIcons-Regular.ttf) format('truetype');*/
        /*}*/

        /*.material-icons {*/
        /*    font-family: 'Material Icons';*/
        /*    font-weight: normal;*/
        /*    font-style: normal;*/
        /*    font-size: 24px; !* Preferred icon size *!*/
        /*    display: inline-block;*/
        /*    line-height: 1;*/
        /*    text-transform: none;*/
        /*    letter-spacing: normal;*/
        /*    word-wrap: normal;*/
        /*    white-space: nowrap;*/
        /*    direction: ltr;*/

        /*    !* Support for all WebKit browsers. *!*/
        /*    -webkit-font-smoothing: antialiased;*/
        /*    !* Support for Safari and Chrome. *!*/
        /*    text-rendering: optimizeLegibility;*/

        /*    !* Support for Firefox. *!*/
        /*    -moz-osx-font-smoothing: grayscale;*/

        /*    !* Support for IE. *!*/
        /*    font-feature-settings: 'liga';*/
        /*}*/
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
                <a class="mdl-navigation__link" href="">
                    <i class="material-icons">home</i>
                    Home (Kansas, toto)</a>
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
            <a class="mdl-navigation__link" href="../index.php">
                Home (Kansas, toto)
            </a>
            <a class="mdl-navigation__link" href="" onclick="loadResumeContent();">Resume</a>
            <a class="mdl-navigation__link" href="">Portfolio</a>
            <a class="mdl-navigation__link" href="">Get in touch</a>
            <a class="mdl-navigation__link" href="">Other Stuff</a>
        </nav>
    </div>
</div>