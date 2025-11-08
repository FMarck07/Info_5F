create table autori (
	codice int auto_increment primary key,
	cf varchar(50) not null unique,
    cognome varchar(50),
    nome varchar(50),
    citta varchar(50)
)