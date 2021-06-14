<?php

// fonction de validation
function est_vide(string $valeur): bool {
    return empty($valeur);
}

function est_superieur(int $valeur): bool {
    return $valeur > VAL;
}

function verif_taille(string $valeur): bool {
    return strlen($valeur) <= 9;
}
// traitement
/**
 * validation de l'exercice 1
 *
 * @param mixed $valeur
 * @param string $key
 * @return array
 */
function validation_password(string $valeur, string $key): array {
    $arrayError = array();
    if (est_vide($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire";
    }elseif (verif_taille($valeur)) {
        $arrayError[$key] = "le mots de pass doit etre supérieur ou egal à 9";
    }

    return $arrayError;
}
 
//function est_email(string $mail):bool{
      
//}
function valid_email($val): bool{
    return filter_var($val,FILTER_VALIDATE_EMAIL);
}
function validation_email($valeur,string $key):array{
        $arrayError = array();
        if (est_vide($valeur)) {
            $arrayError[$key] = "Ce champ est obligatoire";
        }elseif(!valid_email($valeur)){
            $arrayError[$key] = "email est invalide";
        }
        return $arrayError;
}

function form_valide(array $arrayError):bool{
    if (count($arrayError)==0) {
        return true;
    }
    return false;
}
function est_entier(string $val):bool{
    if ($val=="1236457890") {
        return true;
    }
    return false;
}
function valid_name($valeur,string $key):array{
    $arrayError=array();
    if(est_entier($valeur)== false){
        $arrayError[$key]='le name n\'est pas valide';
    }elseif($key>=15){
        $arrayError[$key]='le name est trop long';
    }
    return $arrayError;
}


?>
