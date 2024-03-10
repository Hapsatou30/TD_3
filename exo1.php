<?php
// un programme qui calcule le produit de tous les éléments d'un tableau d'entiers.
// déclaration des Variables
$tailleTableau = 0;
$tab =[];
$produit = 1;

// Saisie de la taille du tableau
echo "Saisir la taille du tableau : ";
fscanf(STDIN, "%d", $tailleTableau);

// Remplissage du tableau
for ($i = 1; $i <= $tailleTableau; $i++) {
    echo "Entrez l'élément ", $i , " du tableau : ";
    fscanf(STDIN ,"%d", $tab[$i]);
}

// Calcul du produit des éléments du tableau
for ($i = 1; $i <= $tailleTableau; $i++) {
    $produit *= $tab[$i];
}

// Affichage du produit des éléments du tableau
echo "Le produit de tous les éléments du tableau est : ", $produit;
?>
