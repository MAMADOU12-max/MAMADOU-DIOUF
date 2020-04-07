<?php
//fonction commun
function verifyinput($var) //good
    {
        $var = trim($var);  //enleve les espaces supplementaires dans notre formulaire
        $var = stripslashes($var); //les enleves tt les anti-slash
        $var = htmlspecialchars($var); // nous protege contre la faille xxs 
           return $var; 
    }
//fonction permettant de confirmer un un nom et un prenom
function is_nom($nom) //good
{
    $masque='#^[A-Z][a-z]{2,}[a-z]$#';
    if(preg_match($masque ,$nom))
    {
        return true;
    
    }
    else
    {
        return false;
    }
} 
   
//fonction qui permet de verifier un numero 
function is_numero($num) //good
{
    $masque = '#^7[560]([-. ]?[0-9]{1}){7}$#';
    if(preg_match($masque, $num))
    {
        return true;
    }
    else{ return false;}

}


    //fonction qui verifie que les numeros sont les memes 
    function is_same($num)
    {
        if($num == $num1){ return true;}
        else{ return false; }
    }
   
//function qui permet de permet de parcourir des phrases
function is_sentence($pr)
{
    $masque= '#[A-Z]{1,}[^.!?]*[.!?]#';
    $tab=[];
    if(preg_match($masque , $pr))
    {
        echo "$pr";
        $tab++;
    }
   else{ echo "incorrect";}
}

//fonction qui coupe un texte
function is_cut($text)
{
    $cut= explode (".", $text);
    for ($i=0; $i <$cut ; $i++) 
    { 
        echo "$i";
    break;
    }
}
 is_cut("ma mere est morte a l'age de . il a eyu n.");




// function verif_alpha($var)
// {
//     // On cherche tt les caractères autre que [A-z]
//     preg_match("/[^A-Za-z][\s]/",$str,$result);
//     // si on trouve des caractère autre que A-z
//     if(!empty($result)){
//       return false;
//     }
//     return true;
// }

function address($var)  //good
{
    if(preg_match('#^[A-Za-z][0-9]{?}[\s]#',$var))
    {
        return true;
    }
    else{ return false; }
  }
 //fonction qui met les phrases dans un tableau
  function nombrephrase($commentaire)
    {
       preg_match_all('#[a-z]([^.!?]|([.][0-9]))*[.?!]#i' ,$commentaire,$tab);
        
        $i=0;
           foreach($tab[0] as $key=>$value)
           {
               $i++;
               if($tab >= 3){return true;}
                else{return false;}
           }
           return $i;
        
        }
        //function qui compte les phrases
        function counter($tab)
        {
            $recup =true;
            for ($i=0; $i < count($tab) ; $i++) { 
                  if($i >= 3){ return true; }
                  else{ return false;}
             }
        }  
