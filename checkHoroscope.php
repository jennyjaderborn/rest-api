<?php


function checkHoroscope($persnr){
    //mars månad
 if($persnr[2] . $persnr[3] == 03){
    if($persnr[4] . $persnr[5] >= 21){
        $horoscope = "<img src='./img/aries.png'><h2>Väduren</h2><p>Varm, entusiastisk, social, känslosam, stressad, impulsstyrd, aggressiv.<br/> 
        Element: Eld 🔥</p>";
        return $horoscope;
    }
    else if($persnr[4] . $persnr[5] < 21){
        $horoscope = "<img src='./img/pisces.png'><h2>Fiskarna</h2><p>Empati, human, slarvig, vänlig, hemlighetsfull, lättpåverkad, inspirerande.<br/> 
        Element: Vatten 🌊</p>";
        return $horoscope;
    }   
}

//april månad
    if($persnr[2] . $persnr[3] == 04){
        if($persnr[4] . $persnr[5] <= 19){
            $horoscope = "<img src='./img/aries.png'><h2>Väduren</h2><p>Varm, entusiastisk, social, känslosam, stressad, impulsstyrd, aggressiv.<br/> 
            Element: Eld 🔥</p>";
            return $horoscope;
        }
        else if($persnr[4] . $persnr[5] >= 20){
            $horoscope = "<img src='./img/taurus.png'><h2>Oxen</h2><p>Envis, beskyddande, lojal, tålmodig, uthållig, stabil, praktisk, realistisk.<br/> 
            Element: Jord 🌎</p>";
            return $horoscope;
        }
    }

//maj månad

    if($persnr[2] . $persnr[3] == 05){
        if($persnr[4] . $persnr[5] <= 20){
            $horoscope = "<img src='./img/taurus.png'><h2>Oxen</h2><p>Envis, beskyddande, lojal, tålmodig, uthållig, stabil, praktisk, realistisk.<br/> 
            Element: Jord 🌎</p>";
            return $horoscope;
        }
        else if($persnr[4] . $persnr[5] >= 21){
            echo $tvilling;
        }
    }

//juni månad
    if($persnr[2] . $persnr[3] == 06){
        if($persnr[4] . $persnr[5] <= 21){
            echo $tvilling;   
        }
        else if($persnr[4] . $persnr[5] >= 22){
            echo $kräfta;
        }
    }

//juli månad 

if($persnr[2] . $persnr[3] == 07){
    if($persnr[4] . $persnr[5] <= 22){
        echo $kräfta;
    }
    else if($persnr[4] . $persnr[5] >= 23){
        echo $lejon;
    }
}

//augusti månad 

        if($persnr[2] . $persnr[3] == "08"){
            if($persnr[4] . $persnr[5] <= 22){
                echo $lejon;
            }
            else if($persnr[4] . $persnr[5] >= 23){
                echo $jungfru;
            }
        }

//september månad


    if($persnr[2] . $persnr[3] == "09"){
        if($persnr[4] . $persnr[5] <= 22){
            echo $jungfru;
        }
        else if($persnr[4] . $persnr[5] >= 23){
            echo $våg;
        }
    }

//oktober månad 

    if($persnr[2] . $persnr[3] == 10){
        if($persnr[4] . $persnr[5] <= 22){
            echo $våg;
        }
        else if($persnr[4] . $persnr[5] >= 23){
            echo $skorpion;
        }
    }

 //november månad 

    if($persnr[2] . $persnr[3] == 11){
        if($persnr[4] . $persnr[5] <= 21){
            echo $skorpion;
        }
        else if($persnr[4] . $persnr[5] >= 22){
            echo $skytt;
        }
    }

//december månad 

    if($persnr[2] . $persnr[3] == 12){
        if($persnr[4] . $persnr[5] <= 21){
            echo $skytt;
        }
        else if($persnr[4] . $persnr[5] >= 22){
            echo $stenbock;
        }
    }

//januari månad 

    if($persnr[2] . $persnr[3] == 01){
        if($persnr[4] . $persnr[5] <= 19){
            echo $stenbock;
        }
        else if($persnr[4] . $persnr[5] >= 20){
            echo $vattuman;
        }
    }

 //februari månad 

    if($persnr[2] . $persnr[3] == 02){
        if($persnr[4] . $persnr[5] <= 18){
            echo $vattuman;
        }
        else if($persnr[4] . $persnr[5] >= 19){
            echo $fisk;
        }
    }





 
}

?>