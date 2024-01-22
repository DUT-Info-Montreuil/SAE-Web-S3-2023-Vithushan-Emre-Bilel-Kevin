function toggleLiens() {
   event.preventDefault();
    // Récupérer l'élément div
   
    var divLiens = document.getElementById('liensContainer');
   // alert(divLiens);

    // Basculer la visibilité des liens
    if (divLiens.style.display === 'flex') {
        divLiens.style.display = 'none'; // Cacher les liens
    } else {
        divLiens.style.display = 'flex'; // Afficher les liens
        divLiens.style.backgroundColor = 'white';
    }
}
