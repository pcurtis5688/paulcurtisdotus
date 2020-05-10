/**
 * TODO: complete this documentation here.
 */
var navHomeLink = null;
var navContactLink = null;

function navBarItemClicked(name) {
	navHomeLink = document.getElementById('navHomeLink');
	navContactLink = document.getElementById('navContactLink');
	removeAllActiveContentPanes();
	if (name == 'home') {
		loadHomeContent();
	} else if (name == 'contact') {
		loadContactPage();
	}
	var menu = document.getElementById('navbarSupportedContent').classList
			.add('hide');
}

function removeAllActiveContentPanes() {
	navHomeLink.classList.remove('active');
	navContactLink.classList.remove('active');
}
function loadHomeContent() {
	navHomeLink.classList.add('active');
	$('#pageContent').load('./view/homecontent.php');
}

function loadContactPage() {
	navContactLink.classList.add('active');
	$('#pageContent').load('./view/contactform.php');
}