// Toggle display lanuage
function toggle_language(language) {
    document.querySelectorAll('.lang').forEach(el => {
        el.style.display = 'none';
    });
    document.querySelectorAll('.lang-' + language).forEach(el => {
        el.style.display = 'block';
    });
}

// Detect lanuage on page load and set dark mode
function init_page(){
    let user_lang = navigator.language || navigator.userLanguage;
    user_lang = user_lang.startsWith('es') ? 'es' : 'en' // Defaults to English
    document.getElementById('language-select').value = user_lang;
    toggle_language(user_lang);
    toggle_dark_mode();
}

// Event listener for language selection change
document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('language-select').addEventListener('change', function(){
        toggle_language(this.value);
    });
    init_page();
});
