<?php

// version finale: 

$age = 11; 
$langue = "fr"; 

if( $age >= 18 && $langue === "fr") {
    echo ' Bienvenue, cher visiteur'; 
}
elseif( $age >= 18 && $langue === "en") {
    echo ' Welcome, dear visitor';
}
elseif( $age< 18 && $langue == "fr"){
    echo " entrée interdite";
}
elseif( $age< 18 && $langue == "en"){
    echo " not allowed";
}

// version b:
/*

$age = 17; 
$derogation = false; 
$accompagnement = true; 

if($age >= 18 || $derogation) {
    echo " Vous êtes majeur ou avez une dérogation, c'est ok.";
}
elseif( $age >= 18 || $accompagnement) {
    echo " Vous êtes majeur ou êtes accompagné, c'est ok."; 
}

else{
    echo "demande refusée, désolé."; 
}


// version A: 

/* $autorisation = NULL;

if($autorisation) {
    echo " permission accordée"; 
}
elseif(!$autorisation) {
    echo "demande refusée"; 
}
else{
    echo " blip? "; 
}

*/