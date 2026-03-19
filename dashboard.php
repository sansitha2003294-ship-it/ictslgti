<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <style>
        body {
            background-color: #d1ceceff;
        }

        .table1 {
            width: 650px;
            height: 150px;
            border-radius: 5px;
            margin-top: 30px;
            margin-left: 45px;
            border-color: gray;
            padding: 12px;
            box-sizing: border-box;


        }

        .button {
            background-color: blue;
            width: 70px;
            height: 30px;
            color: white;
            border: none;
            border-radius: 5px;
            float: left;
            margin-left: 30px;
        }

        .button3 {
            background-color: blue;
            width: 70px;
            height: 30px;
            color: white;
            border: none;
            border-radius: 5px;

        }

        .button2 {
            background-color: gray;
            color: white;
            border: none;
            width: 70px;
            height: 30px;
            border-radius: 5px;
        }

        .main {
            background-color: white;
            width: 750px;
            height: 280px;

            border-radius: 5px;

        }

        .table3 {
            width: 700px;
            height: 100px;
            border: none;

         
            border-radius: 5px;
            margin-top: 30px;
            margin-left: 45px;
            border-color: gray;
            padding: 12px;
            box-sizing: border-box;
        }



        .table4 {
            width: 700px;
            height: 150px;
            border-radius: 5px;
            margin-left: 45px;
            border-color: gray;

          
            height: 150px;
            border-radius: 5px;
            margin-top: 30px;
            
            border-color: gray;
            padding: 12px;
            box-sizing: border-box;
        }

        .button4 {
            background-color: green;
            width: 70px;
            height: 30px;
            color: white;
            border: none;
            border-radius: 5px;
            align-items: left;
            margin-left: 30px;
            float: left;
        }

        .but {
            float: right;
            padding-right: 30px;
        }

        .but1 {
            float: right;
            padding-right: 30px;
        }

        .box2 {
            border-left: 5px solid green;
            height: 250px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <center>
        <section>

            <form action="" method="POST">
                <div class="main">
                    <div class="box1" border="1">

                        <textarea class="table1" placeholder="what's on your mind?"></textarea><br><br>

                        <input type="submit" value="Post" class="button">
                    </div>
                </div>
                <br><br><br>
            </form>
            <form action="" method="POST">
                <div class="main">
                    <div class="box1">
                        <textarea class="table3" placeholder=""></textarea><br><br>

                        <br><br><br>
                        <hr>
                        <div class="but">
                            <input type="submit" value="👍llike" class="button2">
                            <input type="submit" value="👎Unlike" class="button3"><br>
                        </div>


                    </div>
                </div>
                <br><br><br>
            </form>
            <form action="" method="POST">
                <div class="main">
                    <div class="box2" border="1">
                        <lable class="l">You</lable><br>
                        <textarea class="table4" placeholder="This is my own post.I can edit this content."></textarea><br><br>



                        <input type="submit" value="save" class="button4">
                        <div class="but1">
                            <input type="submit" value="👍like" class="button2">

                            <input type="submit" value="👎Unlike" class="button3">
                        </div>
                    </div>
            </form>
            </div>
            </form>

        </section>
    </center>
</body>

</html>