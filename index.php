<?php


spl_autoload_register(function ($name){                     // een naamloze functie om code zo kort mogelijk te houden
    $path = "${name}.php";
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $path);  // vervangen / en \ voor elke besturingssystemen.                                                                                      
    //die($name);                                             // stopt die prog
                                                            // om de zaken van PostAbstract te kunnen gebruiken
                                                            // .php omdat zo onder bestand noemt
});                                                         // string omzetten naar het pad die k wil inladen

$kunstwerk0 = new Kunstwerken\KunstwerkenAbstract();
$kunstwerk1 = new Kunstwerken\Beeldhouwerk();         // een instantie maken van de classe Kunstwerken\Beelhouwerk();.. \ moet een backslash zien hier in all BS,
    $kunstwerk1->setIGewicht(5);
$kunstwerk2 = new Kunstwerken\Boek();
    //$kunstwerk2 -> setIAantalBladzijden(5);
$kunstwerk3 = new Kunstwerken\Film();
$kunstwerk4 = new Kunstwerken\Foto();
$kunstwerk5 = new Kunstwerken\Gedicht();
    //$kunstwerk5 -> setIAantalwoorden(50);
$kunstwerk6 = new Kunstwerken\Lied();
    //$kunstwerk6 -> setIDuur(6);
$kunstwerk7 = new Kunstwerken\Schilderij();
    //$kunstwerk7 ->setIAfbeelding("hi there");
$kunstwerk8 = new Kunstwerken\Vaas();



// Interface afbeelding
//echo var_dump($kunstwerk7);

// Interface aantalBladzijden
//echo var_dump($kunstwerk2);

// interface aantalwoorden
//echo var_dump($kunstwerk5);

// interface gewicht
//echo var_dump($kunstwerk1);

//interface duur
echo var_dump($kunstwerk6);