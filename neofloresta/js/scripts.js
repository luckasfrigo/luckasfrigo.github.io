var mobileMenu     = document.getElementById('mobile_menu');
var mobileMenuList = document.getElementById('mobile_menu_list');
var isMenuOpen     = false;

mobileMenu.onclick = function() {
    if (isMenuOpen) {
        mobileMenuList.attributes.class.nodeValue = '';
    } else {
        mobileMenuList.attributes.class.nodeValue = 'open';
    }
    isMenuOpen = !isMenuOpen;
}

mobileMenuList.onclick = function() {
    mobileMenuList.attributes.class.nodeValue = '';
    isMenuOpen = false;
}