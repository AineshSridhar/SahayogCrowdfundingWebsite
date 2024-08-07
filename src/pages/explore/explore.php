<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crowdfunding Platform</title>
    <link rel="stylesheet" href="../../styles.css" />
    <link rel="stylesheet" href="explore-styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php include '../../navbar.php'; ?>
    <h1>Where do you want to make an impact?</h1>
    <form method="GET" class="search-bar">
      <input type="text" name="query" placeholder="Search.." class="search-input" value="<?php echo isset($_GET['query']) ? htmlspecialchars($_GET['query']) : ''; ?>" />
      <a href="#" class="icon-container" onclick="document.querySelector('.search-bar').submit();">
        <img src="../../../public/search-interface-symbol.png" alt="search-icon" class="search-icon" />
      </a>
    </form>
    <div class="campaign-container">
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "Monsterhigh1%";      
        $dbname = "project";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $searchQuery = "";
        if (isset($_GET['query'])) {
          $searchQuery = $_GET['query'];
          $sql = "SELECT ID, Title, Domain, C_Name, Amount, Description, Goal FROM campaigns WHERE Title LIKE '%$searchQuery%' OR Domain LIKE '%$searchQuery%' OR C_Name LIKE '%$searchQuery%' OR Description LIKE '%$searchQuery%'";
        } else {
          $sql = "SELECT ID, Title, Domain, C_Name, Amount, Description, Goal FROM campaigns";
        }        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<a href='campaign.php?id=" . $row["ID"] . "' class='campaign-box'>";
            echo "<div class='campaign-title'>" . $row["Title"] . "</div><br>";
            echo "<div class='campaign-domain'>Domain: " . $row["Domain"] . "</div><br>";
            echo "<div class='campaign-company'>Company: " . $row["C_Name"] . "</div><br>";
            echo "<div class='campaign-amount'>To raise: $" . $row["Amount"] . "</div><br>";
            echo "<div class='campaign-goal'>Goal: $" . $row["Goal"] . "</div><br>";
            echo "<div class='campaign-description'>Description: " . $row["Description"] . "</div><br>";
            echo "</a>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
      ?>
    </div>
    <?php include '../../bottom-navbar.php'; ?>
  </body>
</html>
