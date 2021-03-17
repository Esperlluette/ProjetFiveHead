<?php 
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        //ne pas oublier de supprimer les contoleurs
        
    function contactControleur($twig){
        $form = array();
        if (isset($_POST['btsubmit'])){
            $champNom = $_POST['champNom'];
            $champPrenom = $_POST['champPrenom'];
            $champEmail =$_POST['champEmail'];
            $champTexte = $_POST['champTexte'];
            $form['valide'] = true;
            $form['email'] = $champEmail;
            $form['nom'] = $champNom;
            $form['prenom'] = $champPrenom; 
            $form['Texte'] = $champTexte;
        }
        echo $twig->render('contact.html.twig', array('form'=>$form));
    }
?>