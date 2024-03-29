<?php 
session_start();

// Sprawdź, czy użytkownik jest zalogowany
if (!isset($_SESSION['user'])) {
    header("Location: logowanie.php");
    exit();
}

// Obsługa wylogowywania się
if (isset($_POST['logout'])) {
    // Usuń sesję użytkownika
    unset($_SESSION['user']);

    // Usuń plik cookie przechowujący informacje o zalogowanym użytkowniku
    setcookie('user_login', '', time() - 3600, '/');
    
    // Przekieruj użytkownika do strony logowania
    header('Location: logowanie.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Admin panel | DATABASE | Biblioteka</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<script>
        window.onload = function() {
            var error_message = "Poprawnie zalogowałeś się do bazy Biblioteka!";
            if (error_message !== "") {
                alert(error_message);
            }
        };
    </script>
<body>
    <header>
        <a href="index.php"><img class="icon" src="favicon.ico" alt="Main logo"></a>
        <a href="index.php"><h1>Zarządzanie bazą danych: Biblioteka</h1></a>
    
        <section class="logout" method="post">
            <button onclick="window.location.href='logout.php'" class="btn-logout">Wyloguj się</button>
    </section>
    </header>
</body>
</html>
