function selectShow(elm, e) {
    var $menu = elm.nextElementSibling;
    e.stopPropagation();
    if (elm.classList.contains('open')) {
        elm.classList.remove('open');
        $menu.classList.remove('show');
    } else {
        elm.classList.add('open');
        $menu.classList.add('show');
    }
    
}
function selectHide() {
    var $menu = document.querySelector('.selectList');
    var $menuBtn = document.querySelector('.selectBtn');
    var selectHideFunc = function () {
        $menuBtn.classList.remove('open');
        $menu.classList.remove('show');
    };
    document.body.addEventListener('click', selectHideFunc, false);
}