<?php
$type = $_GET['type'] ?? '';
$code = $_GET['code'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Created - EduBridge</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Account created successfully!</h2>
        <?php if($type == 'parent'): ?>
            <p>Your secret Parent code is: <strong><?php echo $code; ?></strong></p>
            <p>NOTE: Do not share this code with anyone else. Use this Parent code to create your Child's account.</p>
        <?php else: ?>
            <p>Login back to the main page to continue.</p>
        <?php endif; ?>
        <a href="login.php"><button>Continue</button></a>
    </div>
</body>
</html>
