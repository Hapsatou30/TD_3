<?php
//e un programme qui compte le nombre de voyelles dans une chaîne de caractères présente dans un tableau.
// Déclaration des variables
$chaine = "";
$lettre = "";
$i = 0;
$nbr = 0;

//demander à l'utilisateur d'entrer la pchaine
echo "Entrer votre chaine : ";

// Lecture de la chaine
fscanf(STDIN, "%s", $chaine);

// Parcours de la chaine
for ($i = 0; $i < strlen($chaine); $i++) {
    // Extraction de chaque lettre de la chaine
    $lettre = substr($chaine, $i, 1);
    
    // Vérification si la lettre est une voyelle
    if ($lettre == 'A' || $lettre == 'O' || $lettre == 'I' || $lettre == 'U' || $lettre == 'E' || $lettre == 'a' || $lettre == 'o' || $lettre == 'i' || $lettre == 'u' || $lettre == 'e' || $lettre == 'Y' || $lettre == 'y') {
        // Incrémentation du compteur de voyelles
        $nbr++ ;
    }
}

// Affichage du nombre de voyelles si au moins une voyelle a été trouvée
if ($nbr > 0) {
    echo $nbr;
}
?>
