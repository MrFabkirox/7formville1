<?php
  
 if(isset($_POST['nom'])){
	$nom=$_POST['nom'];
	print("nom : $nom <br />");
	}else{
	//rien ou traitement de l'erreur"
	}

$pass=$_POST['mdp'];
print("not de passe : $pass <br />");

$sexe=$_POST['sexe'];
print("sexe : $sexe <br />");

$ville=$_POST['lesvilles'];
print("ville : $ville <br />");

$passions=$_POST['passions'];
print("Vos passions <br /> <ul>");
foreach($passions as $passion){
  echo "<li>$passion</li>";
}
echo "</ul>";


$animO=$_POST['anim'];

print("Vos annimaux <br /> <ul>");
if($animO){
  foreach($animO as $a){
    echo "<li>$a</li>";
  }
  echo"</ul>";
}
else{
	echo "aucun";
}

?>