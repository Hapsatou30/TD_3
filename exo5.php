<?php
// un programme qui trouve les éléments communs à deux tableaux d'entiers.
// Saisir la taille du tab1
echo "Saisir la taille du tab1 : ";
fscanf(STDIN, "%d", $taille);

// Saisie des valeurs pour tab1
$tab1 = array();
for ($i = 0; $i < $taille; $i++) {
    echo "Valeur ", $i + 1, " : ";
    fscanf(STDIN, "%d", $tab1[$i]);
}

// Saisir la taille du tab2
echo "Saisir la taille du tab2 : ";
fscanf(STDIN, "%d", $taille2);

// Saisie des valeurs pour tab2
$tab2 = array();
for ($i = 0; $i < $taille2; $i++) {
    echo "Valeur ", $i + 1, " : ";
    fscanf(STDIN, "%d", $tab2[$i]);
}

// Affichage des éléments communs
echo "Les elements communs sont : ";
for ($i = 0; $i < $taille; $i++) {
    for ($j = 0; $j < $taille2; $j++) {
        if ($tab1[$i] == $tab2[$j]) {
            echo $tab1[$i] . "\n";
        }
    }
}
?>
