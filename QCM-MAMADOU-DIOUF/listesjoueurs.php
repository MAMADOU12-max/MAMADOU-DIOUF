<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="listejoueur.css">
</head>
<body>
    
    
   
    <div id="container">
        <div id="header"></div>

                 <div  id="image">

                     <!-- <!-- <div id="acceuil">
                    <h3>le plaisir de jouer</h3>
                    </div>
                    
        
                    <div id="zone">
                        <div id="entete">
                            <div id="text"> <h4>créer et paramétrer vos quizz</h4></div>
                            <div id="ressortir"><button id="sort" name ="deconnexion"> <a id="clik" href="pageconnexion.php"> Déconnexion</a></button></div>
                        </div>

                        <div id="deal">
                            <div id="petit">
                                <div id="img1">
                                    <img src="" alt="">
                                </div>
                                <div id="dessous1">

                                </div>
                            </div>
                            <div id="grand">
                                <div id="part1">
                                  <h3>lstes des joueurs</h3>
                                </div> -->

                                <?php
                                $joueur = file_get_contents('joueur.json') ;
                                $joueur = json_decode($joueur , true) ;
                                    for ($i=0; $i < count($joueur) ; $i++) :
                                        # code...
                                
                                ?>
                              

                                    <?php endfor; ?>

                            </div>

                        </div>
                               

                             
                    </div>  -->
                </div>
                
                
              
        <div id="footer"></div>
                                  
</body>
</html>