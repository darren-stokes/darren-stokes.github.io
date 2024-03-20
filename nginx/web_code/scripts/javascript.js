// Get what browser the user is using
navigator.what_browser = (() => {
    const { userAgent } = navigator
    let browser_info = userAgent.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || []
    let temp
  
    if (/trident/i.test(browser_info[1])) {
        temp = /\brv[ :]+(\d+)/g.exec(userAgent) || []
        return `IE ${temp[1] || ''}`
    }
  
    if (browser_info[1] === 'Chrome') {
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
  
    browser_info = browser_info[2] ? [ browser_info[1], browser_info[2] ] : [ navigator.appName, navigator.appVersion, '-?' ]
    temp = userAgent.match(/version\/(\d+)/i)
    return browser_info[0]
  })()

// Add event listener to the language selector
function setup_language(){
    document.getElementById('language-select').addEventListener('change', function(){
        toggle_language(this.value);
    });
}

// Toggle display lanuage
function toggle_language(language) {
    document.querySelectorAll('.lang').forEach(el => {
        el.style.display = 'none';
    });
    document.querySelectorAll('.lang-' + language).forEach(el => {
        el.style.display = 'inline-block';
    });

    // Save users preference
    localStorage.setItem('user_language', language);

    // Collapse mobile menu on selecting language
    collapse_menu()
}

// Detect language on page load
function set_language(){
    // Check if user has already set the language
    let saved_language = localStorage.getItem('user_language')

    // use the users chosen language and if not set, use the browsers language
    let language = saved_language ? saved_language:  navigator.language || navigator.userLanguage;

    // Defaults to English, if any other language than Spanish is detected
    language = language.startsWith('es') ? 'es' : 'en'
    document.getElementById('language-select').value = language;
    toggle_language(language);
}

// Some browsers can't handle the flag unicode characters in the language selection, so only display them where suitable
function hide_language_flags(){
    if (navigator.what_browser === 'Firefox'){
        var language_select = document.getElementById('language-select');

        // Loop over and replace the corresponding text to include the flag
        for(var i = 0; i < language_select.options.length; i++){
            var option = language_select.options[i];

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
function toggle_dark_mode(){
    var is_checked = document.body.classList.toggle('dark-mode');

    // Save to localStorage
    localStorage.setItem('dark_mode', is_checked ? 'enabled': 'disabled')

    // Collapse mobile menu on changing mode
    collapse_menu()
}

function apply_dark_mode(){
    // Enable dark mode if set in local storage
    if (localStorage.getItem('dark_mode') === 'enabled'){
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
function hide_cookie_notice(){
    document.getElementById('cookie-notice').style.display = 'none';
    localStorage.setItem('cookie_consent', 'accepted');
}

// Hide cookie notice if already accepted
function check_cookie_consent(){
    if (localStorage.getItem('cookie_consent') === 'accepted'){
        document.getElementById('cookie-notice').style.display = 'none';
    }
}

//// Mobile device related
// Menu
function toggle_mobile_menu() {
    // Toggle the appearance of the menu whether it's clicked or not.
    var nav_icon = document.querySelector(".mobile-nav-icon");
    nav_icon.classList.toggle("active");

    // Display/hide the menu contents when the menu is selected/unselected.
    var nav_bar_right = document.querySelector(".navbar-right");
    nav_bar_right.classList.toggle("active");

    if (nav_bar_right.style.display === 'none' || nav_bar_right.style.display === '') {
        nav_bar_right.style.display = 'inline-block';
    }
    else {
        nav_bar_right.style.display = 'none';
    }
}

// Collapses the mobile menu if the language or dark mode is changed through the menu
function collapse_menu(){
    var nav_icon = document.querySelector(".mobile-nav-icon");
    
    // First see if the menu is active
    if (nav_icon.classList.contains("active")){
        toggle_mobile_menu()
    }
}

// Configure the Banner anchors to account for the banners offset
function banner_offset(){
    document.querySelectorAll('.lang-navbar a').forEach(link=>{
        link.addEventListener('click', function(e){
            // Prevent the default anchor action
            e.preventDefault();

            const target_id = this.getAttribute('href').substring(1);
            const target_element = document.getElementById(target_id);

            if(target_element){
                scroll_to_adjusted_target(target_element);
            }
        });
    });
}

// Get the hash part of URL and pass it to the scroll to function
function handle_hash_change(){
    window.addEventListener('hashchange', function() {
        const target_element = this.document.getElementById(window.location.hash.substring(1));
        if (target_element){
            scroll_to_adjusted_target(target_element);
        }
    });
}

function scroll_to_adjusted_target(element){
    // get the current height of the banner
    const header_offset = get_dynamic_header_height();
    const element_position = element.getBoundingClientRect().top;
    const offset_position = element_position + window.scrollY - header_offset;

    window.scrollTo({
        top: offset_position,
        behavior: "smooth"
    });
}

function get_dynamic_header_height(){
    const header = document.querySelector('.navbar.banner');
    console.log("Header "+header.offsetHeight)
    return header.offsetHeight;
}

function adjust_scroll_position_for_anchors(){
    if(window.location.hash){
        const target_element = document.getElementById(window.location.hash.substring(1));
        if (target_element){
            setTimeout(() => scroll_to_adjusted_target(target_element), 0);
        }
    }
}

// On page load, do some preflight checks
document.addEventListener('DOMContentLoaded', () => {
    setup_language();

    // Set up self links to account for the sticky banner
    banner_offset();
    handle_hash_change();
    adjust_scroll_position_for_anchors();

    // Check local storage for language and dark mode preferences, apply changes where necessary
    set_language();
    hide_language_flags();
    apply_dark_mode();

    //Check cookie consent and remove popup if accepted
    check_cookie_consent();
});