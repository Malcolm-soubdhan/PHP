<?php

$client = array(
'prenom' => 'Timothée', 
'nom' => 'Gerbaud', 
'age' => 67, 
'mail' => 'tim@gmail.com'
);

//print_r($client); 

?>
<ul>
    <li><?php echo $client['prenom'] ?></li>
    <li><?php echo $client['nom'] ?></li>
    <li><?php echo $client['age'] ?> ans</li>
    <li><?php echo $client['mail'] ?></li>
  
</ul>