document.addEventListener('DOMContentLoaded', function () {
    var abrirButton = document.getElementById('abrir');
    var cerrarButton = document.getElementById('cerrar');
    var navCustom = document.getElementById('nav-custom');
    var overlay = document.getElementById('overlay');

    abrirButton.addEventListener('click', function () {
        navCustom.classList.add('open');
        overlay.classList.add('show');
    });

    cerrarButton.addEventListener('click', function () {
        navCustom.classList.remove('open');
        overlay.classList.remove('show');
    });

    overlay.addEventListener('click', function () {
        navCustom.classList.remove('open');
        overlay.classList.remove('show');
    });
});
