

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baby";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con==true){
    //echo "db connected";
} 

else{
    die("Connection failed: " . $con->connect_error);
}
?>