<?php

require_once 'dbConfig.php';

function insertEsportsPlayer($pdo, $username, $email, $game_name, $game_type, $team_name, $bio) {

    $sql = "INSERT INTO esports_players (username, email, game_name, game_type, team_name, bio, date_added) 
    VALUES (?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$username, $email, $game_name, $game_type, $team_name, $bio]);
    
    if ($executeQuery) {
        return true;
    } 
}

function seeAllPlayersRecords($pdo) {
    $sql = "SELECT * FROM esports_players";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getPlayerById($pdo, $player_id) {
    $sql = "SELECT * FROM esports_players WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$player_id]);

    if ($executeQuery) {
        return $stmt->fetch();
    }
}

function updateEsportsPlayer($pdo, $player_id, $username, $email, $game_name, $game_type, $team_name, $bio) {
    $sql = "UPDATE esports_players
            SET username = ?,
                email = ?,
                game_name = ?,
                game_type = ?,
                team_name = ?,
                bio = ?
            WHERE id = ?"; 

    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$username, $email, $game_name, $game_type, $team_name, $bio, $player_id]);
    
    if ($executeQuery) {
        return true;
    }
}


function deleteEsportsPlayer($pdo, $id) { 
    $sql = "DELETE FROM esports_players WHERE id = ?"; 
    $stmt = $pdo->prepare($sql);
    
    $executeQuery = $stmt->execute([$id]); 
    
    if ($executeQuery) {
        return true;
    } 
}

?>