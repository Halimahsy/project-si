<?php
//db contact
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["uname"];
    $Cemail = $_POST["cemail"];
    $phone = $_POST["phone"];
    $subject = $_POST["subjects"];
    $messages = $_POST["messages"];

    try {
        require_once "db_flowershop.inc.php";
        $query = "INSERT INTO messages (uname,cemail,phone,subjects,messages) VALUES (?,?,?,?,?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $Cemail, $phone, $subject, $messages]);

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
