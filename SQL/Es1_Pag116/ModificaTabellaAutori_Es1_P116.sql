alter table autori
  change column cf codice_fiscale int not null unique,
  add column indirizzo varchar(40),
  add column cap varchar(5),
  change column cognome cognome varchar(50) not null,
  change column nome nome varchar(50) not null;
