function removePass() {
    var elem = document.getElementById("script");
    elem.parentNode.removeChild(elem);
    return false;
}

var pass = prompt("Password pls?");
if (pass == "gay") {
    document.write("<head><meta charset='utf-8'><link rel='stylesheet' href='style.css' type='text/css'></head><body><div id='mcont'><div id='sidebar'><div class='butt'><a href='https://gerbagel.github.io/siteiguess/'>OG crab site</a></div></div><div id='header'><h1>You fucking gay ass nigger</h1></div><div id='container'><iframe src='https://www.youtube.com/embed/videoseries?list=PLh4-tBTM9tSpMwurJ14IGRXqfWeI-fqUW&autoplay=1' allow='autoplay; encrypted media' allowfullscreen /></div></div></body>");
    removePass();
} else {
    document.write("<h1>Wrong</h1>");
    removePass();
}
