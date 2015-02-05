<?php
/*
 * model.php
 * MODEL -> Fonctions à exécuter
 *
 */
    // Ex: Quel chiffre est le plus petit ?
    function getMini ($chiffres) {
        
        // Vérifier si on reçoit bien un array
        if(!is_array($chiffres)){
            die('<span style="color:red;">La valeur doit être un tableau</span>');
        }
        
        // Vérifier que le contenu ne soit que des chiffres
        if(!is_int($chiffres)){
            die('<span style="color:red;">Le tableau ne peut contenir que des entiers</span>');
        }
        
        $length = count($chiffres);
        $mini = $chiffres[0];
        
        for($i=0; $i<$length; $i++) {
            // Vérifier la valeur
            if($chiffres[$i] < $mini) {
                // la remplacer
                $mini = $chiffres[$i];
            }
        }
        
        // Retourner la valeur
        return $mini;
    }
    
    // Ex: Vérifier si une chaine de caractère est un palindrome
    function is_palindrome($chaine){
    
        return $bool;
    }