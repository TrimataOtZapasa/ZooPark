CREATE DATABASE zoo_db;
USE zoo_db;

CREATE TABLE animals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    species VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO animals (name, species, description, image) VALUES
('Leo', 'Lion', 'The lion is a big cat known for its strength and majestic mane.', 'lion.jpg'),
('Stripes', 'Tiger', 'Tigers are powerful cats with distinctive orange and black stripes.', 'tiger.jpg'),
('Ellie', 'Elephant', 'Elephants are the largest land animals with strong trunks.', 'elephant.jpg'),
('Milo', 'Monkey', 'Monkeys are intelligent primates known for their agility.', 'monkey.jpg'),
('Zara', 'Zebra', 'Zebras are famous for their black-and-white striped coats.', 'zebra.jpg');
