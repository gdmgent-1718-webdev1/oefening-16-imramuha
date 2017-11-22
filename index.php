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
$kunstwerk2 = new Kunstwerken\Boek();
$kunstwerk3 = new Kunstwerken\Film();
$kunstwerk4 = new Kunstwerken\Foto();
$kunstwerk5 = new Kunstwerken\Gedicht();
$kunstwerk6 = new Kunstwerken\Lied();
$kunstwerk7 = new Kunstwerken\Schilderij();
$kunstwerk8 = new Kunstwerken\Vaas();


echo var_dump($kunstwerk0, $kunstwerk1, $kunstwerk2, $kunstwerk3, $kunstwerk4, $kunstwerk5,  $kunstwerk6, $kunstwerk7, $kunstwerk8);