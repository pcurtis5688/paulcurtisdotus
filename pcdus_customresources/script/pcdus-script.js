/**
 * TODO: DOCUMENTATION FOR PLENTY OF PLACES
 */
function navBarItemClicked(name) {
    let navHomeLink = document.getElementById('navHomeLink');
    let navContactLink = document.getElementById('navContactLink');
    let navPortfolioLink = document.getElementById('navPortfolioLink');

    for (let i = 0; i < navHomeLink.classList.length; i++) {
        if (navHomeLink.classList[i] === 'active') {
            navHomeLink.classList.remove('active');
        }
    }
    for (let i = 0; i < navContactLink.classList.length; i++) {
        if (navContactLink.classList[i] === 'active') {
            navContactLink.classList.remove('active');
        }
    }
    for (let i = 0; i < navPortfolioLink.classList.length; i++) {
        if (navPortfolioLink.classList[i] === 'active') {
            navPortfolioLink.classList.remove('active');
        }
    }

    if (name === 'home') {
        navHomeLink.classList.add('active');
        $('#pageContent').load('./viewfragments/content_contact_form.php');
    } else if (name === 'contact') {
        navContactLink.classList.add('active');
        //pageContent.load('./viewfragments/content_contact_form.php');
        $('#pageContent').load('./viewfragments/content_contact_form.php');
    } else if (name === 'portfolio') {
        navPortfolioLink.classList.add('active');
        $('#pageContent').load('./viewfragments/content_portfolio.php');
    }
    // COLLAPSE THE NAVIGATION LAST
    let collapseElems = new Array(document.getElementsByClassName('collapse'));
    collapseElems.collapse('hide');
    //  $('.collapse').collapse('hide');
}