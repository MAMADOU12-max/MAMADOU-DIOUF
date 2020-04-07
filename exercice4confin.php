 <?php
    session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #welcom
        {
            width: 100%;
            height: 200px;
            background-color: gray;
            text-align: center;
        }
        #welcom h2
        {
            text-transform: uppercase;
            font-size: 60px;
            font-weight: 20px;
        }
        #welcom p
        {
            width:5%;
            height: 20px;
            background-color: yellow;
            margin-left: 640px;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: bold;
            font-style: gras;
        }
        #area
        {
            width: 45%;
            height: 145px;
            margin-left: 345px;
            margin-top: 125px;
            border-radius: 10px;
            border: solid 4px gray;
            position: relative;
        }
        #bouton1
        {
            top: 105px;
            position:relative;
           
            margin-left: 600px;
        }
        #bouton
        {
             width: 10%;
            height: 28px;
            background-color: gold;
            border-radius: 8px;
            text-transform: uppercase;
            font-size: bold;
            border: solid 2px gray;
        }
        #bouton:hover
        {
            background-color: gray;
        }
        #bouton:visited
        {
            background-color: blue;
        }
    
    </style>
</head>
<body>
    <form action="" method="post">
        <div id="welcom">
             <h2>a rule's game</h2> 
                <p><a href="">details</a></p>
        </div>
        <textarea name="text" id="area"value="" placeholder="write text please"></textarea>
        <div id="bouton1">
        <button type="submit" name="bouton" value="VALIDATE" id="bouton">VALIDATE</button>
        </div>
    </form>
<?php
    if(isset($_POST['bouton']))
    {
         
         $text = $_POST['text'];
        if(is_usefull($text) && ajoutpoint($text)) 
        { 
            echo '<textarea style=" width: 45%; height: 145px; background-color: yellow;" name="text" id="area1" >$text</textarea>';
        }
       
    }

?>
</body>
</html>
<?php
    
    function is_limit($text)
    {
        if(strlen($text) > 200)
        {
            echo " you must to write a maximum 200 caracters.";
        }
        else 
        {
            echo "$text";
        }
    }


    #fonction qui regle les espaces inutiles
    function is_usefull($text) //good
    {     
            $text=trim($text);
            $value = preg_replace('#\s\s#' , " " , $text);
            $value = preg_replace('#\s+,#' , ", " , $text);
            $value = preg_replace('#,\s+#' , "," , $text);
            $value = preg_replace('#\s+\'#' , "'" , $text);
            $value = preg_replace('#\'\s+#' , "'" , $text);
            $value = preg_replace('#\s+\.#' , "." , $text);
            $value = preg_replace('#\.\s+#' , " " , $text);
            $value = preg_replace('#\.[a-z]{1}#' , ".strtouppe[a-z]{1}" , $text);
            $value = preg_replace('#\s\)#' , ")" , $text);
            $value = preg_replace('#\)\s#' , ")" , $text);
            $value = preg_replace('#\(\s#' , "(" , $text);
            $value = preg_replace('#\s\(#' , "(" , $text);
            $value = preg_replace('#;\s+#' , "; " , $text);
            $value = preg_replace('#s+\;#' , "; " , $text);
            $value = preg_replace('#s+\:#' , " :" , $text);
       return $text;
       is_usefull("$text");
    }
    #fonction qui prend les phrases et les met tous dans un tableau 
    //fonction qui ajte point s'il manque a la fin et met le debut de la phrase en maj
    function ajoutpoint($text)  // good
    {
        if(!preg_match_all('#[.?!]#', $text))
        {
            $text=$text.' . ';
            echo ucfirst($text);
        }
        else{ echo ucfirst($text);}
      // return $text;
    }

    #fonction qui verifie une phrase
    //  function sentence($text)
    //  {
    //      $textcorrect="";
    //        $verif = preg_match_all("#^[\w][_, ]+[!.?]$#",$textcorrect);
    //      {
    //          if(isset($verif) == $text && strlen($text)<=200)
    //          {
    //              $textcorrect=preg_split("#(?<=[?.!\n])#m",$text,0,PREG_SPLIT_NO_EMPTY);
    //              foreach ($textcorrect as $value) {
    //                 echo ajoutpoint($value);
    //                         return $text;
    //              }
               
    //          }
    //      }
    //  }

?>