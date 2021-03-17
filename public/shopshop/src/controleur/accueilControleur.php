<?php
function accueilControleur($twig){
    echo $twig->render('accueil.html.twig', array());
}
function aproposControleur(){
    echo 'apropos';
   }
function mentionslegalesControleur(){
    echo 'mentions legales';
   }
function incrireControleur($twig){
    echo $twig->render('inscrire.html.twig', array());
}
   
?>