

<!DOCTYPE HTML>
<html>
<head>
  <title>7formville1</title>
  <meta charset="utf-8"/>
<style>
	#left {
		width: 75%;
		position: fixed;
	}
	#right {
		width: 25%;
		position: absolute;
		right: 0;
		background: grey;
		margin: 20px;
		padding: 4px;
	}
</style>
<script></script>

</head>
<body>

<div id="right"><?php include("menu.php"); ?></div>

<div id="left">

<h3>7formville1, index</h3>

<p>7formville1</p>


<form action="./traitementExo1.php" method="post">
	<p>
    	<label for="nom">Nom</label>
    	<input type="text" name="nom" id="nom"/><br />
    </p>
      
    <p>
    	<label for="mdp">Mot de passe</label>
    	<input type="password" name="mdp" id="mdp"/><br />
    </p>
	
    <p>Sexe:
		<input type="radio" name="sexe" id="f" value="feminin"/>   
		<label for="f">F</label>
	
		<input type="radio" name="sexe" id="m" value="masculin" />   
		<label for="m">M</label><br />
    </p>
      
    <p>
    	<label for="lesvilles">Choisissez une ville</label>
    	<select name="lesvilles" id="lesvilles">
			<option value="paris">Paris</option>
			<option value="evry">Evry</option>
    	</select><br />
    </p>
    
    <p>Vos passions :
    	<input type="checkbox" name="passions[]" id="ski" value="Ski"/>
    	<label for="ski">Ski</label>
      
    	<input type="checkbox" name="passions[]" id="ping_pong" value="Tennis de table" />
    	<label for="ping_pong">Tennis de table</label><br />
    </p>
    
    <p>
    	<label for="anim">Vos animaux de compagnie</label><br />
    	<select name="anim[]" id="anim" multiple="multiple">
			<option value="chien">Chien</option>
			<option value="chat">Chat</option>
    	</select>
    
    </p>
      
    <p>
    	<input type="submit"/>
    </p>
</form>




</div>

</body>
</html>