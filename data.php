<?php 
    require 'Class/Personnage.php';

    $joueur1 = new Personnage;

            $arr = $joueur1->tab();

        echo json_encode($arr);

?>