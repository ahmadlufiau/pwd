<?php
//tanpa argumen   
function CetakHeader() 
{      
    echo ("Konversi Suhu<BR>");   
    echo ("Celcius-Reamur-Fahrenheit<BR>");   
}   
//satu Argumen 
function FahToCel($Fah) 
{      
    $Celcius = 5/9 * ($Fah - 32);   
    echo("$Fah Fahrenheit = $Celcius Celcius<BR>");   
} 
//dua argumen 
function FahReaToCel($Fah, $Rea) 
{  
    $Celcius = 5/9 * ($Fah - 32);  
    echo("$Fah Fahrenheit = $Celcius Celcius<BR>");  
    $Celcius = 5/4 * $Rea;  
    echo("$Rea Reamur = $Celcius Celcius<BR>"); 
} 
CetakHeader(); 
FahToCel(113); 
FahReaToCel(200,80); 
?>
