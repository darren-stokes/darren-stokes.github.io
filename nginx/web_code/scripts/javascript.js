// Toggle display lanuage
function toggle_language(language) {
    document.querySelectorAll('.lang').forEach(el => {
        el.style.display = 'none';
    });
    document.querySelectorAll('.lang-' + language).forEach(el => {
        el.style.display = 'block';
    });
}

// Detect language on page load
function set_language(){
    let user_lang = navigator.language || navigator.userLanguage;
    user_lang = user_lang.startsWith('es') ? 'es' : 'en' // Defaults to English
    document.getElementById('language-select').value = user_lang;
    toggle_language(user_lang);
}

// Toggle dark mode
function toggle_dark_mode(){
    var is_checked = document.body.classList.toggle('dark-mode')
    // Save to localStorage
    localStorage.setItem('dark_mode', is_checked ? 'enabled': 'disabled')
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

// Hide cookie notice
function hide_cookie_notice(){
    document.getElementById('cookie-notice').style.display = 'none';
}

// On page load, set the language and check the local storage whether dark mode is set or not
document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('language-select').addEventListener('change', function(){
        toggle_language(this.value);
    });
    set_language();
    apply_dark_mode();
});