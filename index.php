<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
</head>
<body>
  <h1>test jeu sorcier</h1>

<?php

echo "creation du heros";
echo "<br>";

// maniere $_GET etape 01
require_once 'Wizard.php';

$w1 = new Wizard("W01", 1500, 10, "wiwi");
$nameW1 = $w1->getName();
$healthW1 = $w1->getHealth();
$powerW1 = $w1->getPower();
$surnomW1 = $w1->getSurnom();

// fin maniere $_GET etape 01

echo "nom: ".$nameW1;
echo "<br>";
echo "health: ".$healthW1;
echo "<br>";
echo "Power: ".$powerW1;
echo "<br>";
echo "Surnom: ".$surnomW1;
echo "<br>";

echo "nveau Surnom que l'on parametre: ";
$w1->setSurnom("nono");
$w1->setSurnom("toto");

// maniere $_GET etape 02
// fonctionne
echo "<br>";
echo "methode S_GET";
echo "<br>";
$jsonW1 = json_encode($w1);
echo $jsonW1;
echo "<br>";
echo "<a href='meeting.php?w1=".urlencode($jsonW1)."'>Notre heros marche</a>";
// fin maniere $_GET etape 02

//
echo "<br>";
echo "<br>";
echo "<br>";

?>

    </body>
    </html>
