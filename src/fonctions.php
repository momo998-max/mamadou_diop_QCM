<?php 

   function connexion($login,$psw){
   	$users=getData();
   	foreach ($users as $key => $user) {
   		
   		if ($users["login"]===$login && $users["password"]===$psw) {
   			if ($users["profil"]==="admin") {
   				$_SESSION['user']=$user;
   				$_SESSION['statut']=$login;
   				return "acceuil";
   			}else{
   				return "jeux";
   			}
            
   		}
      }
      return "error";
   }
   function Deconnexion(){
   	    unset($_SESSION['user']);
   	 	unset($_SESSION['statut']); 
   	 	session_destroy();
   }


 
  function getData($file="user"){
  $data=file_get_contents("./asset/js/".$file.".json");
  $data=json_decode($data,true); 
  return $data;
   }
 ?>