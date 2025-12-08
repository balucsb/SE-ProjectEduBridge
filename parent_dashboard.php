<?php
session_start();
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'parent') {
    header("Location: login.php");
    exit();
}

$username = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : "Parent";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Dashboard - EduBridge</title>
    <link rel="stylesheet" href="parent_dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="app-wrapper">

<header class="top-bar">
    <div class="brand-section">
        <h1 class="logo-text">Edu<span class="logo-highlight">Bridge</span></h1>
    </div> 
    <div class="user-info">
        <span class="greeting">Welcome, <?php echo $username; ?>!</span>
        <div class="avatar-circle">
            <img src="https://via.placeholder.com/40" alt="User">
        </div>
    </div>
</header>

<main class="content-area">

<section class="section-block">
    <h2 class="section-title">Parent Dashboard</h2>

    <div class="category-grid">
        <a href="#" class="cat-card" style="background-color: #2C9DF0;">
            <div class="img-placeholder">📊</div>
            <span class="cat-title">Child Progress on Numbers</span>
        </a>

        <a href="#" class="cat-card" style="background-color: #FAD02E;">
            <div class="img-placeholder">👨‍👩‍👧‍👦</div>
            <span class="cat-title">Child Progress on Animals and Plants</span>
        </a>

        <a href="#" class="cat-card" style="background-color: #A3CB38;">
            <div class="img-placeholder">📚</div>
            <span class="cat-title">Child Progress on Reading and Writing</span>
        </a>

        <a href="#" class="cat-card" style="background-color: #EA2027;">
            <div class="img-placeholder">⚙️</div>
            <span class="cat-title">Child Progress on Mini Games</span>
        </a>
    </div>
</section>

<section class="section-block">
    <h2 class="section-title">Videos for Parents</h2>
    <div class="wide-card">
        <div class="wide-placeholder">
            <span><img src="parent_tips_section_pic.png" alt="Parent Tips Section" class="logo"></span>
            
        </div>
    </div>
</section>

<div class="spacer"></div>

</main>

<nav class="bottom-nav">
    <a href="#" class="nav-item active"><span class="label">Home</span></a>
    <a href="#" class="nav-item"><span class="label">Reports</span></a>
    <a href="#" class="nav-item"><span class="label">Account</span></a>
</nav>

</div>

</body>
</html>
