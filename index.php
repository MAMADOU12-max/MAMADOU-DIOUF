<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        ul 
        {
            transform: translate(-10%); display: flex; margin-left: 190px; margin-top: 80px;

        }
        ul li
         {
            list-style: none;
            color: white  ;
            text-transform: uppercase;
            animation: flash 1.4s linear infinite;
            color: darkgoldenrod  ;
            font-size: 150px;
            letter-spacing: 15px;
        }
        @keyframes flash {
            0% {
                color: #484848;
                text-shadow: none;
            }
            90%{
                color: yellow;
                text-shadow: none;
            }
            100%{
                color: blue;
                text-shadow: 0 0 7pics #fff900, 0 0 50px #ff6c00;
            }
        }

        ul li:nth-child(1){
            animation-delay:  .1s;
        }
        ul li:nth-child(2){
            animation-delay: .2s;
        }
        ul li:nth-child(3){
            animation-delay: .3s;
        }
        ul li:nth-child(4){
            animation-delay: .4s;
        }
        ul li:nth-child(5){
            animation-delay: .5s;
        }
        ul li:nth-child(6){
            animation-delay: .6s;
        }

    </style>
</head>
<body>
    
    <div id="container">
        <div id="acceuil">
            <div id="welcom "> <h0 id="header">formulaire d'incription</h0>
            </div>
        </div>
        
    </div>
    <div id="ma_formulaire">
            <div id="partie"> 
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div id="droite">
                        <div id="labin1">
                            
                                <div class="label">
                                    <label for="name">NAME</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="name"  value="<?php if(isset($_POST['name']))
                                    {echo $_POST['name'];} ?>" required placeholder="put your name please">
                                </div>   
                                    
                                   
                                <div class="label">
                                    <label for="lastname">LASTNAME</label>
                                </div>    
                                <div class="input">
                                    <input type="text" name="lastname" value="<?php if(isset($_POST['lastname']))
                                    {echo $_POST['lastname'];} ?>" required placeholder="put your last name ">
                                </div>
                                    
                                <div class="label">
                                <label for="address">ADDRESS</label>
                                </div>
                                <div class="input1">
                                    <input type="text" name="address" value="<?php if(isset($_POST['address']))
                                    {echo $_POST['address'];} ?>" required placeholder="where do you live? ">  
                                </div> 
                                   
                                <div class="label1">
                                    <label for="num">NUMBER</label>
                                </div>
                                <div class="input2">
                                    <input type="text" name="num" value="<?php if(isset($_POST['num']))
                                    {echo $_POST['num'];} ?>" required placeholder="put your number">  
                                </div> 
                                    
                                <div id="confirmation">
                                <input type="text" id="conf" name="num1" value="<?php if(isset($_POST['num1']))
                                {echo $_POST['num1'];} ?>" placeholder="confirm your num please">
                                </div>
                                <div id="bouton1">
                                <input type="submit" id="valider" name="Valide" value="validate" placeholder="valider">
                                </div>
                                <div id="bouton2">
                                <input type="submit" id="initialiser" name="reinitialiser" value="RESET" placeholder="reinitialiser">
                                </div>
                        </div>
                        <div id="gauche">
                            <div id="genre">
                                <h6>gender</h6></br>
                                <input class="nom" type="radio" name="sex" value="<?php if(isset($_POST['sex']))
                                 {echo $_POST['sex'];} ?>"><h7 class="h">man</h7></br>
                                <input class="nom" type="radio" name="sex" value="<?php if(isset($_POST['sex']))
                                 {echo $_POST['sex'];} ?>"><h7 class="h">woman</h7></br>
                            </div>
                                
                            <div id="langues">
                                <h5>languages</h5>
                                <h1>French</h1>
                                <input id="chex1" name="language1" value="<?php if(isset($_POST['language1'])) 
                                {echo "f++";} ?>" type="checkbox" name="french">
                                <h2>English</h2>
                                <input id="chex2" name="language2" value="<?php if(isset($_POST['language2'])) 
                                {echo $_POST['language2'];} ?>" type="checkbox" name="English">
                                <h3>Spanish</h3>
                                <input id="chex3" name="language3" value="<?php if(isset($_POST['language3'])) 
                                {echo $_POST['language3'];} ?>"  type="checkbox" name="Spanish">
                                <h4>Chinese</h4></br>
                                <input id="chex4" name="language4" value="<?php if(isset($_POST['language4'])) 
                                {echo $_POST['language4'];} ?>" type="checkbox" name="chinese">
                            </div> 
                                <div id="error6">
                                   <?php //choose a gender please ?>
                                </div>
                            
                            <div>
                                <textarea name="note" id="note" value="" placeholder="write a comment"></textarea>
                            </div> 
                                
                            <div id="happy">
                                <h6>pleased</h6></br>
                                <input class="nom" type="radio" name="choix" value="<?php if(isset($_POST['choix'])) 
                                {echo $_POST['choix'];} ?>"><h8 class="appr">YES</h8></br>
                                <input class="nom" type="radio" name="choix" value="<?php if(isset($_POST['choix'])) 
                                {echo $_POST['choix'];} ?>"><h8 class="appr">NO</h8></br>
                            </div>
                                <div id="error8">
                                   <?php //you must clik one ?>
                                </div> 
                        </div>

                        <div id="brillant">    

                          <ul>
                              <li>w</li>
                              <li>e</li>
                              <li>l</li>
                              <li>c</li>
                              <li>o</li>
                              <li>m</li>

                          </ul>  
                        </div>

                    </div>
                   
                </form>
            </div>
    <div>
    

    <?php // required dans le input permet de renvoyer un message d'erreur si le champ est vide 
        include('fonction.php');
        // connaitre son sex 
         $s=0;
        if(isset($_POST['$choix'])){ $s=2; }
        //pour connaitre son satisfaction
        $f=0;
        if(isset($_POST['$choix'])){ $f=1; }
        //pour s'assurer que deux langue ont ete saisi
            $lan=0;
        if(isset($_POST['language1'])){ $lan++ ;}
        if(isset($_POST['language2'])){ $lan++ ;}
        if(isset($_POST['language3'])){ $lan++ ;}
        if(isset($_POST['language4'])){ $lan++ ;}

    $name= $lastname = $address = $num = $num1 ="";
    $nameError= $lastnameError = $addressError = $numError = $num1Error = $manError = $womanError ="";
    if(isset($_POST['valide']) && verifyinput(is_nom($_POST['name'])) &&  verifyinput(is_nom($_POST['firsnamde'])) && 
    verifyinput(is_numero($_POST['num'])) && /*verifyinput(is_same($_POST['num1'])) &&*/
     verifyinput(is_address($_POST['address'])) && $lan >= 2 && $f=1 && $s=2 && verifyinput(nombrephrase($_POST['note'])))    
    {
       
        // $name = $_POST["$name"];
        
        $_SESSION['validname']= is_nom($_POST['name']);
        $_SESSION['validfirsname']= is_nom($_POST['firstname']);
        $_SESSION['validaddress']= is_nom($_POST['validaddress']);
        $_SESSION['validnum']= is_nom($_POST['num']);
       // $_SESSION['validnum1']= is_nom($_POST['num1']);
        $_SESSION['lan']= $_POST['$lan'];
        $_SESSION['sex']= $_POST['$sex'];
        $_SESSION['choix']= $_POST['$choix'];
        $_SESSION['note']=$_POST['note'];
       
    }
    elseif(!is_nom($name)){ echo '<div style="position: relative; color: red; padding-left: 216px;
         top: -420px;> you must write a valid firstname </div>';}
    elseif(!is_nom($_POST['lastname'])){ echo '<div style="position: relative; color: red; padding-left: 215px;
            top: -340px;"> you must write a valid lastname </div>';}
    elseif(!is_nom($_POST['address'])){ echo '<div style="position: relative; color: red; padding-left: 215px;
            top: -254px;">I want know your address</div>';}
    elseif(!is_numero($_POST['num'])){ echo '<div style="position: relative; color: red; padding-left: 215px;
                top: -165px;"> give a right phone number</div>';}
   // elseif($num =!$num1){ echo '<div style="position: relative; color: red; padding-left: 189px;
     //               top: -90px;"> verify you put the same phone number</div>';}
    elseif($lan<2){ echo '<div style="position: relative; color: red; padding-left: 680px;
        top: -290px;"> choose at least 2 languagues</div>';}
    elseif(!$f=1){ echo '<div style="position: relative; color: red; padding-left: 510px;
        top: -290px;"> TEll us your satifaction </div>';}
    elseif(!$s++){ echo '<div style="position: relative; color: red; padding-left: 900px;
          top: -290px;"> click one please </div>';}
    elseif(!nombrephrase($_POST['note'])){ echo '<div style="position: relative; color: red; padding-left: 900px;
            top: -290px;"> commentaire</div>';}
        

?>
    
</body>
</html>
