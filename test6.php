
           
<?php
// Fonction pour la connexion au serveur et la base
function connexion()
{
    try
    {
        global $bdd;
        $bdd = new PDO('mysql:host=localhost;dbname=sitd;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
}

// Vérifier si le formulaire a été soumis
if(isset($_POST['Valider']))
{
    // Récupérer les valeurs du formulaire
    $_Nom = $_POST['nomUtilisateur'];
    $_MotDePasse = $_POST['MotDePasse'];
    $_Message = $_POST['message'];

    // Appeler la fonction de connexion
    connexion();

    // Préparer la requête d'insertion
    $requete = $bdd->prepare("INSERT INTO test2 (Nom, MotDePasse, Message) VALUES (:Nom, :MotDePasse, :Message)");

    // Lier les paramètres sans espaces
    $requete->bindParam(':Nom', $_Nom);
    $requete->bindParam(':MotDePasse', $_MotDePasse);
    $requete->bindParam(':Message', $_Message);

    // Exécution de la requête
    $requete->execute();

    // Fermeture de la connexion (facultatif, car PHP ferme automatiquement la connexion à la fin du script)
    $bdd = null;
    echo "données sauvegardées !";
}
?>
