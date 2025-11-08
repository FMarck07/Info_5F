alter table studenti add dipartimento varchar(50);

alter table studenti drop column dipartimento;

alter table studenti change column cognome cognome char(20) not null after id_studente;

alter table studenti change column cognome Cognome char(20) not null first;