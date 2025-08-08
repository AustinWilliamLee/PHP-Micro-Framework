<?php
$config = require "config.php";
// require "functions.php";
require "database/Connection.php";
require "database/QueryBuilder.php";

$pdo = Connection::make($config['database']);

$query = new QueryBuilder($pdo);
