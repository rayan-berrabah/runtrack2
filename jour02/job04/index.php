<?php
for($a = 0; $a <= 100; $a++){
    if((!($a%3)) && (!($a%5))){
        echo "Lavoix<br>";
    }
    elseif (!($a%5)) {
        echo "La mélodie<br>";
    }
    elseif (!($a%3)){
        echo "L'écoute<br>";
    }
    else{
    echo "$a<br>";
    }
}