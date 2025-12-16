<?php
require_once 'db.php';

if (isset($_GET['term'])) {
    $term = $_GET['term'];

    // 1. Résultats qui COMMENCENT par le terme
    $sqlStarts = "SELECT * FROM pokemon WHERE nom LIKE :term ORDER BY nom ASC";
    $stmtStarts = $pdo->prepare($sqlStarts);
    $stmtStarts->execute(['term' => $term . '%']);
    $resultsStarts = $stmtStarts->fetchAll(PDO::FETCH_ASSOC);

    // 2. Résultats qui CONTIENNENT le terme (mais ne commencent pas par lui)
    // On exclut ceux qui commencent par le terme pour éviter les doublons
    $sqlContains = "SELECT * FROM pokemon WHERE nom LIKE :term AND nom NOT LIKE :termStart ORDER BY nom ASC";
    $stmtContains = $pdo->prepare($sqlContains);
    $stmtContains->execute([
        'term' => '%' . $term . '%',
        'termStart' => $term . '%'
    ]);
    $resultsContains = $stmtContains->fetchAll(PDO::FETCH_ASSOC);

    // On renvoie un tableau JSON contenant les deux listes
    echo json_encode([
        'starts' => $resultsStarts,
        'contains' => $resultsContains
    ]);
}
?>