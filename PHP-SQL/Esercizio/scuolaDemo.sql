CREATE DATABASE IF NOT EXISTS francesco_marchetto_scuolaDemo;
USE francesco_marchetto_scuolaDemo;

CREATE TABLE studenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    media DECIMAL(3,1),
    classe VARCHAR(5),
    data_iscrizione DATE
);

INSERT INTO studenti (nome, cognome, media, classe, data_iscrizione) VALUES
('Marco', 'Rossi', 7.5, '5A', '2022-09-15'),
('Anna', 'Bianchi', 8.8, '4B', '2023-09-20'),
('Luca', 'Verdi', 6.9, '5A', '2021-09-10'),
('Sara', 'Neri', 9.2, '3C', '2023-09-18'),
('Paolo', 'Gialli', 8.1, '5B', '2022-09-16');
