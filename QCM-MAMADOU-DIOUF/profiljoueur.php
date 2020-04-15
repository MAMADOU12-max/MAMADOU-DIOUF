<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/CSS/profiljoueur.css">
</head>
<body>
        <div id="container">
            <div id="header">   

            </div>
            <div id="center">
                <img  id="center" style=' position: "absolute" ;' src="asset/IMG/images/img-bg.jpg" alt="">  
                    <div id="bande">
                       <h4>le plaisir de jouer</h4> 
                    </div>
                    <div id="cadre">
                        <div id="part1">
                            <form action="" method="post">
                            <h5>s'inscrire</h5>
                                    <h6>Pour tester votre niveau de culture </h6>

                                    <div class="label">
                                    <label for="firsname">Firsnamee</label>
                                    </div>

                                    <div class="input">
                                    <input type="text" name="firstname" required>
                                    </div>

                                    <div class="label">
                                    <label for="lastname">Lastname</label>
                                    </div>

                                    <div class="input">
                                    <input type="text" name="lastname" required>
                                    </div>

                                    <div class="label">
                                    <label for="login">Login</label>
                                    </div>

                                    <div class="input">
                                    <input type="text" name="login" required>
                                    </div>

                                    <div class="label">
                                    <label for="password">Password</label>
                                    </div>

                                    <div class="input">
                                    <input type="text" name="password" required>
                                    </div>

                                    <div class="label">
                                    <label for="confirmation">Confirm your password</label>
                                    </div>

                                    <div class="input">
                                    <input type="text" name="confirmation" required>
                                    </div>

                                    <div id="bod">
                                         <div id="dernier">
                                        <a id="annule" href="pageconnexion.php">Annuler</a>
                                        </div>
                                        <div id="clik2">
                                            <button id="button2">Choisir un fichier</button>
                                        </div>
                                        <div id="clik3">
                                            <button id="button3" name="creer">Creer un compte</button>
                                        </div>
                                    </div>
                                        

                            </form>
                        </div> 
                        <div id="part2">

                        </div>
                    </div>
                
            </div>
            <div id="footer">

            </div>

        </div>
</body>
</html>
<?php

include("src/fonction.php");
  
$joueur = file_get_contents('joueur.json') ;
$objet = json_decode($joueur , true) ;
//   var_dump($objet) ;

if(isset($_POST['creer']) && verifyinput(is_nom($_POST['firstname']))  &&  verifyinput(is_nom($_POST['lastname'])) && 
verifyinput(is_numero($_POST['password'])) && 
 verifyinput(is_numero($_POST['login'])))    
{
   $firstname = $_POST['firstname'] ;
   $lastname = $_POST['lastname'] ;
   $login = $_POST['login'] ;
   $password = $_POST['password'] ;

   $nouveaujoueur = 
   [
       'nom' => $firstname ,
        'prenom' => $lastname ,
        'login' => $login ,
        'mot de passe' => $password ,
   ]  ;
     $objet[]= $nouveaujoueur ;
    $objetEncode = json_encode($objet) ;

    file_put_contents('joueur.json' ,$objetEncode) ;

   header('location:pageconnexion.php') ;
   
}
elseif(!is_nom($_POST['firstname'])){ echo '<div style="color:red ;"> your name is not valable</div>';}
elseif(!is_nom($_POST['lastname'])){ echo "your lastname is not valable";}
elseif(!is_nom($_POST['login'])){ echo "bad login";}
elseif(!is_numero($_POST['password'])){ echo "choose a password with letters and number";}

    

?>
