<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$pass = $_POST['password'];
// $message = $_POST['message'];


if (trim($firstName) == "") {
    echo "Bitte schreiben ie Ihre name";
} elseif (strlen(trim($firstName)) <= 2) {
    echo "Bitte geben ie Richtige nane ein";
} elseif (trim($email) == "" || trim($pass) == "" || trim($_POST['message']) == "") {
    echo "bitte fügen sie alle eingaben ein";
}else{
    $_POST['password'] = sha1($pass);
    // echo "<h>Alle Angaben</h><p>name: $firstName</p><p>Lastname: $lastName</p><p>email: $email</p><p> password: $pass</p><p>message: $_POST[message]</p>";
    echo "<h1>Alle Angaben</h1>";
    foreach ($_POST as $key => $value) {
       echo $value."<br>";
    }



    // header('Location: ./contact.php'); 
    // exit;
}

