<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8', 'root', '');
    // Changez 'root' et '' par votre login/mdp si nécessaire
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}
?>