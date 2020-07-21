function submit() {
    var message = document.getElementById("message").value;
    if (message == "") {
        document.getElementById("wait").innerHTML = "Please Your Message is Mandatory";
    }
}

window.onscroll = function() {
    makeSticky();
};

function makeSticky() {
    var navbar = document.getElementsByTagName("nav")[0];
    if (window.pageYOffset >= 150) {
        navbar.classList.add("sticky");
    } else {
       navbar.classList.remove("sticky");
    }
}
