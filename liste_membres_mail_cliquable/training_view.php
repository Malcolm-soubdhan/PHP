<!DOCTYPE html>
<html>
    <head>
        <title> Entrainement php</title>
        <link rel="stylesheet" href= "style.css">
    </head>
    <body>
        <?php
            $membres = [
                    $maurice = [
                        'pseudo' => 'Mau',
                        'email' => 'maurice@gmail.com'
                    ],
                    $valery = [
                        'pseudo' => 'Val',
                        'email' => 'valery@outlook.fr' 
                    ],
                    $max = [
                        'pseudo' => 'max',
                        'email' => 'max@outlook.fr'
                    ]
                ];
                foreach($membres as $element) {
            ?>
              <div class= "bloc">
                <ul>
                    <li><a href="mailto:<?php echo $element['email'] ?>"><?php echo $element['pseudo'] ?></a></li>
                </ul>
            </div>
        <?php
        }
        ?>
    </body>
</html>