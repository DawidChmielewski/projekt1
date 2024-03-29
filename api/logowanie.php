<?php
session_start();

// Sprawdź, czy użytkownik jest już zalogowany przez ciasteczko
if (isset($_COOKIE['user_login'])) {
    // Usuń ciasteczko przechowujące informację o zalogowanym użytkowniku
    setcookie("user_login", "", time() - 3600, "/");
}

// Sprawdzenie, czy użytkownik jest już zalogowany
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$error_message = isset($_SESSION['error']) ? $_SESSION['error'] : "";
unset($_SESSION['error']); 
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel | Biblioteka</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script>
        window.onload = function() {
            var error_message = "<?php echo $error_message; ?>";
            if (error_message !== "") {
                alert(error_message);
            }
        };
    </script>
</head>
<body>
    <header>
        <a href="logowanie.php"><img class="icon" src="favicon.ico" alt="Main logo"></a>
        <a href="logowanie.php"><h1>Zarządzanie bazą danych: Biblioteka</h1></a>
    </header>

    <main>
        <h2>Zaloguj się</h2>
        <form class="login" action="login.php" method="post"> 
            <label for="login">Login: </label>
            <input type="text" name="login" placeholder="admin" required><br>
            <label for="password">Hasło:</label>
            <input type="password" name="password" placeholder="admin" required><br>
            <button type="submit">Zaloguj się</button>
        </form>
    </main>
</body>
</html>
