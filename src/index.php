<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crowdfunding Platform</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <style>
      hr{
        width:500px;
        margin: 0px auto 60px auto;
      }

      .container{
          display: flex;
          align-items: center;
          gap:160px;
      }

      .container img{
          height:50%;
      }

      .container h1{
          color:rgb(255, 162, 0);
          margin: 200px 0 0 50px;
          font-size: 50px;
      }

      .container p{
          color: rgb(108, 106, 106);
          margin: 15px 0 155px 50px;
          font-size:19px;
      }

      .record{
          margin: 50px 0;
          display: flex;  
          justify-content: center;
          gap: 10%;
      }

      .record h1{
          font-size: 80px;
          margin-bottom: 20px;
          color:rgb(255, 162, 0);
      }

      .record p{
          font-size: 20px;
          color:rgb(132, 131, 131);
      }

      .count1, .count2, .count3{
          display: flex;
          flex-direction: column;
          align-items: center;
      }

      .join{
          text-align: center;
          margin: 80px 0 60px;
      }

      .content{
          display: flex;
      }

      .content h1{
          padding: 30px 0;
          text-align: center;
      }

      .categories{
          background-color: rgb(254, 254, 237);
          width: 100%;
      }

      .categories h2{
          margin: 30px 40px 20px;
      }

      .medical-section{
          display: flex;
          justify-content: center;
          gap: 40px;
          margin: 0 auto;
      }

      .medical{
          width: 300px;
          padding: 10px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          border-radius: 15px;
      }

      .medical img{
          height: 200px;
          width: auto;
          border-radius: 10px;
      }

      .medical h3{
          text-align: center;
          padding: 10px;
          font-size: 25px;
      }

      .medical p{
          font-size: 16px;
          text-align: left;
      }
    </style>
  </head>
  <body>
    <?php
      session_start();
      $loggedInUser = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    ?>
    <div class="navbar">
          <div class="logo">
            <a href="index.html"><img src="../public/logo.png" alt="logo" /></a>
          </div>
          <div class="navbar-center">
            <a href="pages/explore/explore.php">Explore</a>
            <a href="pages/stories/stories.php">Stories</a>
            <a href="pages/about/about.php">About</a>
            <a href="pages/contact/contact.php">Contact</a>
          </div>
          <div class="navbar-right">
            <a class="startcamp" href="pages/campaign/startacampaign.php">Start a Campaign</a>
            <?php if ($loggedInUser): ?>
              <span class="login">Hi, <?= htmlspecialchars($loggedInUser) ?></span>
              <?php else: ?>
              <a class="login" href="pages/login/logincheck.php">Log in</a>
            <?php endif; ?>
          </div>
        </div>
        <div class="container">
          <div class="header-container">
            <h1>Let's do this together... for a better place!</h1>
            <p>
              Sahayog is a platform where you can find numerous verified projects
              initiated by skilled and knowledgable individuals to bring about a
              chnage in the World, for its better.
            </p>
          </div>
          <img
            src="https://media.istockphoto.com/id/1219719976/vector/tiny-male-and-female-characters-bring-golden-coins-to-huge-box-with-man-yelling-to-megaphone.jpg?s=612x612&w=0&k=20&c=fCJQnCJWmOfOBJdKURso9fbqd-CclaisqmjSrYb4-Vw="
            alt="crowdfunding"
          />
        </div>
        <div class="record">
          <div class="count1">
            <h1>455</h1>
            <p>Projects funded</p>
          </div>
          <div class="count2">
            <h1>24</h1>
            <p>Impact in sectors</p>
          </div>
          <div class="count3">
            <h1>Rs.1,44,00,203</h1>
            <p>Raised so far!</p>
          </div>
        </div>
        <h1 class="join">Join the journey along with thousands others!</h1>
        <hr />
        <div class="content">
          <div class="categories">
            <h2>Medical Campaigns</h2>
            <div class="medical-section" id="medical-section">
            </div>
          </div>
        </div>
        <div class="navbar-bottom">
          <div class="navbar-container-content">
              <p>
              At Sahayog, we strive to connect passionate individuals with meaningful causes. Our platform enables you to discover, support, and share fundraising campaigns that make a real difference in communities worldwide. Join us in making a positive impact, one campaign at a time.
              </p>
          </div>
          <div class="navbar-bottom-container">
              <a href="pages/explore/explore.php">Explore</a>
              <a href="pages/stories/stories.php">Stories</a>
              <a href="pages/about/about.php">About</a>
              <a href="pages/contact/contact.php">Contact</a>
          </div>
    </div>

        <script src="script.js"></script>
      </body>
    </html>

