<head>
<title>PaulCurtis.US</title>
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
	background-color: #000000;
}

.mdl-navigation .mdl-navigation__link {
	color: #3f51b5;
}

@font-face {
	font-family: 'Material Icons';
	font-style: normal;
	font-weight: 400;
	src: url('resources/iconfonts/MaterialIcons-Regular.eot');
	/* For IE6-8 */
	src: local('Material Icons'), local('MaterialIcons-Regular'),
		url(resources/iconfonts/MaterialIcons-Regular.woff2) format('woff2'),
		url(resources/iconfonts/MaterialIcons-Regular.woff) format('woff'),
		url(resources/iconfonts/MaterialIcons-Regular.ttf)
		format(' truetype ');
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
</head>
<body>
	<div id="logodiv"
		style="background-color: black; width: 100%; text-align: center;">
		<a href="index.php"><img alt="paulcurtis.us:logo"
			src="./resources/img/pcdussitebackgroundsept2019.png" /></a>
		<div class="demo-layout-transparent mdl-layout mdl-js-layout">
			<header class="mdl-layout__header mdl-layout__header--transparent">
				<div class="mdl-layout__header-row">
					<!-- Navigation -->
					<nav class="mdl-navigation">
						<a class="mdl-navigation__link" href="index.php"
							style="font-size: 14pt;"> <i class="material-icons">home</i>Home
						</a> <a class="mdl-navigation__link" href="portfolioresume.php"
							style="font-size: 14pt;"><i class="material-icons">assignment</i>Portfolio</a>
						<a class="mdl-navigation__link"
							href="https://github.com/pcurtis5688" target="_blank"> <img
							alt="GitHub Repo"
							src="./resources/img/PCDUS-GitHub-Icon-Light64.png" height="42px"
							width="42px" />
						</a> <a target="_blank" class="mdl-navigation__link"
							href="https://linkedin.com/in/paulcphilly/"><img
							alt="Paul C's LinkedIn" width="42px" height="36px"
							src="./resources/img/pcdus-li-icon-sm.png"></img></a> <a
							class="mdl-navigation__link" href="contact.php"> <i
							class="material-icons">mail</i>
						</a>
					</nav>
					<!-- Add spacer to align navigation to the right -->
					<div class="mdl-layout-spacer"></div>
				</div>
			</header>
			<div class="mdl-layout__drawer">
				<nav class="mdl-navigation">
					<img alt="paulcurtis.us" style="width: 100%;"
						src="./resources/img/pcdussitebackgroundsept2019.png" /> <a
						class="mdl-navigation__link" href="index.php"> <i
						class="material-icons">home</i> Home
					</a> <a class="mdl-navigation__link" href="portfolioresume.php"> <i
						class="material-icons">assignment</i>Portfolio/Resume
					</a><a class="mdl-navigation__link"
						href="https://github.com/pcurtis5688" target="_blank"> <img
						alt="https://github.com/pcurtis5688/"
						src="./resources/img/PCDUS-GitHub-Icon-Light64.png" height="36px"
						width="36px" /> @pcurtis5688<br>
					</a><a class="mdl-navigation__link" href="contact.php"> <i
						class="material-icons">mail</i> Contact Me
					</a>
				</nav>
			</div>
		</div>

</body>