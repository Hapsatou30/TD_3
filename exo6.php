<?php
// un programme  qui retourne tous les éléments qui n'ont pas de doublons dans un tableau.
// Demander à l'utilisateur la taille du tableau
echo "Entrez la taille du tableau : ";
fscanf(STDIN, "%d", $taille);

// Saisir les éléments du tableau
$tab = array();
for ($i = 0; $i < $taille; $i++) {
    echo "Entrez l'élément ", $i + 1, " : ";
    fscanf(STDIN, "%d", $tab[$i]);
}

// Initialiser le tableau de présence à FAUX pour tous les éléments
$estPresent = array();
for ($i = 0; $i < $taille; $i++) {
    $estPresent[$i] = 0;
}

// Vérifier les doublons et construire le tableauSansDoublons
echo "Le tableau sans doublons est : ";
for ($i = 0; $i < $taille; $i++) {
    if ($estPresent[$i] == 0) {
        echo $tab[$i] . "\n";
        $estPresent[$i] = 1; // Marquer l'élément comme rencontré
        
        // Comparer avec les éléments suivants pour marquer les doublons
        for ($j = $i + 1; $j < $taille; $j++) {
            if ($tab[$i] == $tab[$j]) {
                $estPresent[$j] = 1; // Marquer le doublon
            }
        }
    }
}
?>
