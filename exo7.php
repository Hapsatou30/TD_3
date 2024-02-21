<?php
//un programme qui prend un tableau de chaînes de caractères et crée une nouvelle chaîne en concaténant tous les éléments.
// Saisir la taille du tab1
echo "Saisir la taille du tab1 : ";
fscanf(STDIN, "%d", $taille);

// Saisie des valeurs pour tab1
$tab1 = array();
for ($i = 0; $i < $taille; $i++) {
    echo "chaine ", $i + 1, " : ";
    fscanf(STDIN, "%s", $tab1[$i]);
}

// Initialisation de la chaîne concaténée
$chaineConcatenee = "";

// Concaténation des chaînes du tableau
for ($i = 0; $i < $taille; $i++) {
    $chaineCourante = $tab1[$i];
    // Ajout d'un espace à la fin de chaque chaîne courante (sauf pour la dernière)
    if ($i < $taille - 1) {
        $chaineCourante .= " ";
    }
    $chaineConcatenee .= $chaineCourante;
}


// Affichage de la chaîne concaténée
echo "La chaîne concaténée est : ", $chaineConcatenee, "\n";
?>
