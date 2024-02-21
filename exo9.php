<?php
// Demander à l'utilisateur de saisir une chaîne de caractères
echo "Entrez une chaîne de caractères : ";
// Lecture de la chaine
fscanf(STDIN, "%s", $chaine);

// Initialiser un tableau pour stocker la fréquence de chaque caractère
$frequences = array();

// Parcourir la chaîne de caractères pour calculer les fréquences
for ($i = 0; $i < strlen($chaine); $i++) {
    $caractere = $chaine[$i];
    
    // Vérifier si le caractère existe déjà dans le tableau des fréquences
    if (array_key_exists($caractere, $frequences)) {
        // Si oui, incrémenter sa fréquence
        $frequences[$caractere]++;
    } else {
        // Sinon, initialiser sa fréquence à 1
        $frequences[$caractere] = 1;
    }
}

// Afficher les fréquences de chaque caractère
echo "Fréquences des caractères dans la chaîne :\n";
foreach ($frequences as $caractere => $frequence) {
    echo "'$caractere' : $frequence fois\n";
}
?>
