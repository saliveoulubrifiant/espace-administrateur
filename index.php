<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins" , sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #7d2ae8;
    padding: 30px;
}
.container{
    position: relative;
    max-width: 850px;
    width: 100%;
    background: #fff;
    padding: 40px 30px;
    box-shadow: 0 5px 10px  rgba(0, 0,0, 0.2);
    perspective: 2700px;
}
.container .cover{
    position: absolute;
    top: 0;
    left: 50%;
    height: 100%;
    width: 50%;
    z-index: 98;
    transition: all 1s ease;
    transform-origin: left ;
    transform-style: preserve-3d;
}
.container .cover:before{
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #7d2ae8;
    opacity: 0.5;
    z-index: 100;
}
.container .cover:after{
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #7d2ae8;
    opacity: 0.5;
    z-index: 100;
    transform: rotateY(180deg);
}
.container #flip:checked ~ .cover{
    transform: rotateY(-180deg);
}
.container .cover img{
    position: absolute;
    height: 100%;
    width: 100%;
    object-fit: cover;
    z-index: 12;
    backface-visibility: hidden;
}
.container .cover .back .backImg{
    transform: rotateY(180deg);
}
.container .cover .text{
    position: absolute;
    z-index: 111;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color : #000;
}
.cover .text .text-1,
.cover .text .text-2{
    font-size: 26px;
    font-weight: 600;
    color: #fff;
    text-align: center;
    backface-visibility: hidden;
}
.cover .back .text .text-1,
.cover .back .text .text-2{
    transform: rotateY(180deg);
}
.cover .text .text-2{
    font-size: 15px;
    font-weight: 500;
}
.container form{
    height: 100%;
    width: 100;
    background: #fff;
}
.container .form-content{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.form-content .login-form,
.form-content .signup-form{
    width: calc(100%/2 -25px);
}
form .form-content .title{
    font-size: 24px;
    font-weight: 500;
    color: #333;
    position: relative;
}
form .form-content .title::before{
    content: '';
    position: absolute;
    height: 3px;
    width: 25px;
    background: #7d2ae8;
    left: 0;
    bottom: 0;
}
form .signup-form .form-content .title::before{
    width: 20px;
}

form .form-content .input-boxes{
    margin-top: 30px;
}
form .form-content .input-box{
    display: flex;
    align-items: center;
    height: 50px;
    width: 100%;
    margin: 10px 0;
    position: relative;
}
.form-content .input-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    padding: 0 30px;
    font-size: 16px;
    font-weight: 500;
    border-bottom: 2px solid rgba(0, 0,0, 0.2);
    transition: all 0.3s ease;
}
.form-content .input-box input:focus,
.form-content .input-box input:valid{
    border-color: #7d2ae8;
}

.form-content .input-box i{
    position: absolute;
    font-size: 17px;
    color: #7d2ae8;
}
form .form-content .text{
    font-size: 14px;
    font-weight:500 ;
    color: #333;
}
form .form-content .text a{
    text-decoration: none;
}
form .form-content .text a:hover{
    text-decoration: underline;
}
form .form-content .button{
    color: #fff;
    margin-top: 40px;
}
form .form-content .button input{
    color: #fff;
    background:#7d2ae8 ;
    border-radius: 6px;
    padding: 0;
    cursor: pointer;
    transition: all 0.4s ease;

}
form .form-content .button input:hover{
    background: #5b13b9;
}
form .form-content label{
    color: #5b13b9;
}
form .form-content label:hover{
    text-decoration: underline;
}
form .form-content .login-text{
    text-align: center;
    margin-top: 25px;
}
.container #flip{
    display: none;
}
@media (max-width:730px){
    .container .cover{
        display: none;
    }
    .form-content .login-form,
    .form-content .signup-form{
    width: 100%;
    }
    .form-content .signup-form{
        display: none;
    }
    .container #flip:checked~form .signup-form{
        display: block;
    }
    .container #flip:checked~form .login-form{
        display: none;
    }
}

  
  </style>
    <meta charset="UTF-8">
    <title>Login and Registration form in HTML & CSS</title>
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
      <input type="checkbox" id="flip">
      <div class="cover">
        <div class="front">
          <img src="images/frontImage.jpg" alt="">
          <div class="text">
            <span class="text-1">Chaque nouvel ami est <br>  une nouvelle aventure.</span>
            <span class="text-2">Restons Connectés.</span>
          </div>
        </div>
        <div class="back">
          <img class="backImg" src="Image/WIN_20240429_05_28_36_Pro.jpg" alt="">
          <div class="text">
            
          </div>
        </div>
      </div>
      <form action="traitement.php" method="post">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Formulaire De Connexion</div>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="E-mail" required>
              </div>
              <div class="input-box">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Password" required>
              </div>
              <div class="text"><a href="#">Mot De Passe Oublié?</a></div>
              <div class="button input-box">
                |<a href="DASHB.php"><input type="submit" value="Connexion"></a>
              </div>
              <div class="text login-text">Je n'ai pas de Compte? <label for="flip">S'inscrire Maintenant</label></div>
            </div>
          </div>
          </form>
          <?php
// Connexion à la base de données
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=127.0.0.1;dbname=enterprise_db', 'root', '',
$pdo_options);
if($_server["reauest_method"]=="post"){
  $pseudo=$_post['pseudo'];
  $password=$_post['password'];
// Récupération des informations
$requete = $connexion->prepare("SELECT pseudo, password FROM Admin where pseudo=? and password=?");
$requete->bind_param("ss",$pseudo, $password);
$requete->execute();
$resultat=$requete->get_result();
if($resultat->num_rows>0){
  echo"connexion reussie!";
}else{echo"identifiants incorrects.";}
$requete->close();}
?>
          <form action="traitement.php" method="post">
          <div class="signup-form">
            <div class="title">Création Du Compte</div>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Entrer Votre Nom" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Entrer Votre Email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Entrer Votre Mot de Passe" required>
              </div>
              <div class="input-box">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Confirmation Mot de Passe" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Soumettre">
              </div>
              <div class="text sign-up-text">Vous avez Déjà un Compte? <label for="flip">Connecte-toi Maintenant</label></div>
            </div>
          </div>
        </div>
</form>
<?php
// Connexion à la base de données
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=127.0.0.1;dbname=enterprise_db', 'root', '',
$pdo_options);
// Récupération des informations
$reponse = $bdd->query('SELECT pseudo, message FROM Admin');
/* Affichage de chaque information (toutes les données sont
protégées par htmlspecialchars)*/
while ($donnees = $reponse->fetch())
{
echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) .
'</strong> : ' . htmlspecialchars($donnees['password']) . '</p>';
}
$reponse->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>
    </div>
  </body>
</html>
