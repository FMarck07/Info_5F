delete from studenti where id_studente = 1;

delete from studenti where Cognome = 'Bianchi' and Nome = 'Giuseppe';

truncate table studenti; -- azzerare la tabella senza la struttura

update studenti set voto = 20 where id_studente = 3;

update studenti set Nome = 'POLI' where id_studente = 3;

update studenti set Nome = 'Giovanni' where Cognome = 'Verdi';

update studenti set Nome = 'Lucia' where nome = 'Giovanni';

select * from studenti;
