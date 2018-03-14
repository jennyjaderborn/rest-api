<?php
parse_str(file_get_contents("php://input"), $_PUT);
session_start();
include 'checkHoroscope.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    if(isset($_SESSION['horoscope'])){

    if(strlen($_PUT['personNR']) == 6){ //Horoskopet uppdateras endast om du fyllt i 6 siffror
        $persnr = $_PUT['personNR'];
        //kollar så att inte en högre månad än 12 fylls i eller dag högre än 31, annars uppdateras inte horoskopet
        if($persnr[2] . $persnr[3] <= 12 && $persnr[4] . $persnr[5] <= 31){ 
        session_unset('horoscope');
        }
        }
    

        if(!isset($_SESSION['horoscope'])){
            echo true;
            $_SESSION['horoscope'] = checkHoroscope($persnr);
           
            
        }
        else {
            echo false;
        }
        
    }

}

    

?>