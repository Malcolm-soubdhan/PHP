<?php

// METHODE GLOABLE N°1:
$b = 1; 
$c = 2;
function somme() {
    global $b, $c;
// on utilise le mot-celf "global" pour contourner la 
// limite appliquée aux portées des variables des fonctions .    
    echo $b + $c; 
}

somme(); 

//METHODE GLOABLE N°2: 
$b = 1; 
$c = 2;
function somme() {
   echo $GLOBALS['b'] + $GLOBALS['c']; 
}

somme(); 