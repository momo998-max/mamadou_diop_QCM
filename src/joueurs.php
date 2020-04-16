<div class="cont">

	<div class="cont-body">
	
		<form method="post" action="" id="connexion">
		
		<div class="put-in">
				<div class="icones icone-login"></div>
					<input type="text" class="form-control" error="ms-erreurs-1" name="" id="" placeholder="nom">
				<div class="error" id="ms-erreurs-1" ></div>
			</div>
			<div class="put-in">
				<div class="icones icone-login"></div>
					<input type="text" class="form-control" error="ms-erreurs-1" name="" id="" placeholder="prenom">
				<div class="error" id="ms-erreurs-1" ></div>
			</div>

			<div class="put-in">
				<div class="icones icone-login"></div>
					<input type="text" class="form-control" error="ms-erreurs-1" name="" id="" placeholder="login">
				<div class="error" id="ms-erreurs-1" ></div>
			</div>
			<div class="put-in">
				<div class="icones icone-psw"></div>
					<input type="password" class="form-control" error="erreur-2" name="" id="" placeholder="password">
				<div class="error" id="erreurs-2"></div>
			</div>
			<div class="put-in">
				
					<button type="submit" class="bouton" name="" id="">CONNEXION</button>
				    <a href="" class="forme-lien">DECONNEXION</a>
			</div>
			<div class="avatar"></div>
           <div class="avatars">JOUEUR</div>
		</form>	
						
			     	  	
	</div>	
</div>
<?php 
is_connect();

echo $_SESSION['user']['nom'];
echo $_SESSION['user']['prenom'];
echo $_SESSION['user']['login'];
echo $_SESSION['user']['profil'];
echo $_SESSION['user']['photo'];

 ?>
 <br>
 <a href="index.php?statut=logout">Deconnexion</a>