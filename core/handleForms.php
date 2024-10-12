<?php
require_once 'dbConfig.php';
require_once 'models.php';

// Insert new esports player record
if (isset($_POST['insertNewPlayerBtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $game_name = $_POST['game_name'];
    $game_type = $_POST['game_type'];
    $team_name = $_POST['team_name'];
    $bio = $_POST['bio'];

    $executeQuery = insertEsportsPlayer($pdo, $username, $email, $game_name, $game_type, $team_name, $bio);

    if ($executeQuery) {
        header("Location: ../index.php");
    }
}

// Edit/Update esports player record
if (isset($_POST['editPlayerBtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $game_name = $_POST['game_name'];
    $game_type = $_POST['game_type'];
    $team_name = $_POST['team_name'];
    $bio = $_POST['bio'];
    $player_id = $_POST['player_id'];

    $executeQuery = updateEsportsPlayer($pdo, $player_id, $username, $email, $game_name, $game_type, $team_name, $bio);

    if ($executeQuery) {
        header("Location: ../index.php");
    }
}

// Delete esports player record
if (isset($_POST['deletePlayerBtn'])) {
    $player_id = $_POST['player_id'];
    $executeQuery = deleteEsportsPlayer($pdo, $player_id);
    if ($executeQuery) {
        header("Location: ../index.php");
    }
}
?>