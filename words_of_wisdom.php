<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Words of Wisdom — EduBridge</title>
  <link rel="stylesheet" href="words_of_wisdom.css">
</head>
<body>
  <div class="phone-frame">
    <header class="top-bar">
      <button class="hamburger" aria-label="menu">☰</button>
      <div class="brand">Edu<span>Bridge</span></div>
      <div class="user">Hi, Molly! <img src="images/avatar.png" alt="avatar" class="avatar"></div>
    </header>

    <div class="green-header">
      <div class="title-pill">WORDS OF WISDOM</div>
    </div>

    <main class="content">
      <div class="grid">
        <article class="card big">
          <div class="num">1.</div>
          <h3>“It's Okay to Ask for Help.”</h3>
          <p>No one expects you to do it all alone, and asking for help shows strength, not weakness.</p>
        </article>

        <article class="card big">
          <div class="num">2.</div>
          <h3>Patience Is Your Superpower</h3>
          <p>Kids will test your limits, and frustration is normal. Patience helps build confidence and emotional regulation. Take deep breaths — this phase shall pass.</p>
        </article>

        <div class="card icon-card">
          <img src="images/wisdom_icon.png" alt="words of wisdom" />
          <div class="icon-label">WORDS OF WISDOM</div>
        </div>

        <article class="card small">
          <div class="num">3.</div>
          <h3>“The days are long, but the years are short.”</h3>
          <p>Cherish small moments — they pass quickly. One day you'll look back and wish you could relive them.</p>
        </article>

        <article class="card small">
          <div class="num">4.</div>
          <h3>“Mistakes are part of the process — both yours and theirs.”</h3>
          <p>Parenting isn't about perfection. It's about learning, growing and forgiving.</p>
        </article>
      </div>

      <div class="actions">
        <a href="parent_tips_section.php" class="btn btn-back">BACK</a>
        <a href="more_tips.php" class="btn btn-more">MORE TIPS ⤓</a>
      </div>
    </main>

    <nav class="bottom-nav">
      <a href="childdashboard.php" class="nav-item">Home</a>
      <a href="badges.php" class="nav-item">Badges</a>
      <a href="downloads.php" class="nav-item">Downloads</a>
    </nav>
  </div>

  <div class="page-bg"></div>
</body>
</html>
