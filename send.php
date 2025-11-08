<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<div style='padding:20px;font-family:sans-serif'>";
    echo "<h2>Merci, $name !</h2>";
    echo "<p>Votre message a été reçu :</p>";
    echo "<blockquote>$message</blockquote>";
    echo "<a href='index.php'>↩ Retour</a>";
    echo "</div>";
}
?>
