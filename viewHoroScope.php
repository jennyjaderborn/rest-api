<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if(isset($_SESSION['horoscope'])){
        echo "den finns";
        echo $_SESSION['horoscope'];
    }
}

?>
