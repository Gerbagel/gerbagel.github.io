var pass = document.getElementById("pass").value;
var input = document.getElementById("pass");
input.addEventListener("keyup", function(event){
	event.preventDefault();
	if (event.keyCode === 13) {
		document.getElementById("submit").click;
	}
});
function login() {
	if (document.getElementById("pass").value === "gayisok") {
		window.location.href = "test/";
	}
	else {
		window.location.href = "error/";
	}
}