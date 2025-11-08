alter table docenti 
	change column abilitazione classe_concorso varchar(50),
	change column cf codice_fiscale int not null unique,
	add column ruolo tinyint(1) default 0,
	drop column citta,
	drop column telefono;