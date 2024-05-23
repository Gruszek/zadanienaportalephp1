<!DOCTYPE html>
<html>
<head>
    <title>Wynik Formularza</title>
</head>
<body>

<h2>Wynik Formularza</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);

    echo "<p>Welcome, " . $name . "!</p>";
    echo "<p>Your email address is: " . $email . "</p>";
}
?>

</body>
</html>
