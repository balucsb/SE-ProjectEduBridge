<?php
include 'edubridge_db_connect.php';
$message = "";

if (isset($_POST['create'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password !== $confirm) {
        $message = "Passwords do not match!";
    } else {

        $parent_code = rand(100, 999);

   
        $check = $conn->prepare("SELECT parent_id FROM Parent WHERE parent_code=?");
        $check->bind_param("s", $parent_code);
        $check->execute();
        $check_result = $check->get_result();

        while ($check_result->num_rows > 0) {
            $parent_code = rand(100, 999); 
            $check->bind_param("s", $parent_code);
            $check->execute();
            $check_result = $check->get_result();
        }

        $sql = "INSERT INTO Parent (name, email_address, password, parent_code)
                VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $password, $parent_code);
        $stmt->execute();

        header("Location: signup_success.php?type=parent&code=$parent_code");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parent Sign Up - EduBridge</title>
    <link rel="stylesheet" href="signupdesign.css">
</head>
<body>
<div class="form-container">
    <h2>Parent Sign Up</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Enter your email" required><br><br>
        <input type="text" name="name" placeholder="Enter your name" required><br><br>
        <input type="password" name="password" placeholder="Enter a password" required><br><br>
        <input type="password" name="confirm" placeholder="Confirm password" required><br><br>
        <button type="submit" name="create">Create Account</button>
    </form>
    <p style="color:red;"><?php echo $message; ?></p>
</div>
</body>
</html>
