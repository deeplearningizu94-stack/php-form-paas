<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $country = htmlspecialchars($_POST["country"]);
    $city = htmlspecialchars($_POST["city"]);
    $email = htmlspecialchars($_POST["email"]);
    $tel = htmlspecialchars($_POST["tel"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<h2>Merci, $name $surname !</h2>";
    echo "<p><b>Country:</b> $country</p>";
    echo "<p><b>City:</b> $city</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Tel:</b> $tel</p>";
    echo "<p><b>Message:</b> $message</p>";

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $filename = $_FILES['file']['name'];
        echo "<p><b>Fichier uploadé:</b> $filename</p>";
    }
} else {
    echo "Accès non autorisé.";
}
?>
