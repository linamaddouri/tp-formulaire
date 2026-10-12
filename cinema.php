<?php
// Définir les variables
    $age = 20;
    $estudiant = true;
    $prix = 0;
    // Calculer le prix du billet
    if ($age < 12) {
        $prix = 5;
    } else
    if ($estudiant) {
        $prix = 7;
    } else {
        $prix = 10;
    }
    // Afficher le prix du billet
    echo "Le prix du billet est de €" . $prix;
?>