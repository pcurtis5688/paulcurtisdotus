<head>
<title>PaulCurtis.US</title>
<link rel="stylesheet" type="text/css"
	href="./resources/mdl/material.min.css" />
<script type="text/javascript" src="./resources/mdl/material.min.js"></script>
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
			<a href="index.php"> <img width="400px" alt="PaulCurtis.US Logo"
				src="./resources/img/pcdussitebackgroundsept2019.png" /></a>
			<!-- Navigation -->
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="index.php"> <i
					class="material-icons">home</i>
				</a> <a class="mdl-navigation__link" href="portfolioresume.php"> <i
					class="material-icons">assignment</i><span style="color: #0F00f0;">Portfolio</span>
				</a> <a class="mdl-navigation__link"
					href="https://github.com/pcurtis5688" target="_blank"> <img
					alt="GitHub Repo"
					src="./resources/img/PCDUS-GitHub-Icon-Light64.png" height="42px"
					width="42px" />
				</a> <a class="mdl-navigation__link" href="contact.php"> <i
					class="material-icons">mail</i>
				</a>
			</nav>
			<!-- Add spacer to align navigation to the right -->
			<div class="mdl-layout-spacer"></div>
		</div>
	</header>
	<div class="mdl-layout__drawer">
		<img src="./resources/img/pcdussitebackgroundsept2019.png"
			alt="PaulCurtis.US" />
		<nav class="mdl-navigation" style="text-align: center">
			<a class="mdl-navigation__link" href="index.php"> <i
				class="material-icons">home</i> Home
			</a> <a class="mdl-navigation__link" href="portfolioresume.php"> <i
				class="material-icons">assignment</i><br>About & Portfolio
			</a> <a class="mdl-navigation__link"
				href="https://github.com/pcurtis5688" target="_blank"> <img
				alt="https://github.com/pcurtis5688/"
				src="./resources/img/PCDUS-GitHub-Icon-Light64.png" height="36px"
				width="42px" /> <br>(@pcurtis5688)<br>
			</a> <a class="mdl-navigation__link" href="contact.php"> <i
				class="material-icons">mail</i>
			</a>
		</nav>
	</div>
</div>