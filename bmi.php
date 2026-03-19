<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bmi</title>

    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                        url("body.jpg");
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
        }

        section{
            margin-top: 80px;
            width: 750px;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            display: flex;           
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
        }

        
        .left-img{
            flex: 1;
            background: url("bbb.png");
            background-size: cover;
            background-position: center;
            
        }

       
        .right-form{
            flex: 1;
            background: rgba(17, 17, 17, 0.1);
            backdrop-filter: blur(6px);
            padding: 30px;
            color: white;
        }

        .right-form h1{
            margin-bottom: 20px;
            font-size: 30px;
            color: #fff;
        }

        label{
            font-size: 22px;
        }

        input{
            background-color: #fff;
            height: 35px;
            width: 220px;
            border-radius: 5px;
            margin-top: 5px;
        }

        button{
            margin-top: 20px;
            height: 38px;
            width: 200px;
            border-radius: 8px;
            border: none;
            background: #454846ff;
            color: white;
            font-size: 18px;
        }

        button:hover{
            background: #02750cff;
        }
        

    </style>

</head>
<body>
    <?php
    $bmi="";
    if(isset($_POST["calculate"])){
        $hig=$_POST['h'];
        $wei=$_POST['w'];
        $bmi=$wei/($hig*$hig/1000);
    }
    ?>
<center>
    <form method="POST">
        <section>

           
            <div class="left-img"></div>
            
            <div class="right-form">
                <h1><b>Calculate BMI</b></h1>

                <label><b>Weight (kg)</b></label><br>
                <input type="text" name="w" required><br><br>

                <label><b>Height (cm)</b></label><br>
                <input type="text" name="h" required><br><br>

                <button type="submit" name="calculate">Calculate</button>
                <button class="button" type="reset">Reset</button>
                <br><br>
                <lable for ="">BMI Result</lable>
                <br>
                <input type="text" value="<?php echo $bmi;?>" name="bmi" readonly>
                    
            </div>


        </section>
    </form>
</center>

</body>
</html>
