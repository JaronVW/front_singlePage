<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// show errors

$db_hostname = "localhost";
$db_username = 'root';
$db_password = '#1Geheimm';
$db_name = 'schoolwork';

$mysqliConnect = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$mysqliConnect) 
{
    
    echo "connectie naar database mislukt";
    echo "Erno" . mysqli_connect_error() . "<br>";
    echo "Error" . mysqli_connect_error() . "<br>";
    exit;

}
else
{
        $verwijderen = $_POST["verwijderen"];
        $result =  mysqli_query($mysqliConnect, "DELETE FROM `todo` WHERE id = '$verwijderen' ");
        if ($result) 
        {
            echo "OK";
        } 
        else 
        { 
            echo "FOUT";
        } 
    
}