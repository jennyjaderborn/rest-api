<?php
session_start();
include 'checkHoroscope.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $persnr = $_POST['personNR'];

        //checkHoroscope($persnr);


        if(!isset($_SESSION['horoscope'])){
            echo "true";
            $_SESSION['horoscope'] = checkHoroscope($persnr);
            //echo $_SESSION['horoscope'];
            
        }
        else {
            echo "ditt horoskop är redan sparat!";
        }
        
    }

    

        
        //echo $horoscope;//det verkar fungera. nu spara $horoscope i en session!

        
    

        



    //print_r($_POST); den hät skriver utpersonnumret på indexsidan. 
    //print_r($numret);

   // if(!isset($_SESSION['nummer'])){
     //   $_SESSION['nummer'] = $numret;
    //}


//print_r($_POST);


?>