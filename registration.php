<?php

$conn = mysqli_connect("localhost", "root", "", "userdetail");

if (!$conn) {
    die("Database connection failed");
}
$N = "";
$uname = "";
$fname = "";
$lname = "";
$passw = "";
$cpa = "";
$maill = "";
$gen = "";

if (isset($_POST["register"])) {
    $uname = $_POST['us'];
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $passw = md5($_POST['pass']);
    $cpa = md5($_POST['cpass']);
    $maill = $_POST['mail'];
    $gen = $_POST['gend'];
    if ($passw != $cpa) {
        echo " Password not match ";
    } else {

        $sql = "INSERT INTO users 
        (username, firstname, lastname, password, confirmpassword, email, gender)
        VALUES 
        ('$uname', '$fname', '$lname', '$passw', '$cpa', '$maill', '$gen')";

        if (mysqli_query($conn, $sql)) {
            echo " save to the database";
        } else {
            echo " Error: " . mysqli_error($conn);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head> 



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-label {
            padding: 10px;
            display: flex;
            
        }

        .right {
            flex: 1;
            padding-right: 50px;
        }

        .left {
            flex: 1;
            text-align: left;
           
            padding-left: 40px;
        }

        form {
            width: 500px;
            height: 600px;
            background-color: #34cfeeff;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);

        }

        .acc {
            display: flex;
            margin-left: 45px;
        }

        .button {
            border-radius: 5px;
            color: white;
            padding-right: 10px;
            border: none;
            gap: 30px;
            background-color: blue;
            width: 100px;
            height: 30px;

        }

        .para {
            color: #000;

        }

        .us {
            margin-top: 40px;
        }

        .boxx {
            width: 18px;
            height: 18px;
            accent-color: #960808ff;
            background-color: #000;

        }

        .re {
            padding-left: 50px;
        }

        section {
            display: flex;
            width: 1000px;
            height: 600px;
            background-color: #a19d9dff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
        }

        table {
            width: 300px;
            height: 500px;
            margin-left: 30px;
            margin-top: 30px;
            border-color: #000;
        }

        th {
            text-align: left;
            padding-left: 30px;
        }
        body{
            background-color: #c6c6c6ff;
        }
    </style>
</head>
<center>

    <body>
        <h3>Demo PHP User Registration Form</h3>
        <center>
            <section>
                <div class="left-side">
                    <form action="" method="POST">
                        <div class="form-label">
                            <div class="left">
                                <label class="us">Userame</label>
                            </div>
                            <div class="right">
                                <input type="text" name="us" class="box" required>
                            </div> <br><br>
                        </div>
                        <div class="form-label">
                            <div class="left">
                                <label>First Name</label>
                            </div>
                            <div class="right">
                                <input type="text" name="fn" class="box" required> <br><br>
                            </div>
                        </div>
                        <div class="form-label">
                            <div class="left">
                                <label>Last Name</label>
                            </div>
                            <div class="right">
                                <input type="text" name="ln" class="box" required>
                            </div> <br><br>
                        </div>
                        <div class="form-label">
                            <div class="left">
                                <label>Password</label>
                            </div>
                            <div class="right">
                                <input type="password" name="pass" class="box" required>
                            </div><br><br>
                        </div>
                        <div class="form-label">
                            <div class="left">
                                <label class="u">Confirm Password</label>
                            </div>
                            <div class="right">
                                <input type="password" name="cpass" class="box" required>
                            </div> <br><br>
                        </div>
                        <div class="form-label">
                            <div class="left">
                                <label class="u">Email</label>
                            </div>
                            <div class="right">
                                <input type="mail" name="mail" class="box" required>
                            </div><br><br>
                        </div>
                        <div class="form-label">
                            <div class="left">
                                <label class="gend">Gender</label>
                            </div>
                            <div class="right">
                                <input type="radio" name="gend"value="male" required>Male

                                <input type="radio" name="gend" value="female">female
                            </div>
                        </div><br><br>
                        <div class="acc">
                            <div class="se">
                                <input class="boxx" type="checkbox" required>
                                <lable class="para">I accept terms and conditions</lable>
                            </div>
                            <div class="re">
                                <input type="submit" value="Register" name="register" class="button">
                            </div>
                        </div>
                </div>
                <div class="right-side">
                    <table border="1">
                        <tr>
                            <th>username</th>
                            <td><?php echo $uname ?></td>
                        </tr>
                        <tr>
                            <th>Firstname</th>
                            <td><?php echo $fname ?></td>
                        </tr>
                        <tr>
                            <th>Lastname</th>
                            <td><?php echo $lname ?></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><?php echo $passw ?></td>
                        </tr>
                        <tr>
                            <th>Confirmpassword</th>
                            <td><?php echo $cpa ?></td>
                        </tr>
                        <tr>
                            <th>mail</th>
                            <td><?php echo $maill ?></td>
                        </tr>
                        <tr>
                            <th>gender</th>
                            <td><?php echo $gen ?></td>


                        </tr>
                    </table>



                    </form>
                </div>
            </section>
        </center>
    </body>
</center>

</html>