--
-- Create Database
--
CREATE DATABASE IF NOT EXISTS toeicdb;
GRANT SELECT, INSERT, UPDATE, DELETE ON toeicdb.* TO toeic_root@localhost IDENTIFIED BY 'toeic_root';
FLUSH PRIVILEGES;

--
-- Create tables
--

USE toeicdb;

CREATE TABLE IF NOT EXISTS user (
id     	     INT UNSIGNED NOT NULL AUTO_INCREMENT,
username     VARCHAR(32) NOT NULL,
password     VARCHAR(32) NOT NULL,
created	     TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
)ENGINE=InnoDB;
