<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
    $nom="Lina";
    $filliere="Informatique";
    $moyenne=18;
    $estboursier=true;
    $anneeEtude=2;
?>
<?php
if ($moyenne >= 10) {
    $statut = "admis(e)";
    $classeStatut = "admis";
} else {
    $statut = "non admis(e)";
    $classeStatut = "non-admis";
}
?>
<!-- <p>
    statut: <?php echo $statut; ?>
</p> -->
<?php
switch($filliere) {
    case "Informatique":
        $labelfiliere = "Informatique.";
        $classeBadge = "badge-info";
        break;
    case "electro":
        $labelfiliere = "electronique.";
        $classeBadge = "badge-elec";
        break;
    default:
        $labelfiliere = "Filière inconnue.";
        $classeBadge = "badge-default";
}
?>
<div class="fiche">
    <h2><?php echo $nom; ?></h2>

    <p>Filière :
        <span class="badge <?php echo $classeBadge; ?>">
            <?php echo $labelfiliere; ?>
        </span>
    </p>

    <p>Moyenne : <?php echo $moyenne; ?>/20</p>
    <p>Année d'étude : <?php echo $anneeEtude; ?></p>
    <p>Statut :
    <span class="<?php echo $classeStatut; ?>">
        <?php echo $statut; ?>
    </span>
</p>
    <p>Boursier : <?php echo $estboursier ? "Oui" : "Non"; ?></p>
</div>
</body>