/* ********************************************
    auteur: Sonja Rouwhorst
    datum: 2016-10-19
   ******************************************** */

document.addEventListener("DOMContentLoaded", function () {
    var el_list = document.querySelectorAll('.cmda-harmonica-element header');

    function closeAllElements() {
        for (var i=0; i<el_list.length; i++) {
            el_list[i].classList.remove('close-icon');
        }
    }

    function toggleHarmonicaElement() {
        if (this.classList.contains('close-icon')) {
            this.classList.remove('close-icon');
        } else {
            closeAllElements();
            this.classList.add('close-icon');
        }
    }

    var el_list = document.querySelectorAll('.cmda-harmonica-element header');
    for (var i=0; i<el_list.length; i++) {
        el_list[i].onclick = toggleHarmonicaElement;
    }
});
