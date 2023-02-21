<?php

// Pobranie danych z formularza
$username = $_POST['username'];
$password = $_POST['password'];

// Sprawdzenie poprawności danych
if (empty($username) || empty($password)) {
    // Wyświetlenie komunikatu o błędnych danych
    echo "Nieprawidłowa nazwa użytkownika lub hasło!";
} else {
    // Autoryzacja użytkownika
    // Tutaj należy dodać kod logiki autoryzacji, np. weryfikacja danych w bazie danych
    if ($username === 'admin' && $password === 'admin') {
        // Utworzenie sesji dla zalogowanego użytkownika i przekierowanie na stronę główną
        session_start();
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        // Wyświetlenie komunikatu o błędnych danych
        echo "Nieprawidłowa nazwa użytkownika lub hasło!";
    }
}


session_start();


if (isset($_SESSION['username'])) {
   
    echo "Witaj " . $_SESSION['username'] . "!";
    echo "<br>";
    echo "Oto lista książek dostępnych dla Ciebie:"
    
} else {

    echo "Witaj! Aby uzyskać dostęp do książek, musisz się zalogować.";

}

?>