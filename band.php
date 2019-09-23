<?php

$totaal = 0;
$albums = array(
    "Citizen of Glass kost" => 4.5,
    "Night kost" => 9,
    "New Eyes kost" => 5,
    "Strange Trails kost" => 10
);

foreach ($albums as $prijs) {
    $naam = array_search($prijs, $albums);
    $totaal += $prijs;
    echo $naam . " kost €" . $prijs . PHP_EOL;
}

echo "Het totaalbedrag van alle albums is €" . $totaal . PHP_EOL;
$gemiddeldePrijs = $totaal / count($albums);
echo "De gemiddelde prijs van alle albums is €" . $gemiddeldePrijs  . PHP_EOL;
?>