<?php
// --- 1. Configuration de la base de données ---
$host = 'localhost';
$db   = 'utilisateurs2';
$user = 'root'; 

// Modification : Utiliser une chaîne vide pour le mot de passe
$pass = ''; 
// ---------------------------------------------
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    // Définir le mode d'erreur pour les exceptions
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // Récupérer les données sous forme de tableau associatif (clé/valeur)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

// --- 2. Connexion à la base de données ---
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     // En cas d'échec de connexion, retourner une erreur JSON (Code HTTP 500)
     http_response_code(500);
     header('Content-Type: application/json');
     echo json_encode(['error' => 'Erreur de connexion à la DB.', 'message' => $e->getMessage()]);
     exit;
}

// --- 3. Exécution de la requête et récupération des données ---
// Le nom de la table doit être "utilisateurs"
$stmt = $pdo->query('SELECT id, nom, prenom, email FROM utilisateurs ORDER BY id ASC');
$utilisateurs = $stmt->fetchAll();

// --- 4. Envoi de la réponse JSON ---
// Indiquer au navigateur que la réponse est du JSON
header('Content-Type: application/json');
// Encoder le tableau PHP en chaîne JSON et l'afficher
echo json_encode($utilisateurs);

?>