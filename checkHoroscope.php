<?php


function checkHoroscope($persnr){
    //mars månad
 if($persnr[2] . $persnr[3] == 03){
    if($persnr[4] . $persnr[5] >= 21){
        $horoscope = "<img src='./img/aries.png'><h2>Väduren</h2><p>Varm, entusiastisk, social, känslosam, stressad, impulsstyrd, aggressiv.<br/> 
        Element: Eld 🔥</p>";
    }
    else if($persnr[4] . $persnr[5] < 21){
        $horoscope = "<img src='./img/pisces.png'><h2>Fiskarna</h2><p>Empati, human, slarvig, vänlig, hemlighetsfull, lättpåverkad, inspirerande.<br/> 
        Element: Vatten 🌊</p>";
    }   
}

//april månad
    if($persnr[2] . $persnr[3] == 04){
        if($persnr[4] . $persnr[5] <= 19){
            $horoscope = "<img src='./img/aries.png'><h2>Väduren</h2><p>Varm, entusiastisk, social, känslosam, stressad, impulsstyrd, aggressiv.<br/> 
            Element: Eld 🔥</p>";
        }
        else if($persnr[4] . $persnr[5] >= 20){
            $horoscope = "<img src='./img/taurus.png'><h2>Oxen</h2><p>Envis, beskyddande, lojal, tålmodig, uthållig, stabil, praktisk, realistisk.<br/> 
            Element: Jord 🌎</p>";
        }
    }

//maj månad

    if($persnr[2] . $persnr[3] == 05){
        if($persnr[4] . $persnr[5] <= 20){
            $horoscope = "<img src='./img/taurus.png'><h2>Oxen</h2><p>Envis, beskyddande, lojal, tålmodig, uthållig, stabil, praktisk, realistisk.<br/> 
            Element: Jord 🌎</p>";
        }
        else if($persnr[4] . $persnr[5] >= 21){
            $horoscope = "<img src='./img/gemini.png'><h2>Tvillingarna</h2><p>Kvick, kommunikativ, ytlig, nyfiken, självständig, modig, impulsiv, stressad.<br/> 
            Element: Luft 💨</p>";
        }
    }

//juni månad
    if($persnr[2] . $persnr[3] == 06){
        if($persnr[4] . $persnr[5] <= 21){
            $horoscope = "<img src='./img/gemini.png'><h2>Tvillingarna</h2><p>Kvick, kommunikativ, ytlig, nyfiken, självständig, modig, impulsiv, stressad.<br/> 
            Element: Luft 💨</p>";
        }
        else if($persnr[4] . $persnr[5] >= 22){
            $horoscope = "<img src='./img/cancer.png'><h2>Kräftan</h2><p>Föräldern, beskyddaren, bevararen, den trofaste, den lojale & sympatiske.<br/> 
            Element: Vatten 🌊</p>";
        }
    }

//juli månad 

if($persnr[2] . $persnr[3] == 07){
    if($persnr[4] . $persnr[5] <= 22){
        $horoscope = "<img src='./img/cancer.png'><h2>Kräftan</h2><p>Föräldern, beskyddaren, bevararen, den trofaste, den lojale & sympatiske.<br/> 
        Element: Vatten 🌊</p>";
    }
    else if($persnr[4] . $persnr[5] >= 23){
        $horoscope = "<img src='./img/leo.png'><h2>Lejonet</h2><p>Storsint, kärleksfull, viljestark, svarsjuk, ledare, trofast, plikttrogen.<br/> 
        Element: Solen ☀️</p>";
    }
}

//augusti månad 

        if($persnr[2] . $persnr[3] == "08"){
            if($persnr[4] . $persnr[5] <= 22){
                $horoscope = "<img src='./img/leo.png'><h2>Lejonet</h2><p>Storsint, kärleksfull, viljestark, svarsjuk, ledare, trofast, plikttrogen.<br/> 
                Element: Solen ☀️</p>";
            }
            else if($persnr[4] . $persnr[5] >= 23){
                $horoscope = "<img src='./img/virgo.png'><h2>Jungfrun</h2><p>Blyg, självmedveten, analytisk, produktiv, kritisk, föränderlig.<br/> 
                Element: Jord 🌎</p>";
            }
        }

//september månad


    if($persnr[2] . $persnr[3] == "09"){
        if($persnr[4] . $persnr[5] <= 22){
            $horoscope = "<img src='./img/virgo.png'><h2>Jungfrun</h2><p>Blyg, självmedveten, analytisk, produktiv, kritisk, föränderlig.<br/> 
            Element: Jord 🌎</p>";
        }
        else if($persnr[4] . $persnr[5] >= 23){
            $horoscope = "<img src='./img/libra.png'><h2>Vågen</h2><p>Förälskelse, charm, obeslutsamhet, förföriskhet, diplomati, social kompetens.<br/> 
            Element: Luft 💨</p>";
        }
    }

//oktober månad 

    if($persnr[2] . $persnr[3] == 10){
        if($persnr[4] . $persnr[5] <= 22){
            $horoscope = "<img src='./img/libra.png'><h2>Vågen</h2><p>Förälskelse, charm, obeslutsamhet, förföriskhet, diplomati, social kompetens.<br/> 
            Element: Luft 💨</p>";
        }
        else if($persnr[4] . $persnr[5] >= 23){
            $horoscope = "<img src='./img/scorpio.png'><h2>Skorpionen</h2><p>Intensiv, svartsjuk, passionerad, tystlåten, lojal, modig, stark.<br/> 
            Element: Vatten 🌊</p>";
        }
    }

 //november månad 

    if($persnr[2] . $persnr[3] == 11){
        if($persnr[4] . $persnr[5] <= 21){
            $horoscope = "<img src='./img/scorpio.png'><h2>Skorpionen</h2><p>Intensiv, svarsjuk, passionerad, tystlåten, intensiv, lojal, modig, stark.<br/> 
            Element:  Vatten 🌊</p>";
        }
        else if($persnr[4] . $persnr[5] >= 22){
            $horoscope = "<img src='./img/sagittarius.png'><h2>Skytten</h2><p>Ärlig, generös, idealistisk, optimistisk, överdrivande, entusiastisk, sökare.<br/> 
            Element: Eld 🔥</p>";
        }
    }

//december månad 

    if($persnr[2] . $persnr[3] == 12){
        if($persnr[4] . $persnr[5] <= 21){
            $horoscope = "<img src='./img/sagittarius.png'><h2>Skytten</h2><p>Ärlig, generös, idealistisk, optimistisk, överdrivande, entusiastisk, sökare.<br/> 
            Element: Eld 🔥</p>";
        }
        else if($persnr[4] . $persnr[5] >= 22){
            $horoscope = "<img src='./img/capricorn.png'><h2>Stenbocken</h2><p>Tillbakadragen, blyg, trogen, pliktkänsla, ambitiös, lojal.<br/> 
            Element: Jord 🌎</p>";
        }
    }

//januari månad 

    if($persnr[2] . $persnr[3] == 01){
        if($persnr[4] . $persnr[5] <= 19){
            $horoscope = "<img src='./img/capricorn.png'><h2>Stenbocken</h2><p>Tillbakadragen, blyg, trogen, pliktkänsla, ambitiös, lojal.<br/> 
            Element: Jord 🌎</p>";
        }
        else if($persnr[4] . $persnr[5] >= 20){
            $horoscope = "<img src='./img/aquarius.png'><h2>Vattumannen</h2><p>Fredsälskare, klarsynt, intuitiv, lojal, uppfinningsrik, revolutionär.<br/> 
            Element: Luft 💨</p>";
        }
    }

 //februari månad 

    if($persnr[2] . $persnr[3] == 02){
        if($persnr[4] . $persnr[5] <= 18){
            $horoscope = "<img src='./img/aquarius.png'><h2>Vattumannen</h2><p>Fredsälskare, klarsynt, intuitiv, lojal, uppfinningsrik, revolutionär.<br/> 
            Element: Luft 💨</p>";
           
        }
        else if($persnr[4] . $persnr[5] >= 19){
            $horoscope = "<img src='./img/pisces.png'><h2>Fiskarna</h2><p>Empati, human, slarvig, vänlig, hemlighetsfull, lättpåverkad, inspirerande.<br/> 
            Element: Vatten 🌊</p>";
            
        }
    }
return $horoscope;
 
}

?>