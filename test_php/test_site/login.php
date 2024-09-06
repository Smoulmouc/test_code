<?php
session_start(); // Démarrer la session

include 'database.php'; // Connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les informations du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Préparer la requête SQL
    $sql = "SELECT * FROM users WHERE email = :email AND mot_de_passe = :password";
    $stmt = $pdo->prepare($sql);

    // Exécuter la requête en liant les paramètres
    $stmt->execute(['email' => $email, 'password' => $password]);

    // Vérifier si l'utilisateur existe
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Afficher les informations de l'utilisateur
        echo "Nom: " . htmlspecialchars($user['nom']) . "<br>";
        echo "Prénom: " . htmlspecialchars($user['prenom']) . "<br>";
        echo "Email: " . htmlspecialchars($user['email']) . "<br>";
    } else {
        // Si la connexion échoue, stocker un message d'erreur dans la session
        $_SESSION['error_message'] = "Connexion échouée. Veuillez vérifier vos informations.";
        // Redirection vers la page de connexion
        header("Location: index.php");
        exit();
    }
}
