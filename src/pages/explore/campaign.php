<?php
$servername = "localhost";
$username = "root";
$password = "Monsterhigh1%";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $sql = "SELECT Title, Domain, C_Name, Amount, Description, Goal, Path FROM campaigns WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($title, $domain, $company, $amount, $description, $goal, $image_path);
    $stmt->fetch();
    $stmt->close();
} else {
    die("Could not find campaign");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link rel="stylesheet" href="../../styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <style>
        h1{
            margin-bottom: 20px;
        }

        strong{
            margin-right: 10px;
        }

        h3{
            margin-bottom: 10px;
        }
        
        .container{
            display: flex;
        }

        .content-container{
            padding: 30px;
            width: 70%;
            margin: 50px 0px 50px 50px;
            display: flex;
            flex-direction: column;
            background-color: #f5f5f5;
            border-radius: 30px;
        }

        .content-container p{
            font-size: 20px;
            margin-bottom: 15px;
        }

        .image-container{
            margin-top: 60px;
            height: auto;
            margin-bottom: 20px;
        }

        .image-container img{
            margin-left: 100px;
            max-width: 70%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php include '../../navbar.php'; ?>
    <div class="container">
        <div class="content-container">
        <h1><?php echo htmlspecialchars($title); ?></h1>
        <hr><br>
            <p><strong>Domain:</strong><?php echo htmlspecialchars($domain); ?></p>
            <p><strong>Company:</strong><?php echo htmlspecialchars($company); ?></p>
            <p><strong>Amount to raise:</strong><?php echo htmlspecialchars($amount); ?></p>
            <p><strong>Goal:</strong><?php echo htmlspecialchars($goal); ?></p>
            <p><strong id="desc">Description:</strong><br><?php echo htmlspecialchars($description); ?></p>
        </div>
        <div class="image-container">
            <?php if(!empty($image_path)): ?>
            <img src="<?php echo htmlspecialchars($image_path); ?>" alt="<?php echo htmlspecialchars($title); ?>">
            <?php endif; ?>
        </div>
    </div>
    <?php include '../../bottom-navbar.php'; ?>
</body>
</html>