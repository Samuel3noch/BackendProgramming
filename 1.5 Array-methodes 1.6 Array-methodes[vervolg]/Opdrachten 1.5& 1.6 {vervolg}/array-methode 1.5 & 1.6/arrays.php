<?php 
// Ik heb losse arrays toegevoegd aan de opdracht.
echo "<br>---- Opgave 5"; 
$producten = [];
$producten[0] = "Boeken";
$producten[1] = "CD's";
$producten[2] = "Smartphones";
$producten[3] = "DVD's";

//Met deze methode print ik snel de inhoud van een array uit.
echo "<br>";
echo "<br>---- Opgave 6: print_r() ";
print_r($producten);

// Deze methode gebruik je om snel de inhoud van een variabele of array te printen.
echo "<br>";
echo "<br>---- Opgave 7: var_dump(): ";
var_dump($producten);

// Deze methode ( unset() ) verwijderd een array-element.
echo "<br>";
echo "<br>---- Opgave 8: ";
unset($producten[2]);
print_r($producten);

// Met de methode array_key_exists() controleer je of een bepaalde array-key (index) binnen een array bestaat.
// De return-waarde is boolean (true/false).
echo "<br>";
echo "<br>---- Opgave 9: ";
$gevonden = array_key_exists(1, $producten);
echo "key 1 gevonden?: ".$gevonden;

// De methode ( in_array() ) controleert of een bepaalde array-element binnen een array bestaat.
// De return-waarde is boolean (true/false).
echo "<br>";
echo "<br>---- Opgave 10: ";
$gevonden = in_array('Boeken', $producten);
echo "boeken gevonden?: " . $gevonden;

// De methode array_search() controleert of een bepaalde array-element binnen een array bestaat.
// De return-waarde is de element-index.
// Het verschil tussen de methodes in_array() en array_search() is de return-waarde.u
echo "<br>";
echo "<br>---- Opgave 11: ";
$index = array_search("CD's", $producten);
echo "De index van CD's is: " . $index;

// let op dat je de array-elementen het zelfde schrijft als de eerste x anders komen ze er verkeerd of niet uitgeprint.


// Met de methode array_push() kunnen we een of meer nieuwe elementen aan het einde van een array toevoegen.
echo "<br>";
echo "<br>---- Opgave 12: ";
array_push($producten, "Laptops", "Tablets");
print_r($producten);

// de methode array_pop() verwijdert en retourneert het laatste array-element.
echo "<br>";
echo "<br>---- Opgave 13: ";
$laatsteElement = array_pop($producten);
echo $laatsteElement . " is verwijderd: ";
Print_r($producten);

// De methode array_shift() verwijdert en retourneert het eerste array-element.
echo "<br>";
echo "<br>---- Opgave 14: ";
$eersteElement = array_shift($producten);
echo $eersteElement.' is verwijderd: ';
print_r($producten);

// Met de methode array_unshift() kunnen we een of meer element aan het begin van een array toevoegen.
echo "<br>";
echo "<br>---- Opgave15: ";
array_unshift($producten, "TV's", "Steroe's");
echo "TV's en Stereo's toegevoegd: ";
print_r($producten);


echo "<br> <br> 1.6 Array-Methodes[vervolg] ";

// Met de methode array_rand() kunnen we een of meer random (willekeurige) elementen uit een array kiezen.

echo "<br>";
echo "<br>---- Opgave 16: ";
$random_keys = array_rand($producten, 2);
echo "<br />Eerste random product: ". $producten[$random_keys[0]];
echo "<br />Tweede random product: ". $producten[$random_keys[1]];

// Met de methode array_walk() 
// kunnen we de elementen van een array doorlopen om ieder element te kunnen verwerken.

echo "<br>";
function printArray($item, $key){
 echo "<br>$key" . ": " . "<i> $item </i>";
}
echo "<br>---- Opgave 17: Producten-array doorlopen: ";
array_walk($producten, 'printArray');

//Met de methode implode() kunnen we een array naar een string (tekst) converteren.

echo "<br>";
$getallen = ["nul", "een", "twee", "drie", "vier", "vijf"];
$tools = ["boek", "pen", "laptop", "potlood"];
$tekst1 = implode("*", $getallen);

echo "<br>---- Opgave 18: Array getallen in tekst1 converteren: $tekst1";
$tekst2 = implode("|", $tools);

echo "<br>";
echo "<br>---- Opgave 18: Array tools in tekst2 converteren: $tekst2";

// Met de methode explode() kunnen we een string naar een array converteren.
echo "<br>";
echo "<br>---- Opgave 19: Tekst1 in array1 converteren:";
$array1 = explode("*", $tekst1);
array_walk($array1, 'printArray');

echo "<br>";
echo "<br>---- Opgave 19: Tekst2 in array2 converteren:";
$array2 = explode("|", $tekst2);
array_walk($array2, "printarray");

// tweedimensionale arrays.
// dit is een manier om arrays te bundelen aan elkaar. oftewel in een array verschillende arrays in te zetten.
// met tweedimensionale arrays kunnen we complexere datastucturen construeren.

echo "<br>";
$boeken = array (
 array ("Titel" => "Stoner", "Auteur" => "John Williams", "Genre" => "Fictie", "Prijs" => "19.99"),
 array ("Titel" => "De Cirkel", "Auteur" => "Dave Eggers", "Genre" =>"Fictie", "Prijs" => "22.50"),
 array ("Titel" => "Rayuela", "Auteur" => "Julio Cortazar", "Genre" => "Fictie", "Prijs" => "25.50")
);
echo "<br>---- OPgave 20: Boeken-array aangemaakt. ";

// Met de methode array_walk_recursive() kunnen we de elementen van een tweedimensionale array doorlopen.

echo "<br>";
echo "<br>---- Opgave 21: Boeken recursief doorlopen:";
array_walk_recursive($boeken, "printArray");

// Met de methode array_merge() kunnen we twee arrays samenvoegen.

echo "<br>";
$nieuweboeken = array (
 array ("Titel" => "Spijt", "Auteur" => "Carry Slee", "Genre" => "Fictie", "Prijs" => "12.99"),
 array ("Titel" => "Debat", "Auteur" => "Saskia Noort", "Genre" => "Fictie", "Prijs" => "33.50"),
);
echo "<br>---- Opgave 22: Twee arrays samenvoegen:";
$boeken = array_merge($boeken, $nieuweboeken);
array_walk_recursive($boeken, "printArray");

// Met de methode array_slice() kunnen we een deel van een array kopieren.

echo "<br>";
echo "<br>---- Opgave 23: Array-elementen kopieren:";
$oudeboeken = array_slice($boeken, 0, 2);
array_walk_recursive($oudeboeken, "printArray");

?>