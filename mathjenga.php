<?php
session_start();
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Dan";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Math Jenga - EduBridge</title>
<link rel="stylesheet" href="mathjenga.css" />
</head>
<body>

<div class="app-wrapper">

    <header class="top-bar">
        <div class="left-nav">
            <h1 class="logo-text">Edu<span class="logo-highlight">Bridge</span></h1>
        </div>
        
        <div class="user-info">
            <span class="greeting">Hi, <?php echo htmlspecialchars($username); ?>!</span>
            <div class="avatar-circle">
                <img src="assets/avatar_placeholder.png" alt="User" onerror="this.style.display='none'">
                <div class="img-fallback">👤</div>
            </div>
        </div>
    </header>

    <div class="page-header">
        MATH JENGA
    </div>

    <div class="subheading">Click on any Jenga block to solve the equation.</div>

    <div class="jenga-container" id="jengaContainer">

    </div>

    <div class="answer-section">
        <h3>WHAT IS THE ANSWER?</h3>
        <div class="answer-buttons">
            <div class="answer-button" onclick="selectAnswer(1)">1</div>
            <div class="answer-button" onclick="selectAnswer(0)">0</div>
        </div>
    </div>

         <nav class="bottom-nav">
            <a href="childdashboard.php" class="nav-item">
                <span class="icon">★</span> <span class="label">Home</span>
            </a>
            <a href="#" class="nav-item">
                <span class="icon">✪</span> <span class="label">Badges</span>
            </a>
            <a href="#" class="nav-item">
                <span class="icon">⬇</span> <span class="label">Downloads</span>
            </a>
        </nav>
</div>

<script src="math_jenga_script.js"></script>

</body>
</html>
