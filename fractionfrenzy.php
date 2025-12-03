<?php
session_start();
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Dan";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraction Frenzy - EduBridge</title>
    <link rel="stylesheet" href="fractionfrenzy.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="app-wrapper">

    <header class="top-bar">
        <div class="left-nav">
            <div class="hamburger"><span></span><span></span><span></span></div>
            <h1 class="logo-text">Edu<span class="logo-highlight">Bridge</span></h1>
        </div>

        <div class="user-info">
            <span class="greeting">Hi, <?php echo htmlspecialchars($username); ?>!</span>
            <div class="avatar-circle">
                <img src="assets/avatar_placeholder.png" alt="User" 
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='block';"> 
                <div class="img-fallback" style="display:none;">👤</div>
            </div>
        </div>
    </header>

  
    <div class="game-header-bar">
        <h1>MINI GAMES</h1>
    </div>

    <div class="game-title-box">
        <h2>FRACTION FRENZY</h2>
    </div>

    
    <main class="content-area game-layout">

        <div class="question-row">
            <span class="question-icon">❓</span>
            <h2 class="question-text">What is 1/2 of 10?</h2>
        </div>


        <div class="options-grid">
            <button class="option-card" onclick="checkAnswer(8)">8</button>
            <button class="option-card" onclick="checkAnswer(3)">3</button>
            <button class="option-card" onclick="checkAnswer(5)">5</button>
            <button class="option-card" onclick="checkAnswer(10)">10</button>
        </div>

    </main>

    <nav class="bottom-nav">
        <a href="childdashboard.php" class="nav-item"><span class="icon">★</span><span class="label">Home</span></a>
        <a href="#" class="nav-item"><span class="icon">✪</span><span class="label">Badges</span></a>
        <a href="#" class="nav-item"><span class="icon">⬇</span><span class="label">Downloads</span></a>
    </nav>

</div>

<script>
function checkAnswer(selected) {
    if(selected === 5) {
        alert("Correct! 1/2 of 10 is 5!");
    } else {
        alert("Incorrect! Try again.");
    }
}
</script>

</body>
</html>
