<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Ateliers</title>
	</head>
	
	<body>
		<a href="/sbateliers/clients/espace">Mon espace</a>
		<a href="/sbateliers/clients/profil">Profil</a>
		<a href="/sbateliers/ateliers/programmes">Ateliers programmés</a>
		<a href="/sbateliers/ateliers/passes">Ateliers passés</a>
		<a href="/sbateliers/clients/deconnecter">Se déconnecter</a>
		
		<h4>Atelier <?= $atelier[ 'theme' ] ?> </h4>
		
		<div>
			
			<?php foreach( $commentaires as $commentaire ){ ?>
				
				<div>
					
					<hr />
					
					<?= $commentaire[ 'nom' ] ?> <?= $commentaire[ 'prenom' ] ?> : 
					<p>
						<?= $commentaire[ 'commentaire' ] ?>
					</p>
					
				</div>
				
			
			<?php } ?>
			
		</div>
		
		<hr />
	
	
<?php

$utilisateurFaitPartie = $numeroAtelier == $numeroClient; // Remplacez par votre logique pour vérifier si la personne fait partie de l'atelier
$aDejaCommente = false; // Remplacez par votre logique pour vérifier si la personne a déjà commenté

// Vérifiez si la personne fait partie de l'atelier et n'a pas encore commenté
if ($aDejaCommente) {
    echo '<form action="/sbateliers/ateliers/' . $atelier['numero'] . '/commenter" method="POST">';
    echo '<textarea name="commentaire" rows="10" cols="40"></textarea>';
    echo '<input type="submit" value="Valider" />';
    echo '</form>';
}
?>


		
	</body>
	
</html>
