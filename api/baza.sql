create database projekt;

use database projekt;

CREATE TABLE Authors (
  id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  surname VARCHAR(255) NOT NULL
);

CREATE TABLE Books (
  id INT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  author_id INT NOT NULL,
  release_year INT NOT NULL,
  genre VARCHAR(255) NOT NULL,
  FOREIGN KEY (author_id) REFERENCES Authors(id)
);