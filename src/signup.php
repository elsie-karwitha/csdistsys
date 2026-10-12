<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname     = $_POST["fname"];
    $lname     = $_POST["lname"];
    $contactno = $_POST["contactno"];
    $email     = $_POST["email"];
    $address   = $_POST["address"];

    $stmt = $conn->prepare(
        "INSERT INTO userdata (fname, lname, contactno, email, address) VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->bind_param("sssss", $fname, $lname, $contactno, $email, $address);

    if ($stmt->execute()) {
        echo "<script>alert('Data inserted successfully'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}