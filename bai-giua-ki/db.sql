DROP DATABASE IF EXISTS `fashion_shop`;

CREATE DATABASE fashion_shop;

USE fashion_shop;

CREATE TABLE product_type (
	id BIGINT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255)
);

CREATE TABLE product (
	id BIGINT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	price DECIMAL(10,2),
	type_id BIGINT,
	img_url VARCHAR(255)
);

ALTER TABLE product 
ADD FOREIGN KEY (type_id) REFERENCES product_type(id);

INSERT INTO product_type(NAME)
VALUES ('SHIRT'), ('SHOES'), ('TROUSERS')
