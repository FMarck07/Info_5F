create table Studenti (
 id_studente int auto_increment primary key, 
 Nome varchar(50),
 Cognome varchar(50),
 DataNascita date,
 Corso varchar(20),
 Voto decimal(4,2)
 );