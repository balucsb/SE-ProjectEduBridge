<?php //include 'sidebar.php'; ?>

<?php
session_start();
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : "Bea";

$categories = [
    ["title" => "NUMBERS", "color" => "#FAD02E", "link" => "numbergame.php"],
    ["title" => "ANIMALS & PLANTS", "color" => "#A3CB38"],
    ["title" => "READING & WRITING", "color" => "#EA2027"],
    ["title" => "MINI GAMES", "color" => "#006266"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - EduBridge</title>
    <link rel="stylesheet" href="childdash.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <div class="app-wrapper">
        
        <header class="top-bar">
            <div class="brand-section">
                <h1 class="logo-text">Edu<span class="logo-highlight">Bridge</span></h1>
                
                 <!-- <nav class="desktop-nav">
                    <a href="#" class="active">Home</a>
                    <a href="#">Badges</a>
                    <a href="#">Downloads</a>
                    <a href="#">Profile</a>
                </nav>-->
            </div>
            
            <div class="user-info">
                <span class="greeting">Hi, <?php echo $username; ?>!</span>
                <div class="avatar-circle">
                    <img src="https://via.placeholder.com/40" alt="User">
                </div>
            </div>
        </header>

        <main class="content-area">
            
            <section class="section-block">
                <h2 class="section-title">Ready...set...learn!</h2>
                <div class="category-grid">
                <?php foreach($categories as $cat): ?>
                    <a href="<?php echo isset($cat['link']) ? $cat['link'] : '#'; ?>" 
                    class="cat-card" 
                    style="background-color: <?php echo $cat['color']; ?>;">
                    
                        <div class="img-placeholder">Image</div>
                        <span class="cat-title"><?php echo $cat['title']; ?></span>
                    </a>
                 <?php endforeach; ?>
                </div>
            </section>

            <div class="dual-section-row">
                <section class="section-block half-width">
                    <h2 class="section-title">Browse Videos</h2>
                    <div class="wide-card video-card">
                        <div class="wide-placeholder">
                            <span>Video Thumbnail</span>
                            <div class="play-icon">▶</div>
                        </div>
                    </div>
                </section>

                <section class="section-block half-width">
                    <h2 class="section-title">Browse Lessons</h2>
                    <div class="wide-card lesson-card">
                        <div class="wide-placeholder blue-theme">
                            <span>Lesson Thumbnail</span>
                        </div>
                    </div>
                </section>
            </div>

             <section class="section-block">
                <h2 class="section-title">Browse E-Books</h2>
                <div class="ebook-row">
                    <div class="book-cover">Book 1</div>
                    <div class="book-cover">Book 2</div>
                    <div class="book-cover">Book 3</div>
                    <div class="book-cover">Book 4</div>
                    <div class="book-cover">Book 5</div>
                </div>
            </section>

            <div class="spacer"></div>
        </main>

        <nav class="bottom-nav">
            <a href="#" class="nav-item active">
                <span class="label">Home</span>
            </a>
            <a href="#" class="nav-item">
                <span class="label">Badges</span>
            </a>
            <a href="#" class="nav-item">
                <span class="label">Downloads</span>
            </a>
        </nav>

    </div>

</body>
</html>