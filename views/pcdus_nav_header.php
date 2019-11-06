<head>
    <title>PaulCurtis.US</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/PaulCurtisDOTUS/resources/mdl/material.css"/>
    <script type="text/javascript" src="http://localhost/PaulCurtisDOTUS/resources/mdl/material.js"></script>
    <style>
        .mdl-layout__drawer .mdl-navigation .mdl-navigation__link {
            display: block;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            padding: 16px 40px;
            margin: 0;
            color: white;
        }

        .mdl-layout__header-row {
            background-color: black;
        }

        .mdl-layout__drawer {
            background-color: black;
        }

        .mdl-navigation .mdl-navigation__link {
            color: white;
        }

        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url('http://localhost/PaulCurtisDOTUS/resources/iconfonts/MaterialIcons-Regular.eot'); /* For IE6-8 */
            src: local('Material Icons'),
            local('MaterialIcons-Regular'),
            url(http://localhost/PaulCurtisDOTUS/resources/iconfonts/MaterialIcons-Regular.woff2) format('woff2'),
            url(http://localhost/PaulCurtisDOTUS/resources/iconfonts/MaterialIcons-Regular.woff) format('woff'),
            url(http://localhost/PaulCurtisDOTUS/resources/iconfonts/MaterialIcons-Regular.ttf) format(' truetype ');
        }


        .material-icons {
            font-family: 'Material Icons', sans-serif;
            font-weight: normal;
            font-style: normal;
            font-size: 42px; /* Preferred icon size */
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
            color: #6200ea;

            /* Support for all WebKit browsers. */
            -webkit-font-smoothing: antialiased;
            /* Support for Safari and Chrome. */
            text-rendering: optimizeLegibility;

            /* Support for Firefox. */
            -moz-osx-font-smoothing: grayscale;

            /* Support for IE. */
            font-feature-settings: 'liga';
        }
    </style>
    <script type="text/javascript">
        function loadResumeContent() {
            resources / DOCS / Paul_Curtis_Resume_Sept_2019.doc;
            this.getElementById("contentdiv").innerHTML("http://localhost/Paul_Curtis_Resume_Sept_2019.doc");
        }
    </script>
</head>
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
            <img src="http://localhost/paulcurtisdotus/resources/img/pcdussitebackgroundsept2019.png"
                 alt="PaulCurtis.US" height="64px"/>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="/index.php">
                    <i class="material-icons">home</i>Home
                    <i class="material-icons">assignment</i>
                    Resume</a>
                <a class="mdl-navigation__link" href="">
                    <i class="material-icons">grade</i>
                    Portfolio</a>
                <a class="mdl-navigation__link" href="">
                    <i class="material-icons">mail</i>
                    Get in touch</a>
                <a class="mdl-navigation__link" href="">
                    <i class="material-icons">settings</i>
                    Other Stuff</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <img src="http://localhost/paulcurtisdotus/resources/img/pcdussitebackgroundsept2019.png"
             alt="PaulCurtis.US"/>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="/index.php">
                <i class="material-icons">home</i>
                Home</a>
            <a class="mdl-navigation__link" href="">
                <i class="material-icons">assignment</i>
                Resume</a>
            <a class="mdl-navigation__link" href="">
                <i class="material-icons">grade</i>
                Portfolio</a>
            <a class="mdl-navigation__link" href="">
                <i class="material-icons">mail</i>
                Get in touch</a>
            <a class="mdl-navigation__link" href="">
                <i class="material-icons">settings</i>
                Other Stuff</a>
        </nav>
    </div>
</div>