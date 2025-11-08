alter table alunni
	change column cf codice_fiscale int not null unique,
	change column data data_nascita date,
	add column corso varchar(20),
	add column sezione varchar(5);
