<?php
session_start();
include 'edubridge_db_connect.php';
$message = "";

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

$sql = "SELECT * FROM Parent WHERE email_address=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$parent_result = $stmt->get_result();

 if($parent_result->num_rows > 0){
$_SESSION['user_type'] = 'parent';
$_SESSION['user_email'] = $email;
header("Location: dashboard_parent.php");
        exit();
  } else {
$sql = "SELECT * FROM Child WHERE email_address=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$child_result = $stmt->get_result();

  if($child_result->num_rows > 0){
$_SESSION['user_type'] = 'child';
$_SESSION['user_email'] = $email;
$child_data = $child_result->fetch_assoc();
$_SESSION['child_id'] = $child_data['child_id'];
   header("Location: dashboard_child.php");
exit();
 } else {
     $message = "Invalid email or password!";
  }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - EduBridge</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST">
            <input type="email" name="email" placeholder="Enter your email" required><br><br>
            <input type="password" name="password" placeholder="Enter your password" required><br><br>
            <button type="submit" name="login">Login</button>
        </form>
        <p style="color:red;"><?php echo $message; ?></p>
        <p>Don't have an account?</p>
        <a href="signup.php"><button>Sign Up</button></a>
    </div>
</body>
</html>
