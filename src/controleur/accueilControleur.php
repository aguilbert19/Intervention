<?php
    function accueilControleur($twig){
        echo $twig -> render('index.html.twig',array());
        echo $_POST['nom'];
    }

?>
