<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// show errors

$db_hostname = "localhost";
$db_username = 'root';
$db_password = '';
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
        $gesloten_open = $_POST["gesloten_open"];
        $result =  mysqli_query($mysqliConnect, "UPDATE todo SET complete=1 WHERE id = '$gesloten_open'");
        if ($result) 
        {
            echo "OK";
        } 
        else 
        { 
            echo "FOUT";
        } 
    
}