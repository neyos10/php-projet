<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
        Email: <input type="email" name="email" required><br>
        Mot de passe: <input type="password" name="mdp" required><br>
        <button type="submit" name="submit">Se connecter</button>
    </form>

    <?php
    session_start(); // Démarrer la session

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        // Vérification que l'email se termine par @emsi.ma
        if (preg_match("/@emsi\.ma$/", $email)) {
            // Stocker l'email dans la session
            $_SESSION['email'] = $email;

            // Rediriger vers la page d'accueil
            header("Location: home.php");
            exit();
        } else {
            echo "L'email doit se terminer par @emsi.ma.";
        }
    }
    ?>
</body>
</html>