<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];
$username = explode('@', $email)[0]; // Récupérer la partie avant '@emsi.ma'

// Déconnexion
if (isset($_POST['logout'])) {
    session_destroy(); // Détruire la session
    header("Location: login.php"); // Rediriger vers la page de connexion
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <style>
        /* Styles de base pour la navbar */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar .logout {
            float: right; /* Aligner le bouton de déconnexion à droite */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#">Bienvenue, <?php echo htmlspecialchars($username); ?></a>
        <form class="logout" action="" method="POST">
            <button type="submit" name="logout" style="background: none; border: none; color: white; cursor: pointer;">Déconnexion</button>
        </form>
    </div>

    <h1>Page d'Accueil</h1>
    <p>Contenu de la page d'accueil ici.</p>
</body>
</html>
