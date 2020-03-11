<?php
function getPage($db){
    $lesPages['accueil']="accueilControleur";
    $lesPages['contact']="contactControleur";
    $lesPages['apropos']="aproposControleur";
    $lesPages['inscription']="inscriptionControleur";
    $lesPages['connexion']="connexionControleur";
    $lesPages['catalogue']="catalogueControleur";
    $lesPages['mentionslegales']="mentionslegalesControleur";
    $lesPages['intervention']="interventionControleur";
    $lesPages['maintenance']="maintenanceControleur";

    if($db!=NULL){
        if(isset($_GET['page'])) {
            $page=$_GET['page'];
        }else{
            $page='accueil';
        }
    
        if(isset($lesPages[$page])){
            $contenu=$lesPages[$page];
        
        }else{
            $contenu=$lesPages['accueil'];
        }
    
        return $contenu;
    }else{
        return $lesPages['maintenance'];
    }
    
}
?>