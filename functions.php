<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function dbConnection()
{
    try {
        return new PDO("mysql:host=localhost;dbname=framework", "micro", "Secret.3mk");
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

function fetchTasks($pdo)
{
    $statement = $pdo->prepare("SELECT * FROM tasks");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
}
