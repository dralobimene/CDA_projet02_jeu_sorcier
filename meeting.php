<?php

// maniere $_GET etape 01
require_once 'Wizard.php';
require_once 'ApprenticeWizard.php';

echo "page meeting.php";
echo "<br>";

//====================================================================================
// maniere $_GET etape 03
// fonctionne    
// Get the form data
// nom du perso principal
$jsonData = $_GET['w1'];
$w1 = json_decode($jsonData, true);

    // check if the conversion was successful
    if ($w1 === null && json_last_error() !== JSON_ERROR_NONE) {
        echo "Error decoding the JSON object";
    } else {
        // access the properties of the array
        // echo "Name: " . $w1['name'] . "<br>";
        // echo "health: " . $w1['health'] . "<br>";
        // echo "power: " . $w1['power'] . "<br>";
    }
// fin maniere $_GET etape 03

//===================================================================================
echo "<br>";
// instanciation du $w1 a partir des elts du tableau associatif
// issu du json_decode
$w1bis = new Wizard($w1['name'],
                    $w1['health'],
                    $w1['power'],
                    $w1['surnom']);

$nameW1bis = $w1bis->getName();
$healthW1bis = $w1bis->getHealth();
$powerW1bis = $w1bis->getPower();
$surnomW1 = $w1bis->getSurnom();

echo "<br>";
echo "les caracteristiques de notre heros:";
echo "<br>";
echo "nom: ".$nameW1bis;
echo "<br>";
echo "health: ".$healthW1bis;
echo "<br>";
echo "Power: ".$powerW1bis;
echo "<br>";
echo "Notre heros rencontre 1 autre Wizard, 1 combat a mort entre les 2 belligérants débute.";
echo "<br>";
echo "les caractéristiques de l'adversaire: ";

$ap1 = new Wizard("AP1",
  1500,
  10,
  "surnomDeLAdversaire");

$nameAP1 = $ap1->getName();
$healthAP1 = $ap1->getHealth();
$powerAP1 = $ap1->getPower();
$surnomAP1 = $ap1->getSurnom();
// fin maniere $_GET etape 01


echo "<br>";
echo "nom: ".$nameAP1;
echo "<br>";
echo "health: ".$healthAP1;
echo "<br>";
echo "power: ".$powerAP1;
echo "<br>";

$w1bis->fight($ap1);

echo "<br>";
echo "les caracteristiques de notre heros:";

$nameW1bis = $w1bis->getName();
$healthW1bis = $w1bis->getHealth();
$powerW1bis = $w1bis->getPower();

echo "<br>";
echo "nom: ".$nameW1bis;
echo "<br>";
echo "health: ".$healthW1bis;
echo "<br>";
echo "Power: ".$powerW1bis;
echo "<br>";

echo "les caractéristiques de l'adversaire: ";

$nameAP1 = $ap1->getName();
$healthAP1 = $ap1->getHealth();
$powerAP1 = $ap1->getPower();

echo "<br>";
echo "nom: ".$nameAP1;
echo "<br>";
echo "health: ".$healthAP1;
echo "<br>";
echo "power: ".$powerAP1;
echo "<br>";
 
//===================================================================================

