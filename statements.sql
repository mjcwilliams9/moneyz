CREATE DATABASE moneyz;

USE moneyz;

CREATE TABLE tblUser(
    Id int NOT NULL AUTO_INCREMENT,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Created_at DATETIME NOT NULL,
    Updated_at DATETIME NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE tblMoneyz(
    Id int NOT NULL AUTO_INCREMENT,
    User_id int NOT NULL,
    Moneyz int NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (User_id) REFERENCES tblUser (Id)
);

