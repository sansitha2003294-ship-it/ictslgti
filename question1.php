<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        section {
            text-align: left;
            color: #050505ff;
            height: 800px;
            width: 1300px;
           display: flex; 
            border-radius: 20px;
            backdrop-filter: blur(6px);
            box-shadow: 0 0 15px rgba(1, 1, 1, 0.4);
        }

        label {
            display: inline-block;
            width: 180px;
            /* same width for all labels */
            font-size: 20px;
            color: white;
            margin-left: 50px;
           
        }

        input {
            right: inherit;
            background-color: rgba(214, 214, 214, 0.6);
            border-radius: 5px;
            border: none;
            height: 35px;
            width: 220px;
            margin-left: 30px; 
        }

        body {

            margin: 100px;
            background: linear-gradient(rgba(6, 6, 6, 0.6), rgba(6, 6, 6, 0.6)),
                url("logo.jpg");
            background-size: cover;
            background-position: center;
        }

        table {
            width: 600px;
            height: 500px;
            border: black;
            padding: 20px;
            margin: 90px;
            background-color: white;
            border-radius: 10px;
           box-shadow: 0 0 15px rgba(1, 1, 1, 0.4);
        }

        h1 {
            text-align: center;
            color: white;
            margin: 50px;
            padding: 20px;
            font-family: Tahoma, sans-serif;

        }
        .left{
           flex: 1;
        }
        .right{
            flex: 1;
        }
        th{
            color: #080808ff;
        }
        h3{
            color: #01013eff;
            margin-left: 50px;
        }
       


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $N="";
    $R="";
    $M="";
    $P="";
    $C="";
    $total="";
    $avg="";
    $res="";

    if(isset($_POST["Findresult"])){
        $N=$_POST["N"];
        $R=$_POST["R"];
        $M=$_POST["M"];
        $P=$_POST["P"];
        $C=$_POST["C"];
        $total=$M + $P +$C;
        $avg=$total/3;
        if($avg>50){
            $res='pass';
        }else{
            $res='Fail';
        }
        
    }
     ?>
    <center>
        <form action="" method="POST">
        <div class="table">
            <section>
                 <div class="left">
            
          
                <h1><b>STUDENT DETAILS</b></h1>
                <label><b>Name</b></label>
                <input type="text" name="N" required>
                <br><br>

                <label><b>Registration NO</b></label>
                <input type="text" name="R" required>
                <br><br>

                <h3>Subject Marks</h3>

                <label><b>Maths</b></label>
                <input type="number" name="M" required>
                <br><br>

                <label><b>Physics</b></label>
                <input type="number" name="P" required>
                <br><br>

                <label><b>Chemistry</b></label>
                <input type="number" name="C" required>
                <br><br>

                <input type="reset" value="clear" class="btn01">
                <input type="submit" value="view result sheet" class="btn02" name="findresult">
                </div>
                </form>
                  <div class="right">
                     
                    <table border="1">
                       
                        <tr>
                            <th>Name</th>
                            <td><?php echo $N ?></td>
                        </tr>
                            <th>Registration NO</th>
                            <td><?php echo $R ?></td>
                         </tr>
                            <th>Maths</th>
                            <td><?php echo $M ?></td>
                         </tr>
                            <th>Physics</th>
                            <td><?php echo $P ?></td>
                         </tr>
                            <th>Chemistry</th>
                            <td><?php echo $C ?></td>
                        </tr>
                        </tr>
                            <th>Subject 03 marks</th>
                            <td><?php echo $total ?></td>
                        </tr>
                        </tr>
                            <th>Average Marks</th>
                            <td><?php echo $avg ?></td>
                        </tr>
                        </tr>
                            <th>Result</th>
                            <td><?php echo $res ?></td>
                        </tr>
                    </table>
                  </div>

            </section>
        </div>
    </center>
</body>

</html>