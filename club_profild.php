<?php
 
 
 

   try
        {
    $bddu = new PDO('mysql:host=localhost;dbname=trouve_ta_team;charset=utf8', 'root', '');
        }
    catch(Exception $e)
        {
    die('Erreur : '.$e->getMessage());
        }
        $req = $bddu->prepare('SELECT id_utilisateur FROM utilisateurs WHERE NomUtilisateur = ?');
        $req->execute(array($_SESSION['tttpseudo']));
        if($do = $req->fetch()){
        	$pseudo=$do['id_utilisateur'];
        	$req->closeCursor();}
            
 	$requ = $bddu->prepare('SELECT * FROM clubs WHERE id_utilisateur = ?');

 	$requ->execute(array($pseudo));
 	
 	
 	//if($donneesu = $requ->fetch()){
	

 while ($donneesu = $requ->fetch() ){
 	
 	echo $donneesu['nomclub'].'                         '. '<a  href="club_profil.php"><input type="submit"  value="+ de détails"  class=titrebleu2 ></a>'.'</br>';
 
 	$_GET['nom_club']=$donneesu['nomclub'];
 	$ville_id=$donneesu['ville_id'];
 	$sport_id=$donneesu['id_sport'];
 	$_GET['description_club']=$donneesu['descriptionclub'];
 	$_GET['adresse_club']=$donneesu['adresse'];
 	$_GET['mail_club']=$donneesu['mailclub'];
 	
 	
 	$reqi = $bddu->prepare('SELECT ville_nom_reel FROM villes_france_free WHERE ville_id = ?');
 	$reqi->execute(array($ville_id));
 	
 	if ($donneesi = $reqi->fetch()) {
 		$_GET['ville_club']=$donneesi['ville_nom_reel'];
 	}
 	
 	
 	$reqi->closeCursor();
 	
 	$reqi = $bddu->prepare('SELECT nomsport FROM sports WHERE id_sport = ?');
 	$reqi->execute(array($sport_id));
 	
 	if ($donneesi = $reqi->fetch()) {
 		$_GET['sport_club']=$donneesi['nomsport'];
 	}
 	
 	
 	$reqi->closeCursor();
 	
 	
 	}
 	$requ->closeCursor();

 	
 	//else{ $requ->closeCursor();
 		//echo "Vous n'administrez pas encore de teams!";}
 
   
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              