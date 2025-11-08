create table docenti (
    codice int AUTO_INCREMENT PRIMARY KEY,
    cf varchar(50) NOT NULL UNIQUE,
    cognome varchar(50) NOT NULL,
    nome varchar(50) NOT NULL,
    abilitazione varchar(50)
);