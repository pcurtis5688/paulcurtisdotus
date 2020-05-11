/**
 * TODO: complete this documentation here.
 */

function navBarItemClicked(name) {
	var navHomeLink = document.getElementById('navHomeLink');
	var navContactLink = document.getElementById('navContactLink');
	var navPortfolioLink = document.getElementById('navPortfolioLink');

	for (var i = 0; i < navHomeLink.classList.length; i++) {
		if (navHomeLink.classList[i] == 'active') {
			navHomeLink.classList.remove('active');
		}
	}
	for (var i = 0; i < navContactLink.classList.length; i++) {
		if (navContactLink.classList[i] == 'active') {
			navContactLink.classList.remove('active');
		}
	}
	for (var i = 0; i < navPortfolioLink.classList.length; i++) {
		if (navPortfolioLink.classList[i] == 'active') {
			navPortfolioLink.classList.remove('active');
		}
	}

	if (name == 'home') {
		this.navHomeLink.classList.add('active');
		$('#pageContent').load('./view/homecontent.php');
	} else if (name == 'contact') {
		this.navContactLink.classList.add('active');
		$('#pageContent').load('./view/contactform.php');
	} else if (name == 'portfolio') {
		this.navPortfolioLink.classList.add('active');
		$('#pageContent').load('./view/portfoliocontent.php');
	}
	// COLLAPSE THE NAVIGATION LAST 
	$('.collapse').collapse('hide');
}