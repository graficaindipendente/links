function dark_theme() {
    document.body.classList.add('dark');
    localStorage.theme = 'dark';

}

function light_theme() {
    document.body.classList.remove('dark');
    localStorage.theme = 'light';
}

function toggle_theme() {
    if (localStorage.theme === 'dark') {
        light_theme();
    } else {
        dark_theme();
    }
}
