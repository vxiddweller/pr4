SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;

CREATE TABLE IF NOT EXISTS recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    ingredients TEXT,
    time_minutes INT
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO recipes (title, ingredients, time_minutes) VALUES
('Борщ', 'Свекла, капуста, мясо', 90),
('Паста карбонара', 'Спагетти, бекон, яйцо', 25),
('Оливье', 'Картофель, горошек, колбаса', 60);