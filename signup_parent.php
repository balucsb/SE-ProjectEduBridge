<?php
include 'edubridge_db_connect.php';
$message = "";

if(isset($_POST['create'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password !== $confirm) {
        $message = "Passwords do not match!";
    } else {
        $parent_code = substr(md5(uniqid()),0,6);
        $sql = "INSERT INTO Parent (name, email_address, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password);
        $stmt->execute();
        $parent_id = $stmt->insert_id;
        header("Location: signup_success.php?type=parent&code=$parent_code");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
