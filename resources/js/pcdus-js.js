/**
 * TODO: complete this documentation here.
 */
var navHomeLink = null;
var navContactLink = null;
var navPortfolioLink = null;

function navBarItemClicked(name) {
	navHomeLink = document.getElementById('navHomeLink');
	navContactLink = document.getElementById('navContactLink');
	navPortfolioLink = document.getElementById('navPortfolioLink');

	removeAllActiveContentPanes();

	if (name == 'home') {
		loadHomeContent();
	} else if (name == 'contact') {
		loadContactPage();
	} else if (name == 'portfolio') {
		loadPortfolioPage();
	}

	var menu = document.getElementById('navbarSupportedContent').classList
			.add('hide');
}

function removeAllActiveContentPanes() {
	navHomeLink.classList.remove('active');
	navContactLink.classList.remove('active');
	navPortfolioLink.classList.remove('active');
}

function loadHomeContent() {
	navHomeLink.classList.add('active');
	$('#pageContent').load('./view/homecontent.php');
}

function loadContactPage() {
	navContactLink.classList.add('active');
	$('#pageContent').load('./view/contactform.php');
}

function loadPortfolioPage() {
	navPortfolioLink.classList.add('active');
	$('#pageContent').load('./view/portfoliocontent.php');
}