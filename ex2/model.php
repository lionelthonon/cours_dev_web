<?php
    
    // Vérifier si une chaine est un Palindrome
    function verifPal($chaine) {
        // Vérifier si on a bien une chaine de caractère
        if(!is_string($chaine)) {
            die('Ce n\'est pas une chaine');
        }
        
        // Vérifier qu'il n'y a pas de chiffre
        if(is_int($chaine)){
            die('La chaine ne doit pas contenir de chiffres');
        }
        
        // Vérifier si la chaine est un palindrome
        $debut = 0;
        $fin = strlen($chaine)-1;
        
        while($debut < $fin){
            if(substr($chaine, $debut, 1) == substr($chaine, $fin, 1)){
                $debut++;
                $fin--;
            }
            
            else {
                 return false;
            }
        }
        
        return true;
        
    }