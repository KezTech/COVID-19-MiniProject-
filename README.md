# COVID-19-MiniProject-
Mini Project of Cosmos College.

Welcome to the COVID-19-MiniProject- wiki!

**# Steps to Setup**

1. Install XAMPP and Run XAMPP.
2. Setup Database Name: "selftest" or sql command: 'CREATE DATABASE selftest;'
3. Create a Table Name: "covid" or sql command: 

CREATE TABLE `selftest`.`covid` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `gender` TEXT NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


4. After done with Database, extract the zip file or all the files in htdoc folder.
5. Now you can Run http:localhost.
6.First, you need to Register as user then only you can sing-in. And only registered can use the site(Use of 
 Session)
