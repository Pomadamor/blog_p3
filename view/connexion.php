<?php include("header.php"); ?>
<div class="container" style="text-align:center">
  <form method='post' action='index.php?login#haut'>
      <input type='hidden' name='login' />
      <h2><div id="haut">Connexion</div></h2>
      Courriel<br>
      <input type='email' name='mail'> <br>
      Mot de passe<br>
      <input type='password' name='pass'> <br>
      <input type='submit' class='myButton' value='Se connecter'>
  </form>
</div>
<?php include("footer.php"); ?>
