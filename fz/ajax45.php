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
    if(isset($_POST["invoer"])){
        // $invoer= htmlentities($_POST["invoer"], ENT_QUOTES);

        // $result = mysqli_query($mysqliConnect, "INSERT INTO todo (title)
        // VALUES (' {$invoer }')");
        // if ($result) 
        // {
        //     echo "OK";
        // } 
        // else 
        // { 
        //     echo "FOUT";
        // }
    }
    else {
        $data = [];
        $result = mysqli_query($mysqliConnect, "SELECT * FROM todo");
       
        while ($row = mysqli_fetch_array($result)) 
        {
            $data[] = $row;
        }
           echo json_encode($data);
    }

 
}



