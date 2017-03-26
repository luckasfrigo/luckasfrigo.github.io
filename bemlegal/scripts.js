var contactForm = document.getElementById('contact');
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
            alert("Agradecemos seu interesse! O Bem Legal ainda não está na ativa, mas assim que começarmos a operar você será o primeiro a saber.");
        }
    }
    http.send(params);
}
