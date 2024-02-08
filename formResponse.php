<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>response Form</title>
</head>
<body>
  <?php
  $fname = $_GET["fname"];
  $lname = $_GET["lname"];
  $password = $_GET["password"];
  $purpose = $_GET["purpose"];
  $email = $_GET["email"];

  echo '<style type="text/css">';
  echo '
  h1{ 
    color: red;
    font-size: 40px;
    // width: 50%;
    margin: 0 auto;
    border: 1px solid blue;
  }
  .submission{
    border: 2px double green;
    border-radius: 12px;
    width: 40%;
    margin: 30px auto;
    padding: 20px 30px;
  }

  .response p{
    font-size: 18px;
  }

  .response p:hover{
    background-color: rgba(210, 210, 210, 0.9);
    padding: 10px;
    border-radius: 5px;
  }
  ';
        
      
  echo '</style>';
  echo "
  <div class=\"submission\">
  <h1>Thanks for the submission.</h1>
  <div class=\"response\">
  <p>Name: $fname $lname</p>
  <p>Email: $email</p>
  <p>Submitted SOP: $purpose</p>
  <p>Password: $password</p>
  </div>
  <h2>Save your responses for future records.</h2>
  </div>";
  ?>

</body>
</html>