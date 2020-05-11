<?php /* HEADER NAV BAR PHP FRAGMENT ///*/ ?>
<nav
	class="navbar fixed-top navbar-expand-lg 
			navbar-dark scrolling-navbar textalign">
	<div class="container">
		<a href="index.php"><img
			src="./external_resources/img/pcdus_graphic.png"
			alt="www.PaulCurtis.us" /></a>

		<!-- TOGGLE DROPDOWN NAV BUTTON -->
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="true"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- NAVIGATION HEADER BAR (LEFT & RIGHT) -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li id="navHomeLink" class="nav-item active"><a class="nav-link"
						href="#" onclick="navBarItemClicked('home');">Home<span
							class="sr-only">(current)</span>
					</a></li>
					<li id="navContactLink" class="nav-item"><a class="nav-link"
						href="#" onclick="navBarItemClicked('contact');">Contact</a></li>
					<li id="navPortfolioLink" class="nav-item"><a class="nav-link"
						href="#" onclick="navBarItemClicked('portfolio');">Portfolio</a></li>
					<li id="navBlogLink" class="nav-item"><a class="nav-link" href="#"
						onclick="navBarItemClicked('blog');">Blog</a></li>
				</ul>
				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item"><a
						href="./resources/docs/Paul_Curtis_Resume_2020.docx"
						class="nav-link border border-light rounded" target="_blank">View
							Resume</a></li>
					<li class="nav-item"><a
						href="https://www.linkedin.com/in/paulcphilly/"
						class="nav-link border border-light rounded" target="_blank"> <i
							class="fab fa-linkedin"></i>LinkedIn
					</a></li>
					<li class="nav-item"><a href="https://github.com/pcurtis5688/"
						style="float: right;" class="nav-link border border-light rounded"
						target="_blank"> <i class="fab fa-github mr-2"></i>GitHub
							Repositories
					</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
</html>