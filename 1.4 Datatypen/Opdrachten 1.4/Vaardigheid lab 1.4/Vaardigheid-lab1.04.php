<h3>php lab 1.4</h3> 
<?php

//ik maak hier een lijst voor Karim.
$naam = "karim";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";

// hier tel ik het gemiddelde op.
$optellen = $nederlands + $engels + $rekenen + $programmeren + $databases ;
$gemmideld = $optellen / 5 ;

//ik maak hier een lijst voor Sophie.
$naam1 = "Sophie";
$nederlands1 = "8.9";
$engels1 = "8.7";
$rekenen1 = "9.7";
$programmeren1 = "9.5";
$databases1 = "9.2";

// hier maak een som om alle verhoudingen te krijgen.
$optellen2 = $nederlands1 + $engels1 + $rekenen1 + $programmeren1 + $databases1 ;
$gemmideld2 = $optellen2 / 5 ;
$gemmideld2 = round($gemmideld2, 2) ; 

//hier heb ik alle gemiddelde bij elkaar gezet voor een geheel.
//dit heb ik gedaan met een variabel.
$bijelkaar = $gemmideld + $gemmideld2 ;
$GroepG = $bijelkaar / 2 ;
$GroepG = round($GroepG, 1) ;



//uitleg!

// echo <table border = '1'> </table> = De oorzaak dat er een table onstaat.
// <thead> </thead> = De Head van de table.
// 

// <tr> </tr> = binnen deze tag, zet je informatie.

echo "<table border= '1'>
 <caption>
     <strong>Rapport</strong> 
 </caption>

 <thead>
     <tr>
         <th>Naam</th><th>Nederlands</th><th>Engels</th>
         <th>Rekenen</th><th>Programmeren</th>
         <th>Databases</th>
         <th>Gemiddeld</th>
     </tr> 
 </thead> 

 <tbody> 
     <tr> 
         <td>$naam</td><td>$nederlands</td><td>$engels</td>
         <td>$rekenen</td><td>$programmeren</td>
         <td>$databases</td><td>$gemmideld</td>
     </tr> 
     <tr> 
         <td>$naam1</td><td>$nederlands1</td><td>$engels1</td>
         <td>$rekenen1</td><td>$programmeren1</td>
         <td>$databases1</td><td>$gemmideld2</td>
     </tr> 
 </tbody>

     <tfoot>
         <tr> 
             <td colspan='6'>Groep gemiddeld</td>
             <td>$GroepG</td>
         </tr>
     </tfoot>

 </table>";

//hier boven heb ik een tabel gemaakt voor in php.
//in deze tabel staat het gemiddelde van 2 leerlingen. met de naam Karim&Sophie.
?>