<?php
    function inscriptionControleur($twig){
        $mode = 0;
        if(isset($_POST['nom'])){
          $mode=1;
        }else{
          $mode=2;
        }
        echo $twig -> render('inscription.html.twig',array(),$mode);
      }

?>