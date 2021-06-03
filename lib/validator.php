<?php

// fonction de validation
function est_vide(string $valeur): bool {
    return empty($valeur);
}

function est_entier($valeur): bool {
   // $entier = (int) $valeur;
    return is_numeric($valeur);
}

function est_superieur(int $valeur): bool {
    return $valeur > VAL;
}

function verif_taille(string $valeur): bool {
    return strlen($valeur) <= 19;
}
// traitement
/**
 * validation de l'exercice 1
 *
 * @param mixed $valeur
 * @param string $key
 * @return array
 */
function validation_connect($valeur, string $key): array {
    $arrayError = array();
    if (est_vide($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire";
    } elseif (!est_entier($valeur)) {
        $arrayError[$key] = "Le nombre n'est pas un entier";
    } elseif (!est_superieur($valeur)) {
        $arrayError[$key] = "Ce nombre doit etre supérieur à ".VAL;
    }

    return $arrayError;
}
?>