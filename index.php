<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>eSports Player Registration</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome to the eSports Player Registration. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="username">Username</label> <input type="text" name="username"></p>
		<p><label for="email">Email</label> <input type="email" name="email"></p>
		<p><label for="game_name">Game Name</label> <input type="text" name="game_name"></p>
		<p><label for="game_type">Game Type</label> <input type="text" name="game_type"></p>
		<p><label for="team_name">Team Name</label> <input type="text" name="team_name"></p>
		<p><label for="bio">Bio</label> <textarea name="bio" cols="30" rows="5"></textarea></p>
		<p><input type="submit" name="insertNewPlayerBtn"></p>
	</form>

	<a href="testGetVariable.php?playerName=JanMarko&gameName=LeagueOfLegends">LINK</a>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Username</th>
	    <th>Email</th>
	    <th>Game Name</th>
	    <th>Game Type</th>
	    <th>Team Name</th>
	    <th>Bio</th>
	    <th>Date Added</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllPlayerRecords = seeAllPlayersRecords($pdo); ?>
	  <?php foreach ($seeAllPlayerRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['username']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['game_name']; ?></td>
	  	<td><?php echo $row['game_type']; ?></td>
	  	<td><?php echo $row['team_name']; ?></td>
	  	<td><?php echo $row['bio']; ?></td>
	  	<td><?php echo $row['date_added']; ?></td>
        <td>
            <a href="editplayer.php?player_id=<?php echo $row['player_id']; ?>">Edit</a>
            <a href="deleteplayer.php?player_id=<?php echo $row['player_id']; ?>">Delete</a>
        </td>
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>