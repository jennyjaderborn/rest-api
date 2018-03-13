<?php
parse_str(file_get_contents("php://input"), $_PUT);
session_start();
include 'checkHoroscope.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    if(isset($_SESSION['horoscope'])){
    session_unset('horoscope');
    $persnr = $_PUT['personNR'];
        


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