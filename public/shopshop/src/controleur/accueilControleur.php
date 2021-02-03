<?php
function accueilControleur($twig){
    echo $twig->render('accueil.html.twig', array());
}
function contactControleur(){
    echo 'Contact';
   }
function aproposControleur(){
    echo 'apropos';
   }
function mentionslegalesControleur(){
    echo 'mentions legales';
   }
   
?>