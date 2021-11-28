<?php

$hello = function($prenom){
    printf('Bonjour %s <br />', $prenom); 
};

$hello('James');

var_dump($hello); 