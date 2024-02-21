<?php
//une fonction qui calcule la médiane d'un tableau d'entiers.
// Demander à l'utilisateur la taille du tableau
echo "Entrez la taille du tableau : ";
fscanf(STDIN, "%d", $tailleTableau);

// Saisie des éléments du tableau
$tableau = array();
for ($i = 0; $i < $tailleTableau; $i++) {
    echo "Entrez l'élément ", $i + 1, " : ";
    fscanf(STDIN, "%d", $tableau[$i]);
}

// Trier le tableau (tri à bulles)
for ($i = 0; $i < $tailleTableau; $i++) {
    for ($j = $i + 1; $j < $tailleTableau; $j++) {
        if ($tableau[$i] > $tableau[$j]) {
            $temp = $tableau[$i];
            $tableau[$i] = $tableau[$j];
            $tableau[$j] = $temp;
        }
    }
}

// Calcul de la médiane
// Calcul de la médiane
if ($tailleTableau % 2 == 0) {
    $mediane = ($tableau[$tailleTableau / 2 - 1] + $tableau[$tailleTableau / 2]) / 2;
} else {
    $mediane = $tableau[($tailleTableau - 1) / 2];
}


// Affichage de la médiane
echo "La médiane est : ", $mediane, "\n";
?>
