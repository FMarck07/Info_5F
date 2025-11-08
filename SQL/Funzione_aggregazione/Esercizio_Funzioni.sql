-- Creazione della tabella
create table studenti2 (
    idStudente int primary key not null auto_increment,
    cognome varchar(20),
    nome varchar(20),
    materia varchar(15),
    voto int not null
);

-- Inserimento dei dati
insert into studenti2 (cognome, nome, materia, voto)
values 
('Marchetto', 'Chirichetto', 'Scienze', 8),
('Messi', 'Leone', 'Mangiatoio', 5),
('Luisa', 'Ronaldo', 'Italiano', 9),
('Martina', 'Chirichetta', 'Matematica', 5),
('Anna', 'Marchetta', 'Tpsit', 4),
('Nonno', 'Marchetto', 'Storia', 10),
('Nonno', 'Marchetto', 'Storia', 5),
('Nonno', 'Poli', 'Storia', 10),
('Papa', 'Messi', 'Informatica', 6),
('Messi', 'Pessi', 'Informatica', 6),
('Penaldo', 'Ronaldo', 'Sistemi', 7),
('Neyger', 'Neymagro', 'Italiano', 7),
('Visegini', 'Nicola', 'Matematica', 8),
('Antonio', 'Salvato', 'Sistemi', 9),
('Gianna', 'Cappello', 'Tpsit', 5),
('Richard', 'Sella', 'Storia', 6);

-- Media voti per studente
select cognome, nome, avg(voto) as mediaVoti 
from studenti2
group by cognome, nome;


select cognome, nome, materia, avg(voto) as mediaVoti
from studenti2
group by cognome, nome, materia;


-- Tutti gli studenti con voto > 4, ordinati per voto crescente
select * 
from studenti2 
where voto > 4 
order by voto;

-- Studenti con nome di 8 caratteri che inizia con "C"
select * 
from studenti2 
where nome like 'C_______';

-- Studenti con nome che inizia con "C" (qualunque lunghezza)
select * 
from studenti2 
where nome like 'C%';

-- Eliminazione della tabella alla fine del test
drop table studenti2;

-- ALTER TABLE studenti2 ADD num_interrogazioni INT NOT NULL DEFAULT 0;
-- update studenti2 
-- set num_interrogazioni = 3 
-- where idStudente = 1;

alter table studenti2 add num_interrogazioni decimal (2,2);

update studenti2 
set num_interrogazioni = 3;

select cognome, nome, materia, avg(voto) as mediaVoti, sum(num_interrogazioni) as somma, count(num_interrogazioni) as num_interrogazioni
from studenti2
group by cognome, nome, materia
having mediaVoti>6 and num_interrogazioni > 0; 

-- Trova la media dei voti per materia , ma considera solo i voti da 6 in su e mostra solo le materie con media superiore a 7
select materia, avg(voto) as mediaVoti
from studenti2
where voto > 6 -- filtro lavora a livello di tabella
group by materia 
having mediaVoti > 7;  -- having lavora sulle funzione di aggregazioni

select cognome, nome, materia, avg(voto) as mediaVoti
from studenti2
where voto > 6
group by cognome, nome, materia 
having mediaVoti > 7;

select materia, voto
from studenti2 
where cognome = 'Nonno' and nome = 'Poli';


update studenti2
set voto = 5
where idStudente = 8;