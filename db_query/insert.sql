INSERT INTO `misericordia`.`ordine` (`id_ordine`, `cognome`, `nome`, `via`, `citta`, `tel`, `data_creazione`, `ora_esecuzione`, `casa`, `data_esecuzione`) VALUES ('', 'grasso', 'pippo', 'arch', 'aci', '333', '2019-10-19', '23-00', 'true', '2020-10-29');

select max(id_ordine) from ordine;

select curdate();

insert into ordine(cognome,nome,via,citta,tel,data_creazione,ricezione,affetto,peso,mazzo,ora_esecuzione,casa,routine,richiedente,richiesta,data_esecuzione,note,luogo_servizio) 
values("tamb","ph","ulivi","aci","2019-11-10","","","","","","","","","","","",

INSERT INTO `misericordia`.`utente` (`nome`, `cognome`, `data_nascita`, `ruolo`, `user`, `email`, `psw`) VALUES ('user', 'user', '12-1-2010', 'Centralinista', 'user', 'ciao', '12345');

select * from utente where user='user' and psw='12345';
select * from utente where user='' and psw='';

select * from ordine where data_esecuzione between curdate() and curdate() + interval 1 month;

select * from ordine where data_esecuzione between curdate() and curdate() + interval 1 month

select * from controllo_meccanico where id_mezzo = '".$id."' order by data_controllo DESC LIMIT 0,10
select * from controllo_meccanico c1 where id_mezzo = 1 and c1.ora = (select max(c2.ora) from controllo_meccanico c2 where id_mezzo = 1) order by data_controllo DESC LIMIT 1;
select * from (mezzo m join controllo_meccanico c on m.targa=c.targa) where c.id_mezzo = 1 and c.ora = (select max(c2.ora) from controllo_meccanico c2 where id_mezzo = 1) order by data_controllo DESC LIMIT 1;

delete from mezzo where id_mezzo = 25;