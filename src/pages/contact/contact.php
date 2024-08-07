<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crowdfunding Platform</title>
    <link rel="stylesheet" href="../../styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <style>
      hr{
          width:55%;
          margin-left: 70px;
      }

      .text-container h1{
          margin: 50px 0 0 70px;
          font-size:40px;
      }   

      .form-container{
        width: 800px;
        border-radius: 15px;
        padding: 20px;
        margin-left: 80px;
        font-size: 18px;
      }

      table{
        width: 100%
      }
      
      th, td {
          padding: 10px;
      }

      input{
        font-size: 16px;
        padding: 5px;
        margin-left: 5px;
        border-radius: 5px;
      }

      textarea{
        width: 92%;
        height: 200px;
        font-size: 16px;
        margin-top: 10px;
        border-radius: 5px;
        padding: 10px;
        border: 2px solid black;
        resize: none;
      }

      #email{
        margin-left: 40px;
      }

      button{
        background-color:rgb(255, 162, 0);
        width: 70px;
        padding: 10px;
        margin: 20px 0 0 15px;
        border-radius: 10px;
        border:none;
    }
    </style>
  </head>
  <body>
  <?php include '../../navbar.php'; ?>
    <div class="contact-us">
      <div class="text-container">
        <h1>Reach out to us!</h1>
        <hr />
      </div>
    </div>
    <div class="form-container">
      <form method="POST">
        <table>
            <tr>
                <td>        
                    <label for="fname" class="column1">First name</label>
                    <input type="text" placeholder="Enter first name..." name="fname">
                </td>
                <td>
                    <label for="lname">Last name</label>
                    <input type="text" placeholder="Enter last name..." name="lname">
                </td>
            </tr>
            <tr>
                <td colspan="2">        
                    <label for="email" class="email">E-mail</label>
                    <input type="email" placeholder="Enter e-mail address..." name="email" id="email">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="desc">Query</label><br>
                    <textarea name="desc" placeholder="Enter your query/message..."></textarea>
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
if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $desc = $_POST['desc'];
  $con = mysqliconnect("localhost", "root", "Monsterhigh1%", "project");
  $sql = "INSERT INTO queries(fname,lname,email,query) VALUES ('$fname', '$lname', '$email', '$desc');
  $result = mysqli_query($con
}
?>