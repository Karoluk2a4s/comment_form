<?php
    include 'includes/db.php';
    include 'templates/template.php';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $comment_text = trim($_POST["comment_text"]);

    $stmt = $conn->prepare("INSERT INTO usher_comments (name, email, comment_text) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $comment_text);

    if ($stmt->execute()) {
        echo "Komentaras pateiktas!";
    } else {
        echo "Klaida: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    
    header("Location: index.php");
    exit;

}
?>
