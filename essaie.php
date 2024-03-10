<?php
$nbr=0;
echo"entrez votre chaine";
fscanf(STDIN ,"%s", $chaine);
for($i=1; $i< strlen($chaine); $i++)
{
    $lettre= substr($chaine,$i,1);
    if($lettre =='A' || $lettre=='O' || $lettre =='I' || $lettre=='U' || $lettre =='E' || $lettre=='a' || $lettre =='o' || $lettre=='i' || $lettre =='u' || $lettre=='e' || $lettre =='Y' || $lettre=='y' )
    {
        $nbr= $nbr + 1;
    }

}
?>
