DROP DATABASE if EXISTS fashion_shop;

CREATE DATABASE fashion_shop;

ALTER DATABASE fashion_shop CHARACTER SET utf8mb4 COLLATE UTF8MB4_UNICODE_CI;

USE fashion_shop;

CREATE TABLE shoes (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	price FLOAT,
	brand_id INT,
	product_type_id INT,
	description VARCHAR(255),
	img_url VARCHAR(255)
);

CREATE TABLE brand (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	description VARCHAR(255)
);

CREATE TABLE product_type ( 
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255)
);

ALTER TABLE shoes
ADD FOREIGN KEY (brand_id) REFERENCES brand(id);

ALTER TABLE shoes 
ADD FOREIGN KEY (product_type_id) REFERENCES product_type(id);