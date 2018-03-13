<?php
session_start();
include 'checkHoroscope.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $persnr = $_POST['personNR'];



        if(!isset($_SESSION['horoscope'])){
            echo "true";
            $_SESSION['horoscope'] = checkHoroscope($persnr);
            
        }
        else {
            echo "ditt horoskop är redan sparat!";
        }
        
    }


?>