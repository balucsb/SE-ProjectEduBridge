<?php
session_start();
// Default to "Dan" to match the photo if no session is set
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Dan";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers - EduBridge</title>
    <link rel="stylesheet" href="number.css">
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
                <span class="greeting">Hi, <?php echo $username; ?>!</span>
                <div class="avatar-circle">
                    <img src="assets/avatar_placeholder.png" alt="User" onerror="this.style.display='none'"> 
                    <div class="img-fallback">👤</div>
                </div>
            </div>
        </header>

        <div class="category-banner">
            <h1>NUMBERS</h1>
        </div>

        <main class="content-area">
            
            <section class="section-block">
                <h2 class="section-title">Learn the basics</h2>
                
                <div class="featured-card">
                    <div class="image-container featured-img-placeholder">
                        <span class="placeholder-text">Place "Dragons & Balloons" Image Here</span>
                    </div>
                </div>
            </section>

            <section class="section-block">
                <h2 class="section-title">Activities</h2>

                <a href="math_jenga_game.php" class="activity-card-link">
                    <div class="activity-card">
                        <div class="activity-img-container">
                            <div class="img-placeholder jenga-placeholder">
                                <span>Jenga Img</span>
                            </div>
                        </div>
                        <div class="activity-details">
                            <h3 class="activity-title">MATH JENGA</h3>
                            <p class="activity-desc">A fun, computer-based activity that helps kids practice math skills while staying engaged in an interactive, hands-on way.</p>
                        </div>
                    </div>
                </a>

                <div class="activity-card">
                    <div class="activity-img-container">
                        <div class="img-placeholder quiz-placeholder">
                            <span>Quiz Img</span>
                        </div>
                    </div>
                    <div class="activity-details">
                        <h3 class="activity-title">QUIZ #5</h3>
                        <p class="activity-desc">This test will show your skills at skip counting. Click this message to start and challenge yourself! You can do it.</p>
                    </div>
                </div>

            </section>

            <div class="spacer"></div>
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

</body>
</html>