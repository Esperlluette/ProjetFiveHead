<?php
function getPage(){


 $lesPages['accueil'] = "accueilControleur";
 $lesPages['contact'] = "contactControleur";
 $lesPages['apropos'] = "aproposControleur";
 $lesPages['mentionslegales'] = "mentionslegalesControleur";
 $lesPages['inscription'] = "inscriptionControleur";

 $contenu = $lesPages['accueil'];
 
 if (isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
        $page = 'accueil';
  }
   if (isset($lesPages[$page])){
   $contenu = $lesPages[$page];
   }
   else{
   $contenu = $lesPages['accueil'];
   }
   
   return $contenu;
} 
?>