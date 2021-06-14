<?php
//if (isset$_SESSION['arrayError']) {
  # code...
if (isset($_SESSION['arrayError'])) {
  $arrayErrors=$_SESSION['arrayError'];
  unset($_SESSION["arrayError"]);
}


//require '/var/www/html/moiphp/quizz/lib/validator.php';
require ROUTE_DIR.'/views/inc/header.inc.html.php'
?>
  <body class="body">
  <header class="head"style="height:60px;">
  <h2><img class="img"src=<?=WEB_ROUTE."img/logo.jpeg"?>><span id="marq" class="offset-4 text-aligne-center mb-2" style="color: white;margin:none">Le plaisir de jouer</span>
 </h2>
  </header>
            <form method="POST" class="form" >
            <!--<div class="card text-red bg-red col-8 offset-2 mt-5" style="background-color:red"></div>-->
                            <input type="hidden" name="controlleur" value="security">
                                          <input type="hidden" name="action" value="connection">
                    <div class="container  mb-7 border solid-25% col-6"style="background-color:white;">
                    <h3 id="log"class="card-title text-center col-form-label" style="color:red;">Login form </h3>
                    <div class="border solid-10 col-sm-4 offset-4" style="color: red;"></div>
                        <div class="mb-0 row-2 col-9 offset-2">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="text" name="login" class="form-control" id="login" placeholder="email@example.com">
                            <small><?php echo isset($arrayError['login'])? $arrayError['login']:"";?></small>
                          </div>
                        </div>
                        <div class="mb-2  col-9 offset-2">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Mot de pass</label>
                          <div class="col-sm-10">
                            <input type="password"name="pass" class="form-control" id="pass"><small><?php echo isset($arrayError['pass'])? $arrayError['pass']:"";?></small>
                            
                          </div>
                        </div>
                        <div id="barro" class="offset-4 col-sm-2 mt-2 text-center" ><button type="button" class="btn btn-outline-no danger">Connection</button></div>
                        <a class='offset-8 'style="color:red;" href="<?= WEB_ROUTE.'?controlleur=security&views=inscription'?>">S'inscrire pour joueur</a>
                    </div>
              </form> 
 </div>
 
 
 
 
 <?php

      require ROUTE_DIR.'/views/inc/footer.inc.html.php';
   ?>

 
    
