<?php
//On va chercher le fichier de config puisqu'il contient les infos de connexion à la BDD
require 'config.php';

//Si le formulaire est rempli, on joue la fonction insert

if(isset($_POST["action"])) {
    if($_POST["action"] == "insert") {
        insert();
    }
}

// La fonction insert se connecte à la BDD, envoie le contenu du formulaire dans la table phpalt, dans la colonne messages
//, et mysqli query execute la requête. On finit en envoyant un message qui informe l'utilisateur que son message s'est envoyé
function insert() {
    global $conn;
    $messages = $_POST["Messages"]; 
    $query ="INSERT INTO phpalt (messages) VALUES('$messages')";
    mysqli_query($conn, $query);
    echo "Message envoyé avec succès !";
}
?>

