<?php

$codesource = file_get_contents('https://www.myfrenchstartup.com/fr/startups-investisseur/90165/123-venture');
echo $codesource;
preg_match_all('|<td style="padding-right: 3px;">(.*)</td>|', $codesource, $tableau_resultat);
echo "<pre>";
print_r($tableau_resultat[0]);
echo "</pre>";


$list = array (
array( "Adresse", "Telephone", "Site_Web", "Contact" ) ,
array( "", "", "", ""),
);
$fp = fopen("export.csv", "w");
foreach($list as $fields):
    fputcsv($fp, $fields);
endforeach;
fclose($fp);

?>