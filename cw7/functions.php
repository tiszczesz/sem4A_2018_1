<?php
function Litery($tekst){
   $licznik = 0;
   for($i=0;$i<strlen($tekst);$i++){
       //if(ctype_alpha($tekst[$i])){};
       if(($tekst[$i]>='a' && $tekst[$i]<='z') ||
               ($tekst[$i]>='A' && $tekst[$i]<='Z')){
           $licznik++;
       }
   }
   return $licznik;
}
function isSamogloska($litera){
    $samogloski = ['a','e','i','u','y',
        'ó','ł','A','E','I','U','Y'];    
    return in_array($litera, $samogloski);
}
function Samogloski($tekst){
    $licznik = 0;
    for($i=0;$i<strlen($tekst);$i++){       
       if(isSamogloska($tekst[$i])){          
           $licznik++;
       }
   }
   return $licznik;
}
