<?php session_start(); 
    if (isset($_SESSION['tttpseudo'])==False) {
        header('Location: Trouvetateam.php');
            }
?>
<!DOCTYPE html>
<html>
 	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylettt.css" />
        <link rel="stylesheet" href="Amb.css" />
        <link rel="icon" type="image/png" href="image/faviconessai.png" />
        <title>Trouve ta Team</title>
  </head>
  <body>
     <?php include("Barrec.php"); ?>
     <section>
 <div class="space"></div>     
        <form method="post" action="groupe_profil_modif_php.php" class="centrerco">
          <div class="centrerco">
          	  <label for="Nom_team">Nom de la team :</label><input type="text" name="Nom_team" id="Nom_team"  value="<?php echo  $_GET['nom_team'] ?>" size="10" maxlength="30"  />
              <label for="Sport">Sport :</label><input type="text" name="Sport" id="Sport" value="<?php echo $_GET['sport_team']; ?>" maxlength="30"/><br />
              <label for="Ville">Ville :</label> <input type="text" name="Ville" id="Ville" value="<?php echo $_GET['ville_team']; ?>" size="25" /><br />
              <label for="Club">Club :</label> <input type="text" name="Club" id="Club" value="<?php echo $_GET['club_team']; ?>" size="25" maxlength="70"/><br />
              <label for="description">Description :</label><textarea name="description" id="description" rows="10" cols="50"><?php echo  $_GET['description_team']; ?></textarea><br />
             
          </div>
              <h1 class="boutonp3"><input type="submit" value="Valider"  class="bouton3"></h1>
        </form>
    <footer >
    	<?php include("Barrer.php"); ?>
    </footer>
	</section>
  </body>
</html>