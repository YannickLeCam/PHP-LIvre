<?php
    require_once "Class/Auteur.php";
    require_once "Class/Livre.php";
?>

<h1>EXERCICE</h1>
<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs. 
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. Un auteur comporte un nom et un prénom. 
Une méthode toString() sera appréciée dans chacune de vos classes. 
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie 
complète d’un auteur </p>

<?php
$a1 = new Auteur("Bernard","Weber");
$a2 = new Auteur("Danny","Boon");

$l1 = new Livre("Le papillon des étoiles",640,new DateTime("2006-03-05"),24,$a1);
$l1 = new Livre("La troisième Humanité",1700,new DateTime("2012-03-05"),51,$a1);
$l1 = new Livre("Nos voisins les humains",532,new DateTime("2004-03-05"),14,$a1);
$l1 = new Livre("Les fourmies",821,new DateTime("2005-01-01"),16,$a1);
$l1 = new Livre("Les fourmies 2",780,new DateTime("2006-01-01"),18,$a1);
$l1 = new Livre("L'encyclopédie des fourmies ",915,new DateTime("2012-03-05"),19,$a1);

$a1->printBibliographie();

?>