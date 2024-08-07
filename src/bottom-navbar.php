<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$loggedInUser = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<div class="navbar-bottom">
    <div class="navbar-container-content">
        <p>
        At Sahayog, we strive to connect passionate individuals with meaningful causes. Our platform enables you to discover, support, and share fundraising campaigns that make a real difference in communities worldwide. Join us in making a positive impact, one campaign at a time.
        </p>
    </div>
    <div class="navbar-bottom-container">
        <a href="../explore/explore.php">Explore</a>
        <a href="../stories/stories.php">Stories</a>
        <a href="../about/about.php">About</a>
        <a href="../contact/contact.php">Contact</a>
    </div>
</div>