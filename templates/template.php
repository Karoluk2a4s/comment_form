<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Form</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="leave-comment-block">
        <h2>Leave comment</h2>

        <form action="index.php" method="POST">
            <h3>Vardas*</h3>
            <textarea class="name-text" name="name" required></textarea>
            <h3>El. paštas*</h3>
            <textarea class="email-text" name="email" required></textarea>
            <h3>Komentaras*</h3>
            <textarea class="comment-text" name="comment_text" required></textarea>
            <br><br>
            <button class="submit_button" type="submit">Pateikti</button>
            
        </form>

    </div>
    
</body>
</html>
