<?php

$heading = "My Note";

$config = require "config.php";

$db = new Database($config["database"]);
$id = $_GET["id"];
$query = "select * from `notes` where id = :id";
$note = $db->query($query, [":id"=>$id])->fetch();

require "views/note.view.php";