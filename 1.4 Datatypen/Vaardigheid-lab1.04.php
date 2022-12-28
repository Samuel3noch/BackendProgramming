<h3>php lab 1.4</h3> 
<?php
$naam = "karim";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";
echo "<table border='1'>
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
         <td>$databases</td><td>----------</td>
     </tr> 
 <tbody> 
     <tfoot>
         <tr> 
             <td colspan='6'>Groep gemiddeld</td>
             <td>----------</td>
         </tr>
     </tfoot>
 </tbody>";

//hier boven heb ik een tabel gemaakt voor in php.
//in deze tabel staat het gemiddelde van 1 leerling. met de naam Karim.
?>