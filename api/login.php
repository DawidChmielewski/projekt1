<?php 
require_once('admin.php');
session_start();

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    if ($_POST['login'] == USERNAME) {
        if (password_verify($_POST['password'], PASSWORD)) {
            $_SESSION['user'] = htmlspecialchars($_POST['login']);
            // Przekieruj na stronę z animacją
            header('Location: loading_animation.php');
            exit();
        }
    }
}

$_SESSION['error'] = "Niepoprawny login lub hasło!";
header('Location: logowanie.php');
exit();
?>
