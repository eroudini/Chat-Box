<?php

// Connexion a la bdd

$con = mysqli_connect(
                        "localhost",
                        "root",
                        "",
                        "chat");
$req = mysqli_query($con, "SET NAMES UTF8");
if(!$con){

    // Si la connexion echoue j'affiche :
    echo "Connexion échouée";
}