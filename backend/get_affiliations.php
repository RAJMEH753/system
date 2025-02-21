<?php
    include "./config.php"; // Database connection

    $stmt = $conn->prepare("SELECT id, name FROM affiliation_data ORDER BY name ASC");
    $stmt->execute();
    $affiliations = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($affiliations);
?>
