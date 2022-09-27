<?php
session_start();

require_once "functionClass.php";
$rs = $_SESSION['user_id'];
if(!isset($_SESSION['user_id'])){
  header("Location: login.php");
  exit();
}
$db = new functionClass();
if (isset($_POST['options'])) {
  $rt=$_POST['options'];
    //echo "<script>alert($rs);</script>";
    $db->modifies($rt,$rs);
    header("Location: thankyou.php");
    exit();
}
?>
<html>
  <head>
    <title>Vote</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style type="text/css">
      .floating-title
      {
        display: inline-block;
        padding :30px;
      }

      .floating-box
      {
        display: inline-block;
        width: 300px;
        height: 400px;
        border-style: groove;
        padding-top: 20px;
        margin : 20px;
        border-radius: 20px;
        border-color: gold;
        border-width: 10px;
      }

      .bold
      {
        color:red;
        font-weight:bold;
        font-size: 150%;
      }

    </style>

  </head>

  <body>
    <form action="index.php" method="post">

      <div align="center">
        <div class = "floating-title">
          <img src = "img/untarindex.png" width="200" height="56">
        </div>

        <div class = "floating-title">
          <p style="font-size: 200%; text-align:center"">VOTING ENTREPRENEUR WEEK 8 UNTAR</p>
        </div>

        <div class = "floating-title">
          <img src = "img/ew-logo.png" width="200" height="135">
        </div>
      </div>
      
      <div align = "center">
        <div class = "floating-box" align = "center">
          <img src="img/logo arche.png">
          <p class="bold">Archè</p>
          <p>Paint It, Wear It.</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="1">Vote</button>
        </div>

        <div class = "floating-box" align = "center">
          <img src="img/logo badjoe&co.png">
          <p class="bold">Badjoe & Co</p>
          <p>Keep Move Forward</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="2">Vote</button>
        </div>

        <div class = "floating-box" align = "center">
          <img src="img/logo cake-it.png">
          <p class="bold">CAKE IT</p>
          <p>Your Desserts Mate</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="3">Vote</button>
        </div> 
      </div>
          
      <div align="center">
        <div class = "floating-box" align = "center">
          <img src="img/logo caquest.png">
          <p class="bold">CAQUEST</p>
          <p>Choose your own Cakwe</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="4">Vote</button>
        </div> 
          
        <div class = "floating-box" align = "center">
          <img src="img/logo chocodino.png">
          <p class="bold">CHOCODINO</p>
          <p>Heat me well</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="5">Vote</button>
        </div>

        <div class = "floating-box" align = "center">
          <img src="img/logo donayaki.png">
          <p class="bold">DONAYAKI</p>
          <p>When Donuts Meet Dorayaki</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="6">Vote</button>
        </div>
      </div>
          
      <div align= "center">
        <div class = "floating-box" align = "center">
          <img src="img/logo dopping.png">
          <p class="bold">DOPPING</p>
          <p>“For the sweetest occasion ever!”</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="7">Vote</button>
        </div>
        
        <div class = "floating-box" align = "center">
          <img src="img/logo instance.png">
          <p class="bold">INSTACE</p>
          <p>Lit up your step</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="8">Vote</button>
        </div> 

        <div class = "floating-box" align = "center">
          <img src="img/logo kokonattsu.png">
          <p class="bold">KOKONATTSU</p>
          <p>“Taste of natures hydration”</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="9">Vote</button>
        </div>
      </div>

      <div align="center">
        <div class = "floating-box" align = "center">
          <img src="img/logo nom-cha.png">
          <p class="bold">NomCha</p>
          <p>“PARTEA TIME”</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="10">Vote</button>
        </div>

        <div class = "floating-box" align = "center">
          <img src="img/logo pancake.png">
          <p class="bold">Pancake.INC</p>
          <p>“Every Colour is Filled with Delicacy”</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="11">Vote</button>
        </div>

        <div class = "floating-box" align = "center">
          <img src="img/logo pizzato.png">
          <p class="bold">PIZZATO</p>
          <p>When potato meet pizza</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="12">Vote</button>
        </div>
      </div>
        
      <div align="center"> 
        <div class = "floating-box" align = "center">
          <img src="img/logo pova.png">
          <p class="bold">POVA</p>
          <p>Cara nikmat makan kentang & singkong</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="13">Vote</button>
        </div>

        <div class = "floating-box" align = "center">
          <img src="img/logo puddinc.png">
          <p class="bold">Pudd.inc</p>
          <p>“as tasty as it looks”</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="14">Vote</button>
        </div>

        <div class = "floating-box" align = "center">
          <img src="img/logo shabu-ta.png">
          <p class="bold">Shabu-Ta</p>
          <p>Indonesian Taste Shabu</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="15">Vote</button>
        </div>
      </div>

      <div align="center"> 
        <div class = "floating-box" align = "center">
          <img src="img/logo taichan-vegas.png">
          <p class="bold">TAICHAN – VEGAS</p>
          <p>Healthy Taichan Vegas Life</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="16">Vote</button>
        </div>

        <div class = "floating-box" align = "center">
          <img src="img/logo zodafruit.png">
          <p class="bold">Zoda Fruit</p>
          <p>Sensasi baru minum soda</p>
          <button class="btn btn-lg btn-success" type="submit" name="options" value="17">Vote</button>
        </div>
      </div>
            
    </form>
  </body>
</html>