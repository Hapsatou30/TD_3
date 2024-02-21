<?php
// un programme pour faire une rotation à droite d'un tableau d'un certain nombre de positions.
// Demander à l'utilisateur la taille du tableau 
echo "Entrez la taille du tableau : ";
fscanf(STDIN, "%d", $taille);

// Saisie des éléments
$tab = array();
for ($i = 0; $i < $taille; $i++) {
    echo "Entrez l'élément ", $i + 1, " : ";
    fscanf(STDIN, "%d", $tab[$i]);
}

// Demander le nombre de positions pour la rotation à droite
echo "Entrez le nombre de positions pour la rotation à droite : ";
fscanf(STDIN, "%d", $positions);

// Effectuer la rotation à droite
for ($i = 0; $i < $positions; $i++) {
    // Stocker le dernier élément du tableau
    $temp = $tab[$taille - 1];
    
    // Déplacer les éléments vers la droite
    for ($j = $taille - 1; $j >= 1; $j--) {
        $tab[$j] = $tab[$j - 1];
    }
    
    // Placer l'élément stocké au début du tableau
    $tab[0] = $temp;
}

// Afficher le tableau après la rotation
echo "Tableau après la rotation à droite : ";
for ($i = 0; $i < $taille; $i++) {
    echo $tab[$i] . " ";
}
?>
