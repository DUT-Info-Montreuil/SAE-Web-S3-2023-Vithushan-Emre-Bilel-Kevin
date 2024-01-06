

function toggleText(textId) {
    var text = document.getElementById(textId);
    if (text.style.display === "none") {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}