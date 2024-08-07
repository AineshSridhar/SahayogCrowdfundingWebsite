<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Crowdfunding Website</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h1{
          margin:30px 0 15px 120px;
        }

        .hero h1 {
            font-size: 3em;
            margin: 0;
        }
        .about-content {
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        .team {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .team-member {
            flex: 1;
            min-width: 200px;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .team-member img {
            width: 100%;
            height: auto;
            border-radius: 50%;
        }
        .team-member h3 {
            margin: 10px 0 5px;
            font-size: 1.2em;
        }
        .team-member p {
            margin: 0;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
  <?php include '../../navbar.php'; ?>
    <div class="hero">
        <h1>About Us</h1>
    </div>

    <div class="container">
        <div class="about-content">
            <h2>Our Mission</h2>
            <p>
                At Your Crowdfunding Website, our mission is to empower individuals and organizations
                to bring their innovative ideas to life through the power of community support. We
                believe in the potential of every project and aim to provide a platform that connects
                passionate backers with groundbreaking initiatives.
            </p>

            <h2>Our Story</h2>
            <p>
                Founded in 2024, we started with a simple idea: to make crowdfunding accessible and
                effective for everyone. Our team of dedicated professionals combines their expertise
                in technology, finance, and community building to offer a seamless and rewarding
                experience for both creators and supporters.
            </p>

            <h2>Meet the Team</h2>
            <div class="team">
                <div class="team-member">
                    <img src="../../images/team-member1.jpg" alt="Team Member 1">
                    <h3>Ainesh Sridhar</h3>
                    <p>Founder & CEO</p>
                    <p>Ainesh brings over a decade of experience in technology and entrepreneurship to the team. His vision drives the company's mission and growth.</p>
                </div>

                <div class="team-member">
                    <img src="../../images/team-member2.jpg" alt="Team Member 2">
                    <h3>Jane Smith</h3>
                    <p>Chief Operating Officer</p>
                    <p>Jane oversees the day-to-day operations of the company, ensuring that everything runs smoothly and efficiently.</p>
                </div>

                <div class="team-member">
                    <img src="../../images/team-member3.jpg" alt="Team Member 3">
                    <h3>Emily Johnson</h3>
                    <p>Marketing Director</p>
                    <p>Emily is responsible for our marketing strategies, helping to spread the word about our platform and attract new users.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Your Crowdfunding Website. All rights reserved.</p>
    </footer>
    <?php include '../../bottom-navbar.php'; ?>

</body>
</html>

