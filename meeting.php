<?php

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
        echo "Name: " . $w1['name'] . "<br>";
        echo "PV: " . $w1['PV'] . "<br>";
        echo "XP: " . $w1['XP'] . "<br>";
        echo "Sexe: " . $w1['sexe'] . "<br>";
    }
// fin maniere $_GET etape 03
//===================================================================================
echo "<br>";
echo "<br>";
//===================================================================================

