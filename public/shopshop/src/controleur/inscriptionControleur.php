<?php 
    function inscriptionControleur($twig){    

        if (isset($_POST['btInscrire'])){      
            $inputEmail = $_POST['inputEmail'];      
            $inputPassword = $_POST['inputPassword'];       
            $inputPassword2 =$_POST['inputPassword2'];       
            $role = $_POST['role'];    
        }
        echo $twig->render('inscription.html.twig', array());
        
    }
?>