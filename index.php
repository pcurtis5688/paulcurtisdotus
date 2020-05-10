<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport'
	content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<meta http-equiv='x-ua-compatible' content='ie=edge'>
<title>www.PaulCurtis.us</title>
<!-- Material Design Bootstrap Core CSS & Custom Style Sheets, Font Awesome CSS -->
<link href='./resources/css/bootstrap.min.css' rel='stylesheet'>
<link href='./resources/css/mdb.min.css' rel='stylesheet'>
<link href='./resources/css/pcdus-style.css' rel='stylesheet'>
<link rel='stylesheet'
	href='https://use.fontawesome.com/releases/v5.11.2/css/all.css'>
</head>
<!-- Navbar -->
<nav
	class='navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar textalign'>
	<div class='container'>
		<a href='index.php'> <img src='./resources/img/pcdus_graphic.png'
			alt='PaulCurtis.us' />
		</a>
		<!-- Collapse -->
		<button class='navbar-toggler' type='button' data-toggle='collapse'
			data-target='#navbarSupportedContent'
			aria-controls='navbarSupportedContent' aria-expanded='true'
			aria-label='Toggle navigation'>
			<span class='navbar-toggler-icon'></span>
		</button>
		<!-- NAVIGATION -->
		<div class='collapse navbar-collapse' id='navbarSupportedContent'>
			<div class='collapse navbar-collapse' id='navbarSupportedContent'>
				<ul class='navbar-nav mr-auto'>
					<li id='navHomeLink' class='nav-item active'><a class='nav-link'
						href='#' onclick='navBarItemClicked("home");'>Home<span
							class='sr-only'>(current)</span>
					</a></li>
					<li id='navContactLink' class='nav-item'><a class='nav-link'
						href='#' onclick='navBarItemClicked("contact");'>Contact
							Information</a></li>
					<li id='navPortfolioLink' class='nav-item'><a class='nav-link'
						href='#' onclick='navBarItemClicked("portfolio");'>Portfolio</a></li>
					<li id='navBlogLink' class='nav-item'><a class='nav-link' href='#'
						onclick='navBarItemClicked("blog");'>Blog</a></li>
				</ul>
				<!-- Right -->
				<ul class='navbar-nav nav-flex-icons'>
					<li class='nav-item'><a
						href='./resources/docs/Paul_Curtis_Resume_2020.docx'
						class='nav-link border border-light rounded' target='_blank'>View
							Resume</a></li>
					<li class='nav-item'><a
						href='https://www.linkedin.com/in/paulcphilly/'
						class='nav-link border border-light rounded' target='_blank'> <i
							class='fab fa-linkedin'></i>LinkedIn
					</a></li>
					<li class='nav-item'><a href='https://github.com/pcurtis5688/'
						style='float: right;' class='nav-link border border-light rounded'
						target='_blank'> <i class='fab fa-github mr-2'></i>GitHub
							Repositories
					</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!----------------------------------- CONTENT ---------------------------------->
<div class='view full-page-intro'
	style='text-align: center; background-image: url("resources/img/78.jpg"); background-repeat: no-repeat; background-size: cover;'>
	<div
		class='mask rgba-black-light d-flex justify-content-center align-items-center'>
		<!-- Content -->
		<div class='container'>
			<!--Grid row-->
			<div class='row wow fadeIn text-center'>
				<!--Grid column-->
				<div id='pageContent' class='white-text text-center'
					style='width: 100%;'>
					<?php require_once './view/homecontent.php'; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!------------------FOOTER ----------------------------->
<footer class='page-footer text-center font-small wow fadeIn'>
	<div>
		<a class='btn btn-outline-white'
			href='resources/docs/Paul_Curtis_Resume_2020.docx' target='_blank'
			role='button'>Download CV / Resume<i class='fas fa-download ml-2'></i>
		</a>
	</div>
	<div class='pb-4'>
		<a href='https://linkedin.com/in/paulcphilly/' target='_blank'> <img
			alt='LI' src='resources/img/pcdus-li-icon-sm.png' height='64px'
			width='64px' />
		</a> <a href='https://github.com/pcurtis5688' target='_blank'> <img
			alt='Git' src='resources/img/GitHub-Mark-64px.png' />
		</a>
	</div>
	<div class='footer-copyright py-3'>Paul Curtis || pcurtis5688@gmail.com
		|| 412-716-0747 || 484-442-0052</div>
</footer>
<script type='text/javascript' src='./resources/js/jquery-3.4.1.min.js'></script>
<script type='text/javascript' src='./resources/js/popper.min.js'></script>
<script type='text/javascript' src='./resources/js/bootstrap.min.js'></script>
<script type='text/javascript' src='./resources/js/mdb.min.js'></script>
<script type='text/javascript' src='./resources/pcdusscript/pcdus-js.js'></script>
<!-- var navHomeLink = null; -->
<!-- var navContactLink = null; -->

<!-- function itemClicked(name){ -->
<!-- 	navHomeLink = document.getElementById('navHomeLink'); -->
<!-- 	navContactLink = document.getElementById('navContactLink'); -->
<!-- 	removeAllActiveContentPanes(); -->
<!-- 	if(name == 'home'){ -->
<!-- 		loadHomeContent(); -->
<!-- 	} else if (name == 'contact'){ -->
<!-- 		loadContactPage(); -->
<!-- 	} -->
<!-- 	var menu = document.getElementById('navbarSupportedContent').classList.add('hide'); -->
<!-- } -->

<!-- function removeAllActiveContentPanes(){ -->
<!-- 	navHomeLink.classList.remove('active'); -->
<!-- 	navContactLink.classList.remove('active'); -->
<!-- } -->
<!-- function loadHomeContent(){ -->
<!-- 	navHomeLink.classList.add('active'); -->
<!-- 	$('#pageContent').load('./view/homecontent.php'); -->
<!-- } -->

<!-- function loadContactPage(){ -->
<!-- 	navContactLink.classList.add('active'); -->
<!-- 	$('#pageContent').load('./view/contactform.php'); -->
<!-- } </script> -->
</body>
</html>