select *from Studenti; -- mi fa vedere la linea dove si trova il cursore
select Nome, Cognome from Studenti;
select Nome, Cognome from Studenti where Voto>27;
select *from Studenti where Voto between 23 and 29;
select *from Studenti where Corso in ('Informatica', 'Sistemi');
select *from Studenti where Corso like 'i%';
select *from Studenti where Corso like 'I__________';
-- Funzioni di aggregazione
select COUNT(*) from Studenti;