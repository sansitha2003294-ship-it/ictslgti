<?php
$ans=0;
$n1=0;
$n2=0;
$oper1=null;
if(isset($_POST['count'])){
  $n1=$_POST['num1'];
  $n2=$_POST['num2'];
  $oper1=$_POST['oper'];

  if($oper1=="+"){
    $ans=$n1+$n2;
  }
  else if($oper1=="-"){
    $ans=$n1-$n2;
  }
  else if($oper1=="/"){
    $ans=$n1/$n2;
  }
  else if($oper1=="*"){
    $ans=$n1*$n2;
  }else{
    $ans=0;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calculate</title>
  <style>
    .calculator {
      background-color: #2b86a2ff;
      width: 500px;
      height: 400px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(172, 202, 214, 0.4);
      ;
    }

    input {
      width: 400px;
      height: 35px;
      border: none;
      border-radius: 5px;

    }

    .rl {
      padding: 15px;
      display: flex;
      width: 400px;
      height: 35px;
      gap: 10px;

    }

    select {
      width: 120px;
      color: gray;
      width: 355px;
      height: 35px;
      padding-right: 30px;
      border: none;
      border-radius: 5px;

    }

    button {
      background-color: red;
      border: none;
      width: 60px;
      height: 35px;
      gap: 50px;
      border-radius: 5px;
    }

    h1 {
      margin: 60px;
      padding-top: 30px;
      font-family: Arial, Helvetica, sans-serif;
      color: #fdfcfcff;

    }
  </style>
</head>

<body>
  <center>
    <div class="calculator">

      <center>
        <h1> CALCULATOR</h1>
      </center>
      <form action="" method="POST">
        <input type="text" placeholder="Enter the first number" required name="num1"><br><br>
        <input type="text" placeholder="Enter the second number" required name="num2" ><br><br>

        <div class="rl">
          <select name="oper" required>
          <option value="" selected disabled> select </option> 
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
          </select>
          <input type="submit" value="Count" name="count" >
        </div>

        <input type="text" value="<?php echo $ans;?>" placeholder="0" name="answ" >
   
    </div>

    </div>
    </form>
     </center>
    </div>
 
  </center>

  
</body>

</html>