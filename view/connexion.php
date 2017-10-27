<?php include("header.php"); ?>
<div id="contenu-connexion">
  <form method='post' action='index.php?login'>
      <input type='hidden' name='login' />
      <h2>Connexion</h2>
      Courriel<br>
      <input type='email' name='mail'> <br>
      Mot de passe<br>
      <input type='password' name='pass'> <br>
      <input type='submit' class='myButton' value='Se connecter'>
  </form>
</div>
<?php include("footer.php"); ?>
