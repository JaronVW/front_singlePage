<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// show errors

$db_hostname = "localhost";
$db_username = 'ajas_83817';
$db_password = 'imZt36_3';
$db_name = 'Ajax';

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
    $invoer= htmlentities($_POST["invoer"], ENT_QUOTES);

    $result = mysqli_query($mysqliConnect, "INSERT INTO todo (title)
    VALUES (' {$invoer }')");
    if ($result) 
    {
        echo "OK";
    } 
    else 
    { 
        echo "FOUT";
    }
}