// JavaScript, um den Toggle-Button bei 1024px zu aktivieren
window.addEventListener('DOMContentLoaded', function() {
    if (window.matchMedia('(max-width: 1024px)').matches) {
        // Menü anzeigen
        var menu = document.getElementById('menu-toggle');
        menu.style.display = 'block';
    }
});
