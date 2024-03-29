<?php
session_start();

// Usuń sesję użytkownika
unset($_SESSION['user']);

// Usuń plik cookie przechowujący informacje o zalogowanym użytkowniku
setcookie('user_login', '', time() - 3600, '/');

// Przekieruj użytkownika do strony logowania
header('Location: logowanie.php');
exit();
?>
