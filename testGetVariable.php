<?php

if (isset($_GET['playerName'])) {
    echo "Hello! Welcome " . $_GET['playerName'];
}

if (isset($_GET['gameName'])) {
    echo "<br>Your game name is " . $_GET['gameName'];
}

?>