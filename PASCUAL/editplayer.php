<?php  
require_once 'core/dbConfig.php';
require_once 'core/models.php';

if (isset($_GET['player_id'])) {
    $playerRecord = getPlayerById($pdo, $_GET['player_id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit eSports Player</title>
</head>
<body>
	<form action="core/handleForms.php" method="POST">
		<input type="hidden" name="player_id" value="<?php echo $_GET['player_id']; ?>">
		<p>
			<label for="username">Username</label> 
			<input type="text" name="username" value="<?php echo $playerRecord['username'];?>">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="email" name="email" value="<?php echo $playerRecord['email'];?>">
		</p>
		<p>
			<label for="game_name">Game Name</label>
			<input type="text" name="game_name" value="<?php echo $playerRecord['game_name'];?>">
		</p>
		<p>
			<label for="game_type">Game Type</label>
			<input type="text" name="game_type" value="<?php echo $playerRecord['game_type'];?>">
		</p>
		<p>
			<label for="team_name">Team Name</label>
			<input type="text" name="team_name" value="<?php echo $playerRecord['team_name'];?>">
		</p>
		<p>
			<label for="bio">Bio</label>
			<textarea name="bio" cols="30" rows="5"><?php echo $playerRecord['bio'];?></textarea>
		</p>
		<p>
			<input type="submit" name="editPlayerBtn" value="Edit">
		</p>
	</form>
</body>
</html>