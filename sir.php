<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Social Media | Login & Register</title>
  <?php
  include_once("config.php");
  if (isset($_POST["register"])) {
    $ful = $_POST['fullname'];
    $ema = $_POST['email'];
    $pass = md5($_POST['password']);

    $sql = "INSERT INTO `user`(`fullname`, `email`, `password`) VALUES ('$ful','$ema','$pass')";
    if ($conn->query($sql)) {
      echo "insert Success";
    }
  }

  if (isset($_POST["signin"])) {
    $email = $_POST["loginemail"];
    $pass = md5($_POST["loginpassword"]);
    $r = $conn->query("SELECT * FROM user WHERE email='$email'");
    $u = $r->fetch_assoc();
    if ($pass == $u['password']) {
      $_SESSION['user'] = $u['fullname'];
      header("Location: dashboard.php");
    } else {
      echo "check password";
    }
  }
  ?>
  <link rel="stylesheet" href="style.css">

  <style>
    * {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}


body {
  margin: 0;
  
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}


.container {
  width: 90%;
  max-width: 1100px;
}

.row {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  gap: 20px;
}


.col-6 {
  grid-column: span 6;
}


.card {
  background: #ffffff;
  padding: 35px;
  border-radius: 10px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}


h2 {
  margin-bottom: 20px;
  color: #1877f2;
  text-align: center;
}


input {
  width: 100%;
  padding: 12px;
  margin-bottom: 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 15px;
}


button {
  width: 100%;
  padding: 12px;
  background: #1877f2;
  border: none;
  color: #fff;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
}

button:hover {
  background: #145dbf;
}


.social-btn {
  margin-top: 10px;
  background: #42b72a;
}

.social-btn:hover {
  background: #36a420;
}


p {
  text-align: center;
  color: #555;
  font-size: 14px;
}


@media (max-width: 768px) {
  .col-6 {
    grid-column: span 12;
  }
}
  </style>
</head>

<body>

  <div class="container">
    <div class="row">

      <!-- LOGIN -->
      <div class="col-6">
        <div class="card">
          <h2>Login</h2>
          <form method="POST">
            <input type="email" placeholder="Email address" name="loginemail" required>
            <input type="password" placeholder="Password" name="loginpassword" required>
            <input type="submit" value="Signin" name="signin">
          </form>
        </div>
      </div>

      <!-- REGISTER -->
      <div class="col-6">
        <div class="card">
          <h2>Create Account</h2>
          <form method="POST">
            <input type="text" placeholder="Full Name" name="fullname" required>
            <input type="email" placeholder="Email address" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="Register" name="register">
            <p>Join our social media community</p>
          </form>
        </div>
      </div>

    </div>
  </div>

</body>

</html>