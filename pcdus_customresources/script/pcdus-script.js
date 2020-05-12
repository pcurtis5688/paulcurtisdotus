/**
 * TODO: DOCUMENTATION FOR PLENTY OF PLACES
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
        $('#pageContent').load('./viewfragments/content_home.php');
    } else if (name == 'contact') {
        this.navContactLink.classList.add('active');
        $('#pageContent').load('./viewfragments/content_contact_form.php');
    } else if (name == 'portfolio') {
        this.navPortfolioLink.classList.add('active');
        $('#pageContent').load('./viewfragments/content_portfolio.php');
    }
    // COLLAPSE THE NAVIGATION LAST
    $('.collapse').collapse('hide');
}