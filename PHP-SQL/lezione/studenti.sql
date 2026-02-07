create DATABASE if not exists francesco_marchetto_itis;
use francesco_marchetto_itis;
create table studenti(
	id int auto_increment primary key,
	nome varchar(20),
	cognome varchar(20),
	media float,
	data_iscrizione DATE
);

insert into studenti(nome, cognome, media, data_iscrizione) values
('Marco', 'Rossi', 6, '2003-05-12'),
('Luca', 'Bianchi', 6, '2004-07-12'),
('Giacomo', 'Neri', 6, '2007-08-12');
