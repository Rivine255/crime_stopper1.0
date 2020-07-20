function submit() {
    var message = document.getElementById("message").value;
    if (message == "") {
        document.getElementById("wait").innerHTML = "Please Your Message is Mandatory";
    }
}

window.onscroll = function() {
    //sticky();
};

function sticky() {
    var navbar = document.getElementsByTagName("nav");
    var sticky = navbar.offsetTop;
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}
