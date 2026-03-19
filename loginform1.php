<?php


$ful = "";
$ema = "";
$pass = "";


include_once("config.php");

if (isset($_POST["register"])) {
    $ful = $_POST['fullname'];
    $ema = $_POST['email'];
    $pass = md5($_POST['password']);

    $sql = "INSERT INTO login (`username`, `email`, `password`) VALUES ('$ful','$ema','$pass')";
    if ($conn->query($sql)) {
        echo "insert Success";
    }
}

if (isset($_POST["login"])) {
    $email = $_POST["uname"];
    $pass = md5($_POST["pass"]);
    $r = $conn->query("SELECT * FROM login WHERE email='$email'");
    $u = $r->fetch_assoc();
    if ($pass == $u['password']) {
        $_SESSION['username'] = $u['fullname'];
        header("Location: dashboard1.php");
    } else {
        echo "check password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background-color: #f7f5f5ff;
        }

        section {
            background-color: #8d8b8bff;
            width: 1000px;
            height: 700px;

            /* CENTER */
            margin: 30px auto;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;

        }

        .main1 {
            display: flex;
            gap: 60px;
            border-radius: 10px;
        }

        .left {
            background-color: #ece9e9ff;
            width: 400px;
            height: 500px;
            border-radius: 10px;
        }

        .right {
            background-color: #ece9e9ff;
            width: 400px;
            height: 500px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

        }

        input {
            width: 200px;
            height: 30px;
            border-radius: 5px;
        }

        h2 {
            padding: 40px;
        }

        button {
            width: 150px;
            height: 30px;
        }
    </style>
</head>

<body>


    <center>
        <section>
            <center>
                <h2>WELCOME TO WEBSITE</h2>
                <div class="main1">
                    <div class="left">
                        <form action="" method="POST">
                            <h2>Create Account</h2>
                            <input type="text" name="fullname" placeholder="Fullname" required><br><br>
                            <input type="text" name="email" placeholder="email address" required><br><br>
                            <input type="password" name="password" placeholder="password" required><br><br>
                            <input type="submit" name="register">
                        </form>
                    </div>
                    <div class="right">
                        <form action="" method="POST">
                            <h3>Login Your Account</h3><br><br>
                            <div>
                                <label for="" placeholder="username" required>Email</label>
                                <input type="email" name="uname" placeholder="username"></input>
                            </div><br><br>
                            <div>
                                <label for="" placeholder="password" required class="pa">Password</label>
                                <input type="password" name="pass" placeholder="password"></input>
                            </div><BR><BR>
                            <div class="but">
                                <button name="login">login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </center>
        </section>
    </center>


</body>

</html>