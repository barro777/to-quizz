<?php
require ROUTE_DIR.'views/inc/header.inc.html.php';
?> 
  <body>
  <body class="body">
  <header class="head "style="height:80px;">
<h2><img class="img"src=<?=WEB_ROUTE."img/logo.jpeg"?>>
<span id="marq" class=" text-aligne" style="color: white;">le plaisir de jouer avec Quizz 221</span>
</marquee></h2>
  </header>

<form method="POST" enctype="multipart/form-data" class="row-6 sm-5 needs-validation border solid-10% col-8 offset-2 mt-4" novalidate>
  <h3><span class="offset-2" style="color: black;">S'INSCRIRE</span></h3>
  <h6><span class="offset-3 " style="color: black;">pour tester votre niveau culturel</span></h6>
  <div class="border solid-10 col-sm-6 offset-1"></div>
<div class="row mt-3">
      <div class="col-md-6">
      <label for="validationTooltip01" class="form-label">Prénom</label>
      <input type="name"name="name" class="form-control" id="name" placeholder="Mamadou">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationTooltip02" class="form-label">Nom</label>
      <input type="name"name="name" class="form-control" id="name" placeholder="Barro" >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  
 </div>
  <div class="row offset-2 mt-2">
    <label for="validationTooltipUsername" class="form-label">Login</label placeholder="email@example.com">
    <div class="input-group has-validation">
      <input type="login" name="login" class="form-control col-md-9" id="login" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
      </div>
    </div>
  </div>
         <div class="row offset-2 mt2">
            <label for="inputPassword" class="col-md-7 col-form-label">Password</label>
            <div class="col-md-9">
              <input type="password"name="pass" class="form-control" id="pass">
              <?php echo isset($arrayError['pass'])? $arrayError['pass']:"";?>
            </div>
          </div>
          <div class="row offset-2 mt-2">
            <label for="inputPassword" class="col-sm-7 col-form-label"> Confirm password</label>
            <div class="col-md-9">
              <input type="password"name="pass" class="form-control" id="pass">
              <?php echo isset($arrayError['pass'])? $arrayError['pass']:"";?>
            </div>
          </div>
  
  <div class="row">
      
       <button class="btn btn-primary offset-5 mt-2" style="background-color:red;"type="submit">Inscription </button>
      <button class="btn btn-primary offset-7" type="submit">ouvrir les fichiers </button>
              <!--<input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Upload Image" name="submit">-->
  </div>
</form>
</div>
 

      
<?php
require ROUTE_DIR.'views/inc/footer.inc.html.php';
?>