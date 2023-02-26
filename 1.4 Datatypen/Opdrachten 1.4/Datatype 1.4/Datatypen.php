<?php 

// Ik heb variabellen gemaakt van de "naam, straat en Woonplaats".
$naam = "Carl";
$straat = "Kuislaan 111";
$woonplaats = "Utrecht";

// ik ga nu alle variabellen met de gegevens samenvoegen.
$naw = $naam . ", " . $straat . ", " . $woonplaats;

// nu ga ik de variabellen laten weergeven. 
echo "Gegevens: $naw"; 

// ik heb hier een echo gemaakt met een lap tekst.

// dit is de snelste manier om een hoop tekst weer te geven zonder er telkens echo achter te schrijven.
echo <<<TEKST
 <br> 
 <br>Salarisspecificatie van $naam: 2000 euro
 <br>Maand November
 <br>Jaar: 2020
TEKST;

// ik heb hier variabellen gemaakt dat ik ga uitberekene op de 2e decimaal.
$dollars = 999.99;
$koers = 1.2;
$euros = $dollars * $koers;

// ik ga de variabellen nu berekenen op 2 decimalen.

//hier beneden heb ik almijn tekst in een "Heredoc-syntaxis" gedaan.
echo <<<SOM
<br>
<br>Bedrag in euro's is: 
SOM;

//hier beneden reken ik het uit en rond ik af op twee decimalen.
printf("%.2f", $euros);

?> 
