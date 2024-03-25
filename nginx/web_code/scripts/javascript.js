// Get what browser the user is using
navigator.whatBrowser = (() => {
    const { userAgent } = navigator
    let browserInfo = userAgent.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || []
    let temp
  
    if (/trident/i.test(browserInfo[1])) {
        temp = /\brv[ :]+(\d+)/g.exec(userAgent) || []
        return `IE ${temp[1] || ''}`
    }
  
    if (browserInfo[1] === 'Chrome') {
        // Check if Opera adn return if it is
        temp = userAgent.match(/\b(OPR|Edge)\/(\d+)/)
        if (temp !== null) {
            return temp[1].replace('OPR', 'Opera')
        }
        
        // Check if Edge and return if it is
        temp = userAgent.match(/\b(Edg)\/(\d+)/)
        if (temp !== null){
            return temp[1].replace('Edg', 'Edge')
        }
    }
  
    browserInfo = browserInfo[2] ? [ browserInfo[1], browserInfo[2] ] : [ navigator.appName, navigator.appVersion, '-?' ]
    temp = userAgent.match(/version\/(\d+)/i)
    return browserInfo[0]
  })()

// Add event listener to the language selector
function setupLanguage(){
    document.getElementById('language-select').addEventListener('change', function(){
        toggleLanguage(this.value);
    });
}

// Toggle display lanuage
function toggleLanguage(language) {
    document.querySelectorAll('.lang').forEach(el => {
        el.style.display = 'none';
    });
    document.querySelectorAll('.lang-' + language).forEach(el => {
        el.style.display = 'inline-block';
    });

    // Save users preference
    localStorage.setItem('userLanguage', language);

    // Collapse mobile menu on selecting language
    collapseMenu()
}

// Detect language on page load
function setLanguage(){
    // Check if user has already set the language
    let savedLanguage = localStorage.getItem('userLanguage')

    // use the users chosen language and if not set, use the browsers language
    let language = savedLanguage ? savedLanguage:  navigator.language || navigator.userLanguage;

    // Defaults to English, if any other language than Spanish is detected
    language = language.startsWith('es') ? 'es' : 'en'
    document.getElementById('language-select').value = language;
    toggleLanguage(language);
}

// Some browsers can't handle the flag unicode characters in the language selection, so only display them where suitable
function hideLanguageFlags(){
    if (navigator.whatBrowser === 'Firefox'){
        var languageSelect = document.getElementById('language-select');

        // Loop over and replace the corresponding text to include the flag
        for(var i = 0; i < languageSelect.options.length; i++){
            var option = languageSelect.options[i];

            if (option.value === 'en'){
                option.text = 'English \u{1F1EC}\u{1F1E7}';
            }
            else if (option.value === 'es'){
                option.text = 'Español \u{1F1EA}\u{1F1F8}';
            }
        }
    }
}

// Toggle dark mode
function toggleDarkMode(){
    var isChecked = document.body.classList.toggle('dark-mode');

    // Save to localStorage
    localStorage.setItem('darkMode', isChecked ? 'enabled': 'disabled')

    // Collapse mobile menu on changing mode
    collapseMenu()
}

function applyDarkMode(){
    // Enable dark mode if set in local storage
    if (localStorage.getItem('darkMode') === 'enabled'){
        document.body.classList.add('dark-mode');
        document.querySelector('.switch input[type="checkbox"]').checked = true;
    }

    // if not set, remove the CSS
    else {
        document.body.classList.remove('dark-mode');
        document.querySelector('.switch input[type="checkbox"]').checked = false;
    }
}

// Hide cookie notice if accepted by user and store that choice in local storage
function hideCookieNotice(){
    document.getElementById('cookie-notice').style.display = 'none';
    localStorage.setItem('cookieConsent', 'accepted');
}

// Hide cookie notice if already accepted
function checkCookieConsent(){
    if (localStorage.getItem('cookieConsent') === 'accepted'){
        document.getElementById('cookie-notice').style.display = 'none';
    }
}

