<?php  
require_once 'core/dbConfig.php';
require_once 'core/models.php';

if (isset($_GET['player_id'])) {
    $getPlayerById = getPlayerById($pdo, $_GET['player_id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete eSports Player</title>
</head>
<body>
	<form action="core/handleForms.php" method="POST">
		<input type="hidden" name="player_id" value="<?php echo $_GET['player_id']; ?>">
		<div class="container" style="border-style: solid;">
			<h3>Username: <?php echo $getPlayerById['username']; ?></h3>
			<h3>Email: <?php echo $getPlayerById['email']; ?></h3>
			<h3>Game Name: <?php echo $getPlayerById['game_name']; ?></h3>
			<h3>Game Type: <?php echo $getPlayerById['game_type']; ?></h3>
			<h3>Team Name: <?php echo $getPlayerById['team_name']; ?></h3>
			<p>Are you sure you want to delete <?php echo $_GET['player_id']; ?>?</p>
			<p>
				<input type="submit" name="deletePlayerBtn" value="Delete">
			</p>
		</div>
	</form>
</body>
</html>