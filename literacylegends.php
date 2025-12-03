<?php
session_start();
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Dan";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literacy Legends - EduBridge</title>
    <link rel="stylesheet" href="literacylegends.css">
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
        <a href="readwrite.php" class="back-link"><span class="arrow-left">&#8592;</span></a>
        <h1>MINI GAMES</h1>
    </div>

   
    <div class="game-title-box">
        <h2>LITERACY LEGENDS</h2>
        <img src="assets/bird_tree.png" class="game-image" alt="Bird on Tree">
    </div>


    <main class="content-area game-layout">

        <h2 class="question-text">The bird is on the?</h2>


        <div class="options-grid">
            <button class="option-card red" onclick="checkAnswer('Tree')">Tree</button>
            <button class="option-card orange" onclick="checkAnswer('Car')">Car</button>
            <button class="option-card blue" onclick="checkAnswer('Water')">Water</button>
            <button class="option-card green" onclick="checkAnswer('House')">House</button>
        </div>

    </main>


    <nav class="bottom-nav">
        <a href="childdashboard.php" class="nav-item"><span class="icon">★</span><span class="label">Home</span></a>
        <a href="#" class="nav-item"><span class="icon">✪</span><span class="label">Badges</span></a>
        <a href="#" class="nav-item"><span class="icon">⬇</span><span class="label">Downloads</span></a>
    </nav>

</div>

<script>
function checkAnswer(ans) {
    if(ans === "Tree") {
        alert("Correct! The bird is on the tree.");
    } else {
        alert("Incorrect, try again!");
    }
}
</script>

</body>
</html>
