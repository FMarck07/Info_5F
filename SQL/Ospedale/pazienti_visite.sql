create DATABASE francesco_marchetto_clinica;

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
('Fabio', 'c', '1985-04-10', 'Milano', 'ASL-MI01'),
('Luca', 'Bianchi', '1985-04-10', 'Milano', 'ASL-MI01'),
('Marco', 'Rossi', '1990-07-23', 'Napoli', NULL),
('Anna', 'Verdi', '1978-12-01', 'Roma', 'ASL-RM05'),
('Giulia', 'Neri', '2000-02-14', 'Milano', 'ASL-MI03'),
('Francesco', 'Esposito', '1983-09-19', 'Napoli', 'ASL-NA07'),
('Marta', 'Conti', '1995-05-30', 'Roma', NULL);

INSERT INTO visite (data_visita, pressione_min, pressione_max, peso, glicemia, id_paziente)
VALUES 
('2025-11-08', 70, 175, 80.00, 120, 1),
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
select p.cognome, p.nome, avg(v.pressione_min) as mediaPressionemin
from pazienti p
join visite v
ON p.id_paziente = v.id_paziente
where p.nome = 'Luca' and p.cognome = 'Bianchi';

-- media della pressione di tutti
select p.cognome, p.nome, avg(v.pressione_min) as mediaPressionemin
from pazienti p
join visite v
ON p.id_paziente = v.id_paziente
group by p.cognome;

select p.cognome, p.nome, v.data_visita 
from pazienti p
join visite v
ON p.id_paziente = v.id_paziente
where v.data_visita = '2025-01-09';

select p.cognome, p.nome, v.data_visita 
from pazienti p
join visite v
ON p.id_paziente = v.id_paziente
where v.data_visita = CURDATE();

select p.cognome, p.nome, v.data_visita 
from pazienti p
join visite v
ON p.id_paziente = v.id_paziente
where year(v.data_visita) = YEAR(CURDATE());

select p.cognome, p.nome, v.data_visita 
from pazienti p
join visite v
ON p.id_paziente = v.id_paziente
where v.data_visita like '2025-%-%';

select p.cognome, p.nome, v.data_visita 
from pazienti p
join visite v
ON p.id_paziente = v.id_paziente
where month(v.data_visita) = month(CURDATE());

select p.cognome, p.nome, v.data_visita 
from pazienti p
join visite v
ON p.id_paziente = v.id_paziente
where v.data_visita like '%-11-%';

-- Visualizzare i pazienti che hanno una differenza tra pressione max e
-- pressione minima inferiore a 40
SELECT p.cognome, p.nome, v.pressione_min, v.pressione_max
FROM pazienti p
JOIN visite v ON p.id_paziente = v.id_paziente
WHERE (v.pressione_max - v.pressione_min) < 40;

select nome, cognome, v.data_visita
from pazienti p
inner join visite v on p.id_paziente = v.id_paziente;

select nome, cognome, v.data_visita
from pazienti p
left join visite v 
on p.id_paziente = v.id_paziente;

select nome, cognome, anno_nascita
from pazienti;

select glicemia
from visite
where glicemia > 130;

-- Mostrare nome, cognome e provincia dei pazienti che appartengono alla provincia di Milano.
select nome, cognome, provincia
from pazienti
where provincia = 'Milano';

-- Elencare i pazienti che non hanno un codice ASL (asl = NULL).
select nome, cognome, asl
from pazienti
where asl is NULL;

-- Mostrare tutte le colonne della tabella visite ordinate dalla data più recente alla meno recente.
select *
from visite v
order by v.data_visita DESC; -- ASC

-- Mostrare nome, cognome e glicemia di ogni visita effettuata.
select nome, cognome, v.glicemia
from pazienti p
join visite v
on v.id_paziente = p.id_paziente;

-- Mostrare nome, cognome e peso delle visite con peso maggiore di 90 kg.
select nome, cognome, v.peso
from pazienti p
join visite v
on v.id_paziente = p.id_paziente
where peso > 90;

-- Visualizzare solo i pazienti che hanno almeno una visita.
select nome, cognome
from pazienti p
join visite v
on v.id_paziente = p.id_paziente;

-- Visualizzare tutti i pazienti, anche quelli senza visite.
select nome, cognome
from pazienti p
left join visite v
on v.id_paziente = p.id_paziente;

-- Mostrare le visite dei pazienti nati dopo il 1985.
select nome, cognome, p.anno_nascita 
from pazienti p
join visite v
on v.id_paziente = p.id_paziente
where p.anno_nascita > 1985;

-- Calcolare la pressione minima media di ogni paziente.
select nome, cognome, avg(v.pressione_min) as mediaPressione
from pazienti p
join visite v
on v.id_paziente = p.id_paziente
group by p.nome, p.cognome;

-- Calcolare la glicemia massima registrata per ogni paziente.
select nome, cognome, MAX(v.glicemia) as MAXGlicemia
from pazienti p
join visite v
on v.id_paziente = p.id_paziente
group by p.nome, p.cognome;

-- Trovare il paziente che ha la pressione massima più alta di tutte.
select nome, cognome, v.pressione_max
from pazienti p
join visite v
on v.id_paziente = p.id_paziente
group by p.nome, p.cognome
order by v.pressione_max DESC
Limit 1;



DROP TABLE visite;
DROP TABLE pazienti;
