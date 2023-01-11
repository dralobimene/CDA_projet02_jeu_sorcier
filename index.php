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
require_once 'ApprenticeWizard.php';

$w1 = new Wizard("W01");
$nomW1 = $w1->getName();
$sexeW1 = $w1->getSexe();
$PVw1 = $w1->getPV();
$XPw1 = $w1->getXP();
// fin maniere $_GET etape 01

/*
echo "nom: ".$nomW1;
echo "<br>";
echo "sexe: ".$sexeW1;
echo "<br>";
echo "PV: ".$PVw1;
echo "<br>";
echo "XP: ".$XPw1;
echo "<br>";
 */

// maniere $_GET etape 02
// fonctionne
echo "<br>";
echo "methode S_GET";
echo "<br>";
$jsonW1 = json_encode($w1);
echo $jsonW1;
echo "<br>";
echo "<a href='meeting.php?w1=".urlencode($jsonW1)."'>test</a>";
// fin maniere $_GET etape 02
//
//
echo "<br>";
echo "<br>";
echo "<br>";

// ===============================================================================

// ===============================================================================

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $apprentice = new ApprenticeWizard("Harry",50);
    echo "<br>";
    echo $apprentice->getName(); // Harry
    echo "<br>";
    echo $apprentice->getAgility(); // 50
    echo "<br>";
    $apprentice->setAgility(60);
    echo $apprentice->getAgility(); // 60
    echo "<br>";
    echo $apprentice->getSexe();

?>

</body>
</html>
