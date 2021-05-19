<?php
global $pdo;
$pdo = null;

// CONNECT TO MySQL and DATABASE
function db_connect()
{
    global $pdo;
    $pdo = null;
    $servername = "localhost";
    $email = "admin";
    $password = "root";
    $db_name = "bestbuy";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $email, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


function create_table_fav()
{
    db_connect();
    global $pdo;
    $sql = "CREATE TABLE fav (
    userID INT(6) NOT NULL PRIMARY KEY,
    productID INT(6) NOT NULL,
    add_date DATE NULL DEFAULT NULL
    )";
    $pdo->exec($sql);
    echo "<br>TABLE FAV CREATED SUCCESSFULLY";
    $pdo = null;
}


function create_table_products()
{
    db_connect();
    global $pdo;
    $sql = "CREATE TABLE `products` (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `userID` INT(6) NOT NULL,
    `name` VARCHAR(50) NULL DEFAULT NULL ,
    `category` VARCHAR(50) NULL DEFAULT NULL,
    `price` INT(6)NULL DEFAULT NULL,
    `description` TEXT  NULL DEFAULT NULL,
    `IMG` JSON NULL DEFAULT NULL,
    `active` BOOLEAN NOT NULL DEFAULT TRUE ,
    `sold` BOOLEAN NOT NULL DEFAULT FALSE,
    `post_date` DATE NULL DEFAULT NULL,
    `sell_date` DATE NULL DEFAULT NULL
      )";
    $pdo->exec($sql);
    echo "<br>TABLE PRODUCTS CREATED SUCCESSFULLY";
    $pdo = null;
}


function create_table_users()
{
    db_connect();
    global $pdo;
    $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL UNIQUE,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(25) NOT NULL,
    img VARCHAR(255) NOT NULL DEFAULT 'profile.png',
    reg_date DATE NULL DEFAULT NULL
    )";
    $pdo->exec($sql);
    echo "TABLE USERS CREATED SUCCESSFULLY";
    $pdo = null;
}



