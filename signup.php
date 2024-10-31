<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Utilisateur</title>
</head>
<body>
    <h1>Créer un Utilisateur</h1>
    <form action="" method="POST">
        Nom: <input type="text" name="nom" required><br>
        Prénom: <input type="text" name="prenom" required><br>
        Email: <input type="email" name="email" required><br>
        Mot de passe: <input type="password" name="mdp" required><br>
        Confirmer le mot de passe: <input type="password" name="mdp_confirmer" required><br>
        <button type="submit" name="submit">Sign Up</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $mdp_confirmer = $_POST['mdp_confirmer'];

        // Validation de l'email
        if (!preg_match("/@emsi\.ma$/", $email)) {
            echo "L'email doit se terminer par @emsi.ma";
        } elseif ($mdp !== $mdp_confirmer) {
            echo "Les mots de passe ne correspondent pas.";
        } elseif (strlen($mdp) < 8) {
            echo "Le mot de passe doit contenir au moins 8 caractères.";
        } else {
            // Simuler l'inscription réussie
            echo "Utilisateur créé avec succès !";
            // Redirection vers la page de connexion
            header("Location: login.php");
            exit();
        }
    }
    ?>
</body>
</html>