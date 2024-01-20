

function toggleText(textId) {
    var text = document.getElementById(textId);
    if (text.style.display === "none") {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    } 
}



function toggleLiens() {
    event.preventDefault();
    // Récupérer l'élément div
    var divLiens = document.getElementById('liensContainer');

    // Basculer la visibilité des liens
    if (divLiens.style.display === 'flex') {
        divLiens.style.display = 'none'; // Cacher les liens
    } else {
        divLiens.style.display = 'flex'; // Afficher les liens
        divLiens.style.backgroundColor = 'white';
    }
}