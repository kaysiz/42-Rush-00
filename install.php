<?php 

    include './database.php';

    //create database
    try{
        $conn = new PDO("mysql:host=$DB_DSN", $DB_USER, $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE IF NOT EXISTS rush00";
        $conn->exec($sql);
        $sql = "use rush00";
        $conn->exec($sql);
        echo "Database ". $DB_NAME." created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    //create tables for users
    $user = "CREATE TABLE IF NOT EXISTS users ("
    . "id int NOT NULL AUTO_INCREMENT,"
    . "fullName varchar(100),"
    . "gender varchar(50),"
    . "email varchar(100),"
    . "role varchar(100) DEFAULT 'customer',"
    . "phone varchar(100),"
    . "address varchar(150),"
    . "city varchar(50),"
    . "country varchar(1000),"
    . "password varchar(1000),"
    . "dateCreated date DEFAULT NOW(),"
    . "PRIMARY KEY (id));";
    try {
        $conn = new PDO("mysql:host=$DB_DSN;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec($user);
        echo "Users table created successfully <br>";
    } catch (PDOException $e) {
        echo "error: " . $user . "<br>" . $e->getMessage();
    }

    //create tables for products
    $product = "CREATE TABLE IF NOT EXISTS products ("
    . "id int NOT NULL AUTO_INCREMENT,"
    . "name varchar(100),"
    . "category varchar(100),"
    . "price varchar(100),"
    . "quantity varchar(100),"
    . "dateCreated date DEFAULT NOW(),"
    . "PRIMARY KEY (id));";
    try {
        $conn = new PDO("mysql:host=$DB_DSN;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec($user);
        echo "Procucts table created successfully <br>";
    } catch (PDOException $e) {
        echo "error: " . $user . "<br>" . $e->getMessage();
    }

    //create tables for orders
    $orders = "CREATE TABLE IF NOT EXISTS orders ("
    . "id int NOT NULL AUTO_INCREMENT,"
    . "orderNumber varchar(100) UNIQUE,"
    . "productId int NOT NULL,"
    . "customerId int NOT NULL,"
    . "status varchar(100),"
    . "dateCreated date DEFAULT NOW(),"
    . "PRIMARY KEY (id));";
    try {
        $conn = new PDO("mysql:host=$DB_DSN;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec($user);
        echo "Orders table created successfully <br>";
    } catch (PDOException $e) {
        echo "error: " . $user . "<br>" . $e->getMessage();
    }
    $conn = null;