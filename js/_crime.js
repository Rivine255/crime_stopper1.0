function submit() {
    var message = document.getElementById("message").value;
    if (message == "") {
        document.getElementById("wait").innerHTML = "Please Your Message is Mandatory";
    }
}


window.onscroll = function () {
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
////////////////////////////////////////////////////////////////////////
function check_size() {
    var file = document.getElementById("file");
    var wait = document.getElementById("wait");
    var numb = file.files[0].size / 1024 / 1024;
    numb = numb.toFixed(2);
    if (numb > 25) {
        document.getElementById("btn").disabled = true;
        wait.innerHTML = 'to big, maximum is 25MB. You file size is: ' + numb + ' MB';
        file.style.borderColor = "red";
    } else {
        document.getElementById("btn").disabled = false;
        file.style.borderColor = "#ccc";
        wait.innerHTML = "";
        return true;
    }
}
///////////////////////////////////////////////////////
var modal = document.getElementById("myModal");
var img = document.getElementById("image");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
};

var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
};