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
			font-family: Arial, sans-serif;
			margin: 20px;
			padding: 0;
			background-color: #f4f4f4;
		}
		h3 {
			color: #333;
		}
		form {
			background: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		}
		input[type="text"],
		input[type="email"],
		textarea {
			width: calc(100% - 22px);
			padding: 10px;
			margin: 10px 0;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		input[type="submit"] {
			background-color: #28a745;
			color: white;
			border: none;
			padding: 10px 15px;
			cursor: pointer;
			border-radius: 4px;
		}
		input[type="submit"]:hover {
			background-color: #218838;
		}
		table {
			width: 100%;
			margin-top: 30px;
			border-collapse: collapse;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
		a {
			color: #007bff;
			text-decoration: none;
		}
		a:hover {
		 text-decoration: underline;
		}
	</style>
</head>
<body>
	<h3>Welcome to the eSports Player Registration. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="username">Username</label> <input type="text" name="username" required></p>
		<p><label for="email">Email</label> <input type="email" name="email" required></p>
		<p><label for="game_name">Game Name</label> <input type="text" name="game_name" required></p>
		<p><label for="game_type">Game Type</label> <input type="text" name="game_type" required></p>
		<p><label for="team_name">Team Name</label> <input type="text" name="team_name" required></p>
		<p><label for="bio">Bio</label> <textarea name="bio" cols="30" rows="5"></textarea></p>
		<p><input type="submit" name="insertNewPlayerBtn" value="Register Player"></p>
	</form>

	<table>
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
            <a href="editplayer.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a href="deleteplayer.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>
