<?php
    include "./config.php"; // Database connection

    $affiliationId = $_POST['affiliation'];
    $fileName = $_POST['file-name'];
    $fileLocation = $_POST['file-location'];

    // Handle File Upload
    $targetDir = "../uploads/";
    $targetFile = $targetDir . basename($_FILES["file-upload"]["name"]);
    move_uploaded_file($_FILES["file-upload"]["tmp_name"], $targetFile);

    $query = "INSERT INTO documents (affiliation_id, file_name, file_path, office_location) 
            VALUES (:affiliation_id, :file_name, :file_path, :office_location)";

    $stmt = $conn->prepare($query);
    $stmt->execute([
        ':affiliation_id' => $affiliationId,
        ':file_name' => $fileName,
        ':file_path' => $targetFile,
        ':office_location' => $fileLocation
    ]);

    echo "File successfully added!";
    
?>
