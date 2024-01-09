<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            text-align: center;
            margin: 20px;
        }

        fieldset {
            border: 2px solid #e2e2e2;
            border-radius: 10px;
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            margin-top: 50px; /* Espacement depuis le haut */
        }

        img {
            width: 40%; /* Ajustez cette valeur pour changer la taille de la photo */
            border-radius: 8px;
            margin-bottom: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            font-size: 24px;
            color: #555;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 30px;
            color: #ff6666;
        }

        button {
            background-color: #ff6666;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 26px;
            font-weight: bold;
        }

        button:hover {
            background-color: #ff3333;
        }

        h1, legend {
            color: #ff6666;
            font-size: 32px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <fieldset>
        <form action="test6.php" method="post">
            <legend><h1><ins>Contacter moi</ins></h1></legend>
            <img src="T2.jpeg" alt="Illustration" />
            
            <label for="nomUtilisateur">Nom :</label>
            <input type="text" id="nomUtilisateur" name="nomUtilisateur" required>

            <label for="MotDePasse">Mot De Passe :</label>
            <input type="password" id="MotDePasse" name="MotDePasse" required>
            <br>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <br>

            <button onclick="verifierAuthentification()" name="ok">Envoyer</button>
            <button type="reset">Annuler</button>
            <button type="submit" name="Valider">Valider</button>
        </form>
    </fieldset>

    <script>
        function verifierAuthentification() {
            var nomUtilisateur = document.getElementById("nomUtilisateur").value;
            var motDePasse = document.getElementById("MotDePasse").value;

            if (nomUtilisateur === "loubna" && motDePasse === "loubna") {
                window.location.href = "cv2.html";
;
            } else {
                alert("Saisie incorrecte. Veuillez vérifier votre nom d'utilisateur et votre mot de passe.");
            }
        }
    </script>
</body>
</html>
