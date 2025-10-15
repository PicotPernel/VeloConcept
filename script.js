function afficherProduits() {
    var select = document.getElementById("detaillants");
    var index = select.value;
    var produits = tabDetaillants[index]["produit"];
    var texte = '<table><tr><th>Référence</th><th>Nom</th><th>Quantité</th></tr>';

    for (var i = 0; i < produits.length; i++) 
    {
        texte += '<tr>' +
        '<td>' + produits[i]["reference"] + '</td>' +
        '<td>' + produits[i]["nom"] + '</td>' +
        '<td>' + produits[i]["qte"] + '</td>' +
        '</tr>';
    }

    texte += '</table>';
    document.getElementById("divTableau").innerHTML = texte;
}
