<?php

class Connection
{
    public static function make($data)
    {
        try {
            $pdo = new PDO(
                "mysql:host={$data['host']};dbname={$data['dbName']};charset=utf8mb4",
                $data['username'],
                $data['password']
            );
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
