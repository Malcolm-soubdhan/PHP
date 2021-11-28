<?php

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


