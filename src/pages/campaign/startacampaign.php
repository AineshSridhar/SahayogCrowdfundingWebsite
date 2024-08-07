<html>
<head>
<title>Start a campaign</title>
<link rel="stylesheet" href="../../styles.css" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
  rel="stylesheet"
/>
<style>
    .start-container {
        display: flex;
        border-radius:30px;
        padding: 30px;
        flex-direction: column;
        justify-content: center;
        max-width: 500px;
        margin: 30px auto 20px;
        border: 2px solid rgb(255, 162, 0);
        box-shadow:8px 8px 15px 1px #c6c6c6;
    }

    .start-container h1{
        margin-bottom:15px;
    }

    table{
        width: 100%;
    }

    th, td {
        padding: 10px;
    }

    input, textarea{
        margin-top: 5px;
        width: 100%;
        padding:5px;
        border-radius: 3px;
        border: 1px solid;
    }

    textarea{
        height: 100px;
        resize: none;
    }

    label{
        margin-bottom:5px;
    }

    button{
        background-color:rgb(255, 162, 0);
        width: 70px;
        padding: 10px;
        border-radius: 10px;
        border:none;
        margin-left: 40%;
    }
    

</style>
<body>
<?php include '../../navbar.php'; ?>
<div class="start-container">
    <h1>Start a campaign!</h1>
    <form method="POST">
        <table>
            <tr>
                <td>        
                    <label for="title">Title of Campaign</label>
                    <input type="text" name="title" placeholder="Enter title of campaign...">
                </td>
                <td>
                    <label for="domain">Domain</label>
                    <input type="text" name="domain" placeholder="Enter domain of campaign...">
                </td>
            </tr>
            <tr>
                <td>        
                    <label for="c_name">Company name</label>
                    <input type="text" name="c_name" placeholder="Enter company/individual name..." required>
                </td>
                <td>
                    <label for="amount">Amount to be raised</label>
                    <input type="text" name="amount" placeholder="Total amount to be raised..." required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="desc">Description</label>
                    <textarea name="desc" placeholder="Description of campaign..." required></textarea>
                </td>
            </tr>
            <tr>
                <td>        
                    <label for="c_name">Goal</label>
                    <input type="text" name="goal" placeholder="Fundraising expected by (date)..." required>
                </td>
                <td>
                    <label for="image">Image</label>
                    <input type="file" name="image" placeholder="Upload a related image..." required>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form> 
</div>
<?php include '../../bottom-navbar.php'; ?>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $domain = $_POST['domain'];
    $c_name = $_POST['c_name'];
    $amount = $_POST['amount'];
    $desc = $_POST['desc'];
    $goal = $_POST['goal'];

    $target_dir = "../../../public/camp_pics";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            $con = mysqli_connect("localhost", "root", "Monsterhigh1%", "project");
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO campaigns (Title, Domain, C_Name, Amount, Description, Goal, Image_Path) 
                    VALUES ('$title', '$domain', '$c_name', '$amount', '$desc', '$goal', '$target_file')";
            if (mysqli_query($con, $sql)) {
                echo "Campaign added successfully";
            } else {
                echo "Error: " . mysqli_error($con);
            }
            mysqli_close($con);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
