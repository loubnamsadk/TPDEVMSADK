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
if(isset($_POST['ok']))
{
    // Récupérer les valeurs du formulaire
    $_nom = $_POST['Nom_Complet'];
    $_date_naissance = $_POST['date_naissance'];
    $_Adresse = $_POST['Adresse'];
    $_CIN = $_POST['CIN'];
    $_Email = $_POST['Email'];
    $_Numero_de_tel = $_POST['Numero_de_tel'];
    $_Situation_familiale = $_POST['Situation_familiale'];
    $_Genre = $_POST['Genre'];
    $_Pays = $_POST['Pays'];
    $_Formations = $_POST['Formations'];
    $_Experiences = $_POST['Experiences'];
    $_Competences = $_POST['Competences'];
    $_Langues = $_POST['Langues'];
    $_Centre = $_POST['Centre'];

    // Appeler la fonction de connexion
    connexion();

    // Préparer la requête d'insertion
    $requete = $bdd->prepare("INSERT INTO data(nom, date_naissance, Adresse, CIN, Email, Numero_de_tel, Situation_familiale, Genre, Pays, Formations, Experiences, Competences, Langues, Centre) VALUES (:nom, :date_naissance, :Adresse, :CIN, :Email, :Numero_de_tel, :Situation_familiale, :Genre, :Pays, :Formations, :Experiences, :Competences, :Langues, :Centre)");

    // Lier les paramètres
    $requete->bindParam(':nom', $_nom);
    $requete->bindParam(':date_naissance', $_date_naissance);
    $requete->bindParam(':Adresse', $_Adresse);
    $requete->bindParam(':CIN', $_CIN);
    $requete->bindParam(':Email', $_Email);
    $requete->bindParam(':Numero_de_tel', $_Numero_de_tel);
    $requete->bindParam(':Situation_familiale', $_Situation_familiale);
    $requete->bindParam(':Genre', $_Genre);
    $requete->bindParam(':Pays', $_Pays);
    $requete->bindParam(':Formations', $_Formations);
    $requete->bindParam(':Experiences', $_Experiences);
    $requete->bindParam(':Competences', $_Competences);
    $requete->bindParam(':Langues', $_Langues);
    $requete->bindParam(':Centre', $_Centre);

    // Exécution de la requête
    $requete->execute();

    // Fermeture de la connexion (facultatif, car PHP ferme automatiquement la connexion à la fin du script)
    $bdd = null;
    echo "Inscription réussie!";
}
?>
