<!-- <!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css"> -->
 <?php require_once("header.php"); ?>

<section>
    <?php

     if (isset($_POST['btnsubmit'])){  ?>
          <li>civilité : <?= $_POST["civility"] ?></li>
          <li>prénom : <?= $_POST["lastname"] ?></li>
          <li>nom : <?= $_POST["firstname"] ?></li>
<?php
}
else{
?>

  </section>
  <br>
  <section>
    <form method="post" action="index.php">
      <fieldset>
        <legend>Votre choix exo 3 </legend>
 
          <label for="lastname"> Votre Nom: </label>
            <input placeholder="ex: EVERGREEN" type="text" id="lastname" name="lastname" required />

      </fieldset>

      <p class="submit_btn">
        <button name="btnsubmit" type="submit" value="sent"> Envoyer </button>
      </p>


    </form>
  </section>
  <?php
     }
  ?>
  <br><br> <hr>


<?php
require_once("footer.php") ;
?>

</body>

</html>





