alter table libri
  change column anno anno_pubblicazione int,
  add column cognome varchar(40),
  add column nome varchar(40),
  drop column autore;
