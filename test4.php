<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulaire CV</title>
    <h1 align ="center" id="l">Formulaire CV </h1>
    <form action="test5.php" method="post">
  </head>
  <body>
    <script>
        function afficherBienvenue() {
            alert("Bienvenue sur mon CV 🌟");
        }
    </script>
    <style>
        #l{
            color:brown;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: larger;
            font-style: oblique;
            text-decoration: underline;
        }
       
    .form{
  width:750px;
  margin: auto;
  font-family:'Source sans pro',Calibri, sans-serif;
  font-size: 16px;
  border: 5px solid rosybrown;
  background-color: rosybrown;
}
h1{
    color:brown;
}
h2{
    color:brown;
}
/* Style général du tableau */
table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
}

/* Style de la bordure et de la séparation des cellules */
table, tr, td {
  border: 1px solid rosybrown ,
  
}

/* Style de la police et de la couleur du texte dans l'en-tête */
td {
  background-color:rosybrown;
  padding: 10px;
  text-align: left;
}

/* Style du survol de la ligne du tableau */
tr:hover {
  background-color:rosybrown;
}


/* Style du survol des liens dans les cellules du tableau */
td a:hover {
  text-decoration: underline;
}
button {
            display: flex;
            justify-content: space-around;
            background-color:rosybrown;
            padding: 10px;
            color: beige;
        }
      </style>
       <div class="form">
       <button id="monCv" onclick="afficherBienvenue()">Mon CV</button>
       <h1><ins><strong>Données professionnelles</strong></ins></h1>
       <hr><form method="post" action="test5.php">
       <table>
       <tr>
         <td> <label for="Nom_Complet"><h2><ins><strong>Nom et Prénom:</h2></ins></strong></label></td>
         <td > <input type="text" name="Nom_Complet" cols="40" > <br> </td>
       </tr>
       <tr>
        <td><label for="date"><h2><strong><ins>Date de naissance:</h2></ins></strong></label> </td>
        <td><input type="date" name="date_naissance"> <br> </td>
      </tr>
      <tr>
        <td><label for="date"><h2><strong><ins>Adresse:</h2></ins></strong></label> </td>
        <td><input type="text" name="Adresse"> <br> </td>
      </tr>
      <tr>
       <td><label for="date"><h2><strong><ins>CIN:</h2></ins></strong></label> </td>
       <td><input type="text" name="CIN"> <br> </td>
     </tr>
     <tr>
      <td><label for="email"><h2><strong><ins>Email:</h2></ins></strong></label> </td>
      <td><input type="text" name="Email"> <br> </td>
    </tr>
    <tr>
     <td><label for="Numéro_de_tel"><h2><strong><ins>Numero_de_tel:</h2></ins></strong></label> </td>
     <td><input type="text" name="Numero_de_tel"> <br> </td>
   </tr>
   <tr>
    <td><label for="Situation_familiale"><h2><strong><ins>Situation_familiale:</h2></ins></strong></label> </td>
    <td><input type="text" name="Situation_familiale"> <br> </td>
  </tr>
      <tr>
       <td><label for="sexe"><h2><strong><ins>Sexe:</h2></ins></strong></label> </td>
       <td><input type="radio" name="Genre" value="femme">
           <label for="femme">Femme</label><br>
           <input type="radio" name="Genre" value="homme">
           <label for="homme">homme</label><br> </td>
     </tr>
     <tr>
       <td><label for="Pays"><h2><strong><ins>Pays:</h2></ins></strong></label> </td>
       <td><select name="Pays" id=pays>
           <option value="Maroc">Maroc</option>
           <option value="France">France</option>
          <option value="US">US</option></td>
     </tr>
     <tr>
     </table>
     <h1><ins><strong>Formations</strong></ins></h1>
     <hr>
     <table>
     <tr>
       <td> <label for="Formations"><h2><ins><strong>Formations:</h2></ins></strong></label> </td>
       <td>
        <textarea name="Formations" cols="70" rows="7"></textarea> <br>
    </td>
     </tr>
   </table>
   <table>
   <h1><ins><strang>Expériences</strang></ins></h1>
   <hr>
   <table>
   <tr>
     <td> <label for="Experiences"><h2><ins><strong>Experiences:</h2></ins></strong></label> </td>
     <td>
      <textarea name="Experiences" cols="70" rows="7"></textarea> <br>
  </td>
   </tr>
 </table>
 <table>
 <tr>
   <td> <label for="Competences"><h2><ins><strong>Competences</h2></ins></strong></label></td>
   <td>
    <textarea name="Competences" cols="70" rows="7"></textarea> <br>
</td>
 </tr>
</table>
<table>
 <h1><ins><strong>Langues</strong></ins></h1>
 <hr>
 <table>
 <tr>
    <td> <label for="Langues"><h2><ins><strong>Langues:</h2></ins</strong></label> </td>
      <td>
        <textarea name="Langues" cols="70" rows="7"></textarea> <br>
    </td>
 </tr>
 </table>
<table>
  <h1><ins><strong>Centre D'interet</strong></ins></h1>
 <table>
 <tr>
    <td> <label for="Centre"><h2><ins><strong>Centre d'interet:</h2></ins></strong></label> </td>
    <td>
      <textarea name="Centre" cols="70" rows="7"></textarea> <br>
  </td>
 </tr>
  </table>
    </form> 
    <button type="submit" name="ok">Envoyer</button>
</div>
</form>
</body>
</html>