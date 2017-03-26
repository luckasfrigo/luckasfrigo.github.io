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

var preload = document.getElementById('preload');
preload.parentNode.removeChild(preload);

var contactForm = document.getElementById('contato-email');
contactForm.onsubmit = function(e) {
    e.preventDefault();
    var http = new XMLHttpRequest();
    var url = "https://script.google.com/macros/s/AKfycbzxkESJNbGI2EKUp7x2hHsSBVKwIS0bpy0nqACvLomr4RvHTkk/exec";
    var params = [];
    for (var i in contactForm.getElementsByTagName('input')) {
        var input = contactForm.getElementsByTagName('input')[i];
        params.push(input.name + "=" + input.value);
    }
    params = params.join('&');
    http.open("POST", url, true);

    //Send the proper header information along with the request
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4) {
            if (http.status == 200) {
                alert("Agradecemos seu interesse! O Bem Legal ainda não está na ativa, mas assim que começarmos a operar você será o primeiro a saber.");
            } else {
                alert("Não foi possível enviar a mensagem. Recarregue a página para tentar novamente.");
            }
        }
    }
    http.send(params);
}
