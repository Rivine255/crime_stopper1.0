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

function validate_progress() {
    var select = document.getElementById("select");
    var xx = select.value;
    var yy = document.getElementById("wait");
    if (xx == "NOT YET") {
        yy.innerHTML = "Please, Select the further steps That takes place";
        select.style.borderColor = "red";
    } else {
        yy.innerHTML = "";
        select.style.borderColor = "#ccc";
        return true;
    }
}
