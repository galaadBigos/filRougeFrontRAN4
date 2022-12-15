<?php
require_once 'joueur.class.php';

$joueurs =
[
    new Joueur("Alexandre", "Oukidja", "19/07/1988", "Gardien", "../assets/img/aoukidjaportrait.png"),
    new Joueur("Marc-Aurèle", "Caillard", "12/05/1994", "Gardien", "../assets/img/caillardportrait.png"),
    new Joueur("Mathieu", "Udol", "20/03/1996", "Défenseur", "../assets/img/mudolportrait.png"),
    new Joueur("Boubakar", "Kouyaté", "15/014/1997", "Défenseur", "../assets/img/kkouyateportrait.png"),
    new Joueur("Fali", "Candé", "24/01/1998", "Défenseur", "../assets/img/candeportrait.png"),
    new Joueur("Ismaël", "Traoré", "18/08/1986", "Défenseur", "../assets/img/itraoreportrait.png"),
    new Joueur("Kévin", "N'Doram", "22/01/1996", "Milieu", "../assets/img/kndoramportrait.png"),
    new Joueur("Youssef", "Maziz", "24/06/1998", "Milieu", "../assets/img/ymazizportrait.png"),
    new Joueur("Cheick", "Sabaly", "04/03/1999", "Milieu", "../assets/img/ctsabalyportrait.png"),
    new Joueur("Habib", "Maïga", "01/01/1996", "Milieu", "../assets/img/imaigaportrait.png"),
    new Joueur("Danley", "Jean-Jacques", "20/05/2002", "Milieu", "../assets/img/djeanjacquesportrait.png"),
    new Joueur("Ablie", "Jallow", "14/11/1998", "Milieu", "../assets/img/ajallowportrait.png"),
    new Joueur("Ibrahima", "Niane", "11/03/1999", "Attaquant", "../assets/img/inianeportrait.png"),
    new Joueur("Georges", "Mikautadze", "31/10/2000", "Attaquant", "../assets/img/gmikautadzeportrait.png"),
    new Joueur("Anthony", "Masuba", "06/12/2000", "Attaquant"),
    new Joueur("Lamine", "Gueye", "13/03/1998", "Attaquant", "../assets/img/gueyeportrait.png"),
];

foreach($joueurs as $joueur)
{
    echo "  <div class=\"joueur-presentation\">";
    echo "      <ul>";
    echo "          <li><img src=\"{$joueur->photo}\" alt=\"joueur test\"></li>";
    echo "          <li><span id=\"joueur-id\">Prénom :</span> {$joueur->prenom}</li>";
    echo "          <li><span id=\"joueur-id\">Nom :</span> {$joueur->nom}</li>";
    echo "          <li><span id=\"joueur-id\">Date de naissance :</span> {$joueur->dateDeNaissance}</li>";
    echo "          <li><span id=\"joueur-id\">Poste :</span> {$joueur->poste}</li>";
    echo "      </ul>";
    echo "  </div>";
}

?>

