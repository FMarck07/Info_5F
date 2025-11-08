CREATE DATABASE IF NOT EXISTS Ospedale;
USE Ospedale;

-- Creazione tabella pazienti
CREATE TABLE pazienti (
    id_paziente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) NOT NULL,
    cognome VARCHAR(20) NOT NULL,
    anno_nascita DATE,
    provincia VARCHAR(20) NOT NULL,
    asl VARCHAR(20)
);

-- Creazione tabella visite
CREATE TABLE visite (
    id_visita INT AUTO_INCREMENT PRIMARY KEY,
    data_visita DATE NOT NULL,
    pressione_min INT,
    pressione_max INT,
    peso DECIMAL(5,2),
    glicemia INT NOT NULL,
    id_paziente INT,
    FOREIGN KEY (id_paziente) REFERENCES pazienti(id_paziente)
);

-- Inserimento pazienti
INSERT INTO pazienti (nome, cognome, anno_nascita, provincia, asl)
VALUES 
('Luca', 'Bianchi', '1985-04-10', 'Milano', 'ASL-MI01'),
('Marco', 'Rossi', '1990-07-23', 'Napoli', NULL),
('Anna', 'Verdi', '1978-12-01', 'Roma', 'ASL-RM05'),
('Giulia', 'Neri', '2000-02-14', 'Milano', 'ASL-MI03'),
('Francesco', 'Esposito', '1983-09-19', 'Napoli', 'ASL-NA07'),
('Marta', 'Conti', '1995-05-30', 'Roma', NULL);

INSERT INTO visite (data_visita, pressione_min, pressione_max, peso, glicemia, id_paziente)
VALUES 
('2024-03-15', 70, 175, 80.00, 120, 1),
('2024-06-10', 75, 175, 85.00, 125, 1),
('2020-05-22', 92, 180, 95.00, 145, 2),
('2020-11-03', 88, 178, 90.00, 135, 5),
('2020-08-12', 89, 178, 85.00, 140, 5),
('2025-01-09', 59, 160, 100.00, 150, 3),
('2025-02-02', 65, 165, 85.00, 118, 4),
('2025-09-05', 62, 165, 70.00, 110, 4),
('2025-03-15', 58, 170, 95.00, 145, 6);

-- Query di verifica
-- join usata per unire due tabelle 
SELECT *
FROM pazienti p
JOIN visite v 
ON p.id_paziente = v.id_paziente;

SELECT p.cognome, p.nome, v.data_visita, v.pressione_min , v.pressione_max
FROM pazienti p
JOIN visite v
ON p.id_paziente = v.id_paziente
where v.pressione_min > 80;

-- media pressione di bianchi luca
select avg((v.pressione_min + v.pressione_max) / 2) as mediaPressione
from pazienti p
join visite v
where nome = 'Luca' and cognome = 'Bianchi';

DROP TABLE visite;
DROP TABLE pazienti;
