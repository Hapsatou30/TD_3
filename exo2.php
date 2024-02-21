
<?php
// une fonction qui supprime les éléments en double d'un tableau et renvoie le tableau sans doublons.
//déclaration des variables
$tableauSansDoublons = array();
$doublonTrouve = array();

// Demander à l'utilisateur la taille du tableau
echo "Entrez la taille du tableau : ";
fscanf(STDIN, "%d", $taille);

// Saisir les éléments du tableau
for ($i = 0; $i < $taille; $i++) {
    echo "Entrez l'élément ", $i + 1, " : ";
    fscanf(STDIN, "%d", $tab[$i]);
}

// Initialiser le tableau des doublons trouvés
for ($i = 0; $i < $taille; $i++) {
    $doublonTrouve[$i] = 0;
}

// Vérifier les doublons et construire le tableau sans doublons
for ($i = 0; $i < $taille; $i++) {
    if ($doublonTrouve[$i] == 0) {
        $tableauSansDoublons[] = $tab[$i];
        for ($j = 0; $j < $taille; $j++) {
            if ($tab[$i] == $tab[$j]) {
                $doublonTrouve[$j] = 1;
            }
        }
    }
}

// Afficher le tableau sans doublons
echo "Tableau sans doublons : ";
foreach ($tableauSansDoublons as $element) {
    echo $element . " ";
}
?>

