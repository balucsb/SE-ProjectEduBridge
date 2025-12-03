<?php
session_start();
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Dan";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Once Upon a Sentence - EduBridge</title>
    <link rel="stylesheet" href="readwritegame.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <div class="app-wrapper">
        
        <header class="top-bar">
            <div class="left-nav">
                <div class="hamburger">
                    <span></span><span></span><span></span>
                </div>
                <h1 class="logo-text">Edu<span class="logo-highlight">Bridge</span></h1>
            </div>
            
            <div class="user-info">
                <span class="greeting">Hi, <?php echo htmlspecialchars($username); ?>!</span>
                <div class="avatar-circle">
                    <img src="assets/avatar_placeholder.png" alt="User" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';"> 
                    <div class="img-fallback" style="display:none;">👤</div>
                </div>
            </div>
        </header>

        <div class="game-header-bar">
            <a href="readwrite.php" class="back-link">
                <span class="arrow-left">&#8592;</span> </a>
            <h1>ONCE UPON A SENTENCE</h1>
        </div>

        <main class="content-area game-layout">
            
            <div class="question-box">
                <h2>Which word rhymes with 'cat'?</h2>
            </div>

            <div class="options-grid">
                <button class="option-card green" onclick="checkAnswer('hat')">Hat</button>
                <button class="option-card red" onclick="checkAnswer('dog')">Dog</button>
                <button class="option-card blue" onclick="checkAnswer('fish')">Fish</button>
                <button class="option-card yellow" onclick="checkAnswer('cup')">Cup</button>
            </div>

        </main>

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

    <script>
        function checkAnswer(answer) {
            if(answer === 'hat') {
                alert("Correct! Hat rhymes with Cat!");
            } else {
                alert("Try again!");
            }
        }
    </script>

</body>
</html>