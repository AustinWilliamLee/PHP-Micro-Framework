<?php
require "./bootstrap.php";

// fetch tasks
$users = $query->fetchAll("users");
$posts = $query->fetchAll("posts");

// var_dump($users);die();
require 'user.view.php';
require 'post.view.php';
