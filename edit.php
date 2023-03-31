<?php

// inclusion des instance utile
include("config.php");
include($dir_common."database.php");

switch ($_GET["mod"]) { // gestion du mod d'arrivé en GET

    // ajouter une tache
    case 'add':
        $sql = "INSERT INTO task (Tasks, statuts) VALUES ('".$_POST["Tasks"]."','n')"; // création de la requête sql
        $mysqli->query($sql); // exécution de la requête sql
        break;

    case 'add':
        # code...
        break;
    case 'add':
        # code...
        break;
    
    default:
        # code...
        break;
}

header("Location: index.php") ;
?>