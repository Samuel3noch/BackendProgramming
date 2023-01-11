<?php 
// Ik heb losse arrays toegevoegd aan de opdracht.
echo "<br>---- Opgave 5"; 
$producten = [];
$producten[0] = "Boeken";
$producten[1] = "CD's";
$producten[2] = "Smartphones";
$producten[3] = "DVD's";

//Met deze methode print ik snel de inhoud van een array uit.
echo "<br>---- Opgave 6: print_r() ";
print_r($producten);

// Deze methode gebruik je om snel de inhoud van een variabele of array te printen.
echo "<br>---- Opgave 7: var_dump(): ";
var_dump($producten);

// Deze methode ( unset() ) verwijderd een array-element.
echo "<br>---- Opgave 8: ";
unset($producten[2]);
print_r($producten);

// Met de methode array_key_exists() controleer je of een bepaalde array-key (index) binnen een array bestaat.
// De return-waarde is boolean (true/false).
echo "<br>---- Opgave 9: ";
$gevonden = array_key_exists(1, $producten);
echo "key 1 gevonden?: ".$gevonden;

// De methode ( in_array() ) controleert of een bepaalde array-element binnen een array bestaat.
// De return-waarde is boolean (true/false).
echo "<br>---- Opgave 10: ";
$gevonden = in_array('Boeken', $producten);
echo "boeken gevonden?: " . $gevonden;

// De methode array_search() controleert of een bepaalde array-element binnen een array bestaat.
// De return-waarde is de element-index.
// Het verschil tussen de methodes in_array() en array_search() is de return-waarde.
echo "<br>---- Opgave 11: ";
$index = array_search("CD's", $producten);
echo "De index van CD's is: " . $index;

// let op dat je de array-elementen het zelfde schrijft als de eerste x anders komen ze er verkeerd of niet uitgeprint.


// Met de methode array_push() kunnen we een of meer nieuwe elementen aan het einde van een array toevoegen.
echo "<br>---- Opgave 12: ";
array_push($producten, "Laptops", "Tablets");
print_r($producten);

// de methode array_pop() verwijdert en retourneert het laatste array-element.
echo "<br>---- Opgave 13: ";
$laatsteElement = array_pop($producten);
echo $laatsteElement . " is verwijderd: ";
Print_r($producten);

// De methode array_shift() verwijdert en retourneert het eerste array-element.
echo "<br>---- Opgave 14: ";
$eersteElement = array_shift($producten);
echo $eersteElement.' verwijderd: ';
print_r($producten);


?>