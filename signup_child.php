<?php
include 'edubridge_db_connect.php';
$message = "";

if(isset($_POST['create'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $parent_code = $_POST['parent_code'];

    if($password !== $confirm) {
        $message = "Passwords do not match!";
    } else {
        
        $sql = "SELECT parent_id FROM Parent WHERE parent_id IN (SELECT parent_id FROM Child WHERE parent_code=?) LIMIT 1";
        $sql = "SELECT parent_id FROM Parent LIMIT 1";
        $result = $conn->query($sql);
        $parent = $result->fetch_assoc();
        $parent_id = $parent['parent_id'];

        $sql = "INSERT INTO Child (name, email_address, parent_code, parent_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $email, $parent_code, $parent_id);
        $stmt->execute();

        header("Location: signup_success.php?type=child");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Child Sign Up - EduBridge</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Child Sign Up</h2>
        <form method="POST">
            <input type="email" name="email" placeholder="Enter your email" required><br><br>
            <input type="text" name="name" placeholder="Enter your name" required><br><br>
            <input type="password" name="password" placeholder="Enter a password" required><br><br>
            <input type="password" name="confirm" placeholder="Confirm password" required><br><br>
            <input type="text" name="parent_code" placeholder="Enter Parent Code" required><br><br>
            <button type="submit" name="create">Create Account</button>
        </form>
        <p style="color:red;"><?php echo $message;?></p>
    </div>
</body>
</html>
