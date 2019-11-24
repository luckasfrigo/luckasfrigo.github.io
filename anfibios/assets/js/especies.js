const navA = document.querySelectorAll('nav li a');
for (var i = 0; i < navA.length; i++) {
    if (navA[i].getAttribute("href").indexOf("#") != -1) {
        navA[i].onclick = function (event) {
            const href = event.currentTarget.getAttribute("href");
            document.querySelector(href).scrollIntoView({behavior: "smooth", block: "center"});
            event.preventDefault();
            event.stopPropagation();
        }
    }
}