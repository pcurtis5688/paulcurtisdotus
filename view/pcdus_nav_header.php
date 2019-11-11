<head>
<title>PaulCurtis.US</title>
<link rel="stylesheet" type="text/css"
	href="http://localhost/PaulCurtisDOTUS/resources/mdl/material.min.css" />
<script type="text/javascript"
	src="http://localhost/PaulCurtisDOTUS/resources/mdl/material.min.js"></script>
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
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
	<header class="mdl-layout__header mdl-layout__header--transparent">
		<div class="mdl-layout__header-row">
			<img width="400px" alt="PaulCurtis.US Logo"
				src="resources/img/pcdussitebackgroundsept2019.png" />
			<!-- Navigation -->
			<nav class="mdl-navigation" style="font-size: smallest;">
				<a class="mdl-navigation__link" href="index.php"> <i
					class="material-icons">home</i>Home
				</a> <a class="mdl-navigation__link" href="resume.php"> <i
					class="material-icons">assignment</i>Experience
				</a> <a class="mdl-navigation__link"
					href="https://github.com/pcurtis5688" target="_blank"> <img
					alt="GitHub Repo" src="resources/img/PCDUS-GitHub-Icon-Light64.png"
					height="42px" width="42px" />
				</a> <a class="mdl-navigation__link" href=""> <i
					class="material-icons">mail</i>
				</a>
			</nav>
			<!-- Add spacer to align navigation to the right -->
			<div class="mdl-layout-spacer"></div>
		</div>
	</header>
	<div class="mdl-layout__drawer">
		<img src="resources/img/pcdussitebackgroundsept2019.png"
			alt="PaulCurtis.US" />
		<nav class="mdl-navigation">
			<a class="mdl-navigation__link" href="index.php"> <i
				class="material-icons">home</i> Home
			</a> <a class="mdl-navigation__link" href="resume.php"> <i
				class="material-icons">assignment</i> Resume
			</a> <a class="mdl-navigation__link"
				href="https://github.com/pcurtis5688" target="_blank"> <img
				alt="GitHub Repo" src="resources/img/PCDUS-GitHub-Icon-Light64.png"
				height="36px" width="36px" /> [My] GitHub Repos 
			</a> <a class="mdl-navigation__link" href="portfolio.php"> <i
				class="material-icons">mail</i> Get in touch
			</a>
		</nav>
	</div>
</div>