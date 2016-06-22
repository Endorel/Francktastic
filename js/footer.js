

document.getElementById('title').addEventListener('mouseover', dropdownContent);
document.getElementById('title').addEventListener('mouseout', hideContent);
document.getElementById('title').addEventListener('touchend', showContent);

function dropdownContent () {
	document.getElementById('content').style.display = "block";
}

function hideContent () {
	document.getElementById('content').style.display = "none";
}

function showContent () {

	var display = document.getElementById('content').style.display;
	if (display == "none") {
	document.getElementById('content').style.display = "block";
	} else {
		document.getElementById('content').style.display = "none";
	}
}