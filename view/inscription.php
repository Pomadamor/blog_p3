<?php include("header.php"); ?>
<div id="contenu-connexion">
  <form method='post' action='index.php?inscripValid'>
      <input type='hidden' name='login' />
      <h2>Inscription</h2>
      Prenom ou pseudo :<br>
      <input type='text' name='prenom'> <br>
      Courriel<br>
      <input type='email' name='mail'> <br>
      Mot de passe<br>
      <input type='password' name='pass'> <br>
      <input type='submit' class='myButton' value='Se connecter'>
  </form>
</div>
<?php include("footer.php"); ?>
