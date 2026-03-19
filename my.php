<?php
session_start();
include "config.php";



$_SESSION['user_id'] = $user_id_from_db;
$_SESSION['username'] = $username;


//post insert complete

include "db.php";

$content = $_POST['content'];
$user_id = $_SESSION['user_id'];

mysqli_query($conn,
 "INSERT INTO posts (user_id, content)
  VALUES ('$user_id', '$content')");

header("Location: mywork.php");


//show all post
$posts = mysqli_query($conn,
"SELECT posts.*, users.username,
 (SELECT COUNT(*) FROM likes WHERE likes.post_id = posts.id) AS like_count
 FROM posts
 JOIN users ON users.id = posts.user_id
 ORDER BY posts.id DESC");


//own post edit and save but oter post not edit
 while($row = mysqli_fetch_assoc($posts)) { ?>

<div class="main">
<div class="<?= ($_SESSION['user_id']==$row['user_id']) ? 'box2':'box1' ?>">

<label><?= $row['username'] ?></label><br>

<?php if($_SESSION['user_id'] == $row['user_id']) { ?>
<!-- OWN POST -->

<form action="post_edit.php" method="POST">
<textarea class="table4" name="content"><?= $row['content'] ?></textarea>

<input type="hidden" name="post_id" value="<?= $row['id'] ?>">
<input type="submit" value="Save" class="button4">
</form>

<?php } else { ?>
<!-- OTHER POST -->
<textarea class="table3" disabled><?= $row['content'] ?></textarea>
<?php } ?>

<p><?= $row['like_count'] ?> Likes</p>

<a href="like.php?post_id=<?= $row['id'] ?>" class="button2">👍 Like</a>
<a href="unlike.php?post_id=<?= $row['id'] ?>" class="button3">👎 Unlike</a>

</div>
</div>

<?php } 



include "db.php";

$post_id = $_POST['post_id'];
$content = $_POST['content'];
$user_id = $_SESSION['user_id'];

mysqli_query($conn,
"UPDATE posts SET content='$content'
 WHERE id='$post_id' AND user_id='$user_id'");

header("Location: mywork.php");


//like

include "db.php";

$post_id = $_GET['post_id'];
$user_id = $_SESSION['user_id'];

$check = mysqli_query($conn,
"SELECT * FROM likes WHERE post_id='$post_id' AND user_id='$user_id'");

if(mysqli_num_rows($check) == 0){
    mysqli_query($conn,
    "INSERT INTO likes (post_id, user_id)
     VALUES ('$post_id','$user_id')");
}

header("Location: mywork.php");


//unlike

include "db.php";

$post_id = $_GET['post_id'];
$user_id = $_SESSION['user_id'];

mysqli_query($conn,
"DELETE FROM likes WHERE post_id='$post_id' AND user_id='$user_id'");

header("Location: dashboard.php");

?>













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

                        <textarea class="table1" placeholder="what's on your mind?" name="content"></textarea><br><br>

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