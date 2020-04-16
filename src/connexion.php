<?php 
var_dump($_POST);
   if (isset($_POST['submit'])) {
   	$login=$_POST['login'];
   	$pwd=$_POST['pwd'];
   	$result=connexion($login,$pwd);
   	if (result=="error") {
   		echo "login ou password incorrect";
   	}else{
   		header("location:index.php?lien=".$result);
   	}
   }

 ?>


<div class="cont">
	<div class="cont-titulo">
		<div class="titulo">Login Form</div>
	</div>
	<div class="cont-body">
		<form method="post" action="" id="connexion">

			<div class="put-in">
				<div class="icones icone-login"></div>
					<input type="text" class="form-control" error="ms-erreurs-1" name="login" id="" placeholder="login">
				<div class="erreur" id="ms-erreurs-1" ></div>
			</div>
			<div class="put-in">
				<div class="icones icone-psw"></div>
					<input type="password" class="form-control" error="erreur-2" name="pwd" id="" placeholder="password">
				<div class="erreur" id="erreurs-2"></div>
			</div>
			<div class="put-in">
				
					<button type="submit" class="bouton" name="submit" id="">CONNEXION</button>
				    <a href="" class="forme-lien">S'incrire pour jouer</a>
			</div>
		</form>						
			     	  	
	</div>	
</div>
<script>
   const inputs=document.getElementsByTagName("input")
   for(input of inputs){
   	input.addEventListener("keyup",function(e){
   		if(e.target.hasAttribute("error")){
   			  var idDivErreur=e.target.getAttribute("error");
   			document.getElementByid(idDivError).innerText=""
   		} 
   	 })
   }

	document.getElementById("connexion").addEventListener("submit",function(e){
			const inputs=document.getElementsByTagName("input");
			var error=false;
			for(input of inputs){
				if(input.hasAttribute("error")){
				   var idDivErreur=input.getAttribute("error");
				      if(!input.value){
				 	      document.getElementByid(idDivError).innerText="Ce champs est obligatoire"
				 }
					error=true
				}
			}
			if(error){
			e.preventDefault();
			return false;	
			}
	})

</script>