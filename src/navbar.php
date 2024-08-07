<?php
session_start();
$loggedInUser = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<div class="navbar">
  <div class="logo">
    <a href="../../index.php"><img src="../../../public/logo.png" alt="logo" /></a>
  </div>
  <div class="navbar-center">
    <a href="../explore/explore.php">Explore</a>
    <a href="../stories/stories.php">Stories</a>
    <a href="../about/about.php">About</a>
    <a href="../contact/contact.php">Contact</a>
  </div>
  <div class="navbar-right">
    <a class="startcamp" href="../campaign/startacampaign.php">Start a Campaign</a>
    <?php if ($loggedInUser): ?>
      <span class="login">Hi, <?= htmlspecialchars($loggedInUser) ?></span>
    <?php else: ?>
      <a class="login" href="../login/logincheck.php">Log in</a>
    <?php endif; ?>
  </div>
</div>