//// Mobile device related
// Menu
function toggleMobileMenu() {
    // Toggle the appearance of the menu whether it's clicked or not.
    var navIcon = document.querySelector(".mobile-nav-icon");
    navIcon.classList.toggle("active");

    // Display/hide the menu contents when the menu is selected/unselected.
    var navBarRight = document.querySelector(".navbar-right");
    navBarRight.classList.toggle("active");

    if (navBarRight.style.display === 'none' || navBarRight.style.display === '') {
        navBarRight.style.display = 'inline-block';
    }
    else {
        navBarRight.style.display = 'none';
    }
}

// Collapses the mobile menu if the language or dark mode is changed through the menu
function collapseMenu(){
    var navIcon = document.querySelector(".mobile-nav-icon");
    
    // First see if the menu is active
    if (navIcon.classList.contains("active")){
        toggleMobileMenu()
    }
}

// Configure the Banner anchors to account for the banners offset
function bannerOffset(){
    document.querySelectorAll('.lang-navbar a').forEach(link=>{
        link.addEventListener('click', function(e){
            // Prevent the default anchor action
            e.preventDefault();

            const TARGETID = this.getAttribute('href').substring(1);
            const TARGETELEMENT = document.getElementById(TARGETID);

            if(TARGETELEMENT){
                scrollToAdjustedTarget(TARGETELEMENT);
            }
        });
    });
}

// Get the hash part of URL and pass it to the scroll to function
function handleHashChange(){
    window.addEventListener('hashchange', function() {
        const TARGETELEMENT = this.document.getElementById(window.location.hash.substring(1));
        if (TARGETELEMENT){
            scrollToAdjustedTarget(TARGETELEMENT);
        }
    });
}

function scrollToAdjustedTarget(element){
    // get the current height of the banner
    const HEADEROFFSET = getDynamicHeaderHeight();
    const ELEMENTPOSITION = element.getBoundingClientRect().top;
    const OFFSETPOSITION = ELEMENTPOSITION + window.scrollY - HEADEROFFSET;

    window.scrollTo({
        top: OFFSETPOSITION,
        behavior: "smooth"
    });
}

function getDynamicHeaderHeight(){
    const HEADER = document.querySelector('.navbar.banner');
    return HEADER.offsetHeight;
}

function adjustScrollPositionForAnchors(){
    if(window.location.hash){
        const TARGETELEMENT = document.getElementById(window.location.hash.substring(1));
        if (TARGETELEMENT){
            setTimeout(() => scrollToAdjustedTarget(TARGETELEMENT), 0);
        }
    }
}

function monthCalculator(){
    document.querySelectorAll('.experience-dates').forEach(function(span){
        // remove the pipe and space
        var dateString = span.textContent.trim().split("|")[1];

        // get dates
        var dates = dateString.split(" - ");

        var startDate = new Date(dates[0] + " 1");

        // Calculate the length of time using todays date if end date is "Present"
        if(dates[1] === "Present"){
            var endDate = new Date(Date.now());
        }
        // Else use the end date supplied
        else{
            var endDate = new Date(dates[1] + " 1");
        }

        // get the years and months
        var months = (endDate.getFullYear() - startDate.getFullYear()) * 12;
        months -= startDate.getMonth();
        months += endDate.getMonth();

        var years = Math.floor(months / 12);
        months = months % 12 + 1;

        // Build the output and add it to the spans
        var timeString = (years > 0 ? years + " years " : "") + (months > 0 ? months + " months" : "");
        span.textContent += " (" + timeString.trim() + ")";
    });
}

// On page load, do some preflight checks
document.addEventListener('DOMContentLoaded', () => {
    setupLanguage();

    // Set up self links to account for the sticky banner
    bannerOffset();
    handleHashChange();
    adjustScrollPositionForAnchors();

    // Check local storage for language and dark mode preferences, apply changes where necessary
    setLanguage();
    hideLanguageFlags();
    applyDarkMode();

    //Check cookie consent and remove popup if accepted
    checkCookieConsent();

    monthCalculator();
});