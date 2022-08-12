
<!DOCTYPE html>
<html>
<style>
  body {
    font-family: Arial;
  }

  * {
    box-sizing: border-box
  }


  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 12px;
    margin: 5px 0 20px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus,
  input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }


  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }


  .cancelbtn,
  .signupbtn {
    float: left;
    width: 50%;
  }


  .container {
    padding: 16px;
  }


  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }
</style>

<body>

  <form action="signupmail.php" method="post" style="border:1px solid #ccc">
    <div class="container">
      <h1>Sign Up</h1>

      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="mail" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password" required>

      <div class="clearfix">
        <button type="button" class="cancelbtn"> <a href="blog.html" style="text-decoration: none; color: white" > Cancel </a> </button>
        <button type="submit" class="signupbtn" name="signup">Sign Up</button>
      </div>
    </div>
  </form>

</body>

</html>
<?php
$servername = "localhost";
$username = "admin";
$password = "admin";


$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>