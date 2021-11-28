<?php 

$individu = [
   'prenom' => 'Jane', 
   'nom' => 'Doe',
   'age' => 37
]; 


foreach ( $individu as $clef => $entree) {
echo $clef." : ".$entree.".  <br>";
}