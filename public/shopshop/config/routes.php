<?php
  
function getPage($db){

      

 $lesPages['accueil'] = "accueilControleur";
 $lesPages['contact'] = "contactControleur";
 $lesPages['apropos'] = "aproposControleur";
 $lesPages['mentionslegales'] = "mentionslegalesControleur";
 $lesPages['inscription'] = "inscriptionControleur";
 $lesPages['maintenance'] = "MaintenanceControleur";
 $lesPages['connection'] = "connectionControleur";

 $contenu = $lesPages['accueil'];
 if ($db!=null){
      if (isset($_GET['page'])){
      $page = $_GET['page'];
      }else{
            $page = 'accueil';
      }
      if (isset($lesPages[$page])){
            $contenu = $lesPages[$page];
      } else{
                  $contenu = $lesPages['accueil'];
            }
      } else{   
            $contenu = $lesPages['maintenance'];
      }
            return $contenu;    
}
?>   