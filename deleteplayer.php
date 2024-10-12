<?php  
require_once 'core/dbConfig.php';
require_once 'core/models.php';

if (isset($_GET['id'])) {
    $player_id = $_GET['id'];
    $playerRecord = getPlayerById($pdo, $player_id); 

    if ($playerRecord === false) {
        echo "Player not found.";
        exit; 
    }
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
		<input type="hidden" name="player_id" value="<?php echo $playerRecord['id']; ?>"> <!-- Ensure this uses the correct field -->
		<div class="container" style="border-style: solid;">
			<h3>Username: <?php echo htmlspecialchars($playerRecord['username']); ?></h3>
			<h3>Email: <?php echo htmlspecialchars($playerRecord['email']); ?></h3>
			<h3>Game Name: <?php echo htmlspecialchars($playerRecord['game_name']); ?></h3>
			<h3>Game Type: <?php echo htmlspecialchars($playerRecord['game_type']); ?></h3>
			<h3>Team Name: <?php echo htmlspecialchars($playerRecord['team_name']); ?></h3>
			<p>Are you sure you want to delete <?php echo htmlspecialchars($playerRecord['username']); ?>?</p>
			<p>
				<input type="submit" name="deletePlayerBtn" value="Delete">
			</p>
		</div>
	</form>
</body>
</html>
