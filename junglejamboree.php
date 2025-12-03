<?php
session_start();
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Dan";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Jungle Jamboree - EduBridge</title>
<link rel="stylesheet" href="junglejam.css" />
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
        JUNGLE JAMBOREE
    </div>



    <div class="animal-card-container">
        <div class="animal-card">
            <img src="assets/penguin.png" class="animal-img" alt="Animal">
        </div>
    </div>

    <div class="options-container">

        <div class="option-box" onclick="chooseHome('forest')">
            <img src="assets/habitat_forest.png" alt="Forest">
        </div>

        <div class="option-box" onclick="chooseHome('ice')">
            <img src="assets/habitat_ice.png" alt="Ice Area">
        </div>

        <div class="option-box" onclick="chooseHome('desert')">
            <img src="assets/habitat_desert.png" alt="Desert">
        </div>

        <div class="option-box" onclick="chooseHome('pond')">
            <img src="assets/habitat_pond.png" alt="Pond">
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

<script>
function chooseHome(choice) {
    if (choice === "ice") {
        alert("Correct! Penguins live in icy places! ❄️🐧");
    } else {
        alert("Oops! Try again!");
    }
}
</script>

</body>
</html>
