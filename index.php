<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>|| PaulCurtis.US - Home ||</title>
<!-- Font Awesome -->
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="resources/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="resources/css/mdb.min.css" rel="stylesheet">
<!-- Your custom styles (optional) -->
<link href="resources/css/style.min.css" rel="stylesheet">
<link href="resources/css/pcdus-style.css" rel="stylesheet">
</head>

<!-- Navbar -->
<nav
	class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar textalign">
	<div class="container">
		<a href="index.php"> <img src="resources/img/pcdus_graphic.png"
			alt="PaulCurtis.us" />
		</a>
		<!-- Collapse -->
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="true"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- NAVIGATION -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li id="navHomeLink" class="nav-item active"><a class="nav-link"
						href="#" onclick="itemClicked('home');">Home <span class="sr-only">(current)</span>
					</a></li>
					<li id="navContactLink" class="nav-item"><a class="nav-link"
						href="#" onclick="itemClicked('contact');">Contact Information</a></li>
					<li class="nav-item"><a class="nav-link"
						href="resources/docs/ResumePaulCurtisMarch2020_INDEED.pdf"
						target="_blank">View Resume</a></li>
				</ul>

				<!-- Right -->
				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item"><a
						href="https://www.linkedin.com/in/paulcphilly/"
						class="nav-link border border-light rounded" target="_blank"> <i
							class="fab fa-linkedin"></i>My LinkedIn
					</a></li>&nbsp;&nbsp;
					<li class="nav-item"><a href="https://github.com/pcurtis5688/"
						class="nav-link border border-light rounded" target="_blank"> <i
							class="fab fa-github mr-2"></i>My GitHub Repos
					</a></li>
				</ul>
			</div>
		</div>

</nav>
<!----------------------------------- CONTENT ---------------------------------->
<div class="view full-page-intro"
	style="max-height: 75%; background-image: url('resources/img/78.jpg'); background-repeat: no-repeat; background-size: cover;">
	<div
		class="mask rgba-black-light d-flex justify-content-center align-items-center">
		<!-- Content -->
		<div class="container" style="margin-top: 0;">
			<!--Grid row-->
			<div class="row wow fadeIn">
				<!--Grid column-->
				<div id="pageContent" class="white-text text-center text-md-left">
					<h1>March 2020</h1>
					<hr class='hr-light'>
					Greetings and welcome. I am hoping to keep this up-to-date with
					some of my current endeavors and I am always open to discussing new
					opportunities.<br> <br>I'm available any time at my email
					(pcurtis5688@gmail.com) or at my cell (412-716-0747). Thanks for
					reading and have a great day! -Paul
					<hr class='hr-light'>
				</div>
			</div>
		</div>
	</div>
</div>

<!------------------FOOTER ----------------------------->
<footer class="page-footer text-center font-small wow fadeIn">
	<div class="pt-4">
		<a class="btn btn-outline-white"
			href="resources/docs/ResumePaulCurtisMarch2020_INDEED.pdf"
			target="_blank" role="button">Download CV / Resume<i
			class="fas fa-download ml-2"></i>
		</a>
	</div>
	<hr class="my-4">
	<div class="pb-4">
		<a href="https://linkedin.com/in/paulcphilly/" target="_blank"> <img
			alt="LI" src="resources/img/pcdus-li-icon-sm.png" height="64px"
			width="64px" />
		</a> <a href="https://github.com/pcurtis5688" target="_blank"> <img
			alt="Git" src="resources/img/GitHub-Mark-64px.png" />
		</a>
	</div>
	<div class="footer-copyright py-3">Paul Curtis || pcurtis5688@gmail.com
		|| 412-716-0747</div>
</footer>

<script type="text/javascript" src="resources/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="resources/js/popper.min.js"></script>
<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
<script type="text/javascript" src="resources/js/mdb.min.js"></script>
<script type="text/javascript">
function itemClicked(name){
	var navHomeLink = document.getElementById("navHomeLink");
	var navContactLink = document.getElementById("navContactLink");
	navHomeLink.classList.remove("active");
	navContactLink.classList.remove("active");
	if(name == 'home'){
		navHomeLink.classList.add("active");
		var homeContent = document.getElementById("pageContent");
		homeContent.innerHTML = "<h1>March 2020</h1><hr class='hr-light'>Greetings and welcome. I am hoping to keep this up-to-date with some of my current endeavors and I am always open to discussing new opportunities.<br> <br>I'm available any time at my email (pcurtis5688@gmail.com) or at my cell (412-716-0747). Thanks for reading and have a great day! -Paul<hr class='hr-light'>";
		} else if (name == 'contact'){
		navContactLink.classList.add("active");
		var contactContent = document.getElementById("pageContent");
		contactContent.innerHTML = "<h1 style='padding-top:50px'>Paul Curtis</h1><h2>pcurtis5688@gmail.com</h2><h2>412-716-0747</h2></div>";
	}
}
</script>
</body>
</html>