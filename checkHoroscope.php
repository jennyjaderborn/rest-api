<?php


function checkHoroscope($persnr){
    //mars månad
 if($persnr[2] . $persnr[3] == 03){
    if($persnr[4] . $persnr[5] >= 21){
        $horoscope = "<h1>Du är en vädur!</h1><img src='./img/vadur.jpg'>";
        return $horoscope;
    }
    else if($persnr[4] . $persnr[5] < 21){
        $horoscope = "Du är en fisk!";
        return $horoscope;
    }
    
}
 
}

?>