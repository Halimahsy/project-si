<?php
//db users
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pw"];

    try {
        require_once "db_flowershop.inc.php";
        $query = "INSERT INTO users (username,pw,email) VALUES (?,?,?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $password, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}
