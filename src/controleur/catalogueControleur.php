<?php
    function catalogueControleur($twig){

    $liste = array();
    $liste[0]['nom']=$_POST['nom'];
    $liste[0]['prenom']=$_POST['prenom'];
    $liste[0]['login']=$_POST['login'];
    $liste[0]['ville']=$_POST['ville'];
    $liste[0]['cp']=$_POST['cp'];
    $liste[1]['nom']="Henrison";
    $liste[1]['prenom']="John";

        echo $twig -> render('catalogue.html.twig',array('liste'=>$liste));
    }

?>