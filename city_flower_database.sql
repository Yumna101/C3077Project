-- Create a new database named 'city_flowers'
CREATE DATABASE city_flowers;

-- Select the 'city_flowers' database for use
USE city_flowers;

-- Create a table named 'flowers' with three columns:
-- 'id': an auto-incremented primary key for unique identification
-- 'city': stores the name of the city (up to 100 characters)
-- 'flowers': stores the associated flowers (up to 255 characters)
CREATE TABLE flowers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    city VARCHAR(100),
    flowers VARCHAR(255)
);

-- Insert records into the 'flowers' table
-- Each row links a city to its signature flowers
INSERT INTO flowers (city, flowers) VALUES
('New York', 'Tulips, Cherry Blossoms'),
('London', 'Roses, Daffodils'),
('Tokyo', 'Cherry Blossoms (Sakura)'),
('Paris', 'Lavender, Camellias'),
('Moscow', 'Lilacs, Peonies'),
('Sydney', 'Waratah, Jacaranda'),
('Beijing', 'Lotus'),
('Mumbai', 'Hibiscus, Frangipani'),
('Sao Paulo', 'Orchids, Bromeliads'),
('Cairo', 'Jasmine, Bougainvillea');


