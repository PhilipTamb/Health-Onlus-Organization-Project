drop database misericordia;

create database misericordia;

use misericordia;

create table clienti(
id_cliente integer auto_increment,
nome varchar(100) not null,
tel varchar(20),
email text,
indirizzo text,
citta varchar(100),
primary key(id_cliente)
);

create table utente(
id_utente  integer  auto_increment,
nome varchar(100),
cognome varchar(100),
data_nascita date,
citta_nascita varchar(100),
citta_residenza varchar(100),
indirizzo text,
tel varchar(20),
ruolo varchar(50),
user varchar(100) not null,
email text,
psw varchar(100) not null,
unique(user,psw),
primary key(id_utente)
);

create table ordine(
id_ordine  integer auto_increment,
cognome varchar(100),
nome varchar(100),
indirizzo text,
citta varchar(100),
tel varchar(20),
data_creazione date, -- AAAA-MM-GG
ora_creazione time,
affetto text NULL,
peso varchar(5) NULL,
mezzo varchar(50),
data_esecuzione date,
ora_esecuzione varchar(20),
casa boolean,
cliente text,
richiedente varchar(100),
tipo_richiesta text,
note text NULL,
luogo_servizio text,
primary key(id_ordine)
);

create table mezzo(
id_mezzo integer auto_increment,
sigla varchar(10),
targa varchar(8),
modello varchar(50),
cilindrata varchar(20),
primary key(id_mezzo)
);

create table controllo_meccanico(
id_controllo integer auto_increment,
id_mezzo integer,
targa varchar(8),
sigla_mezzo varchar(10),
modello_mezzo varchar(50),
data_controllo date,
ora time,
km integer(10),
autista varchar(50),
soccorritori text,
n_cinghie_carrozzelle integer(5),
autoradio boolean,
radio_144 boolean,
clacson boolean,
sirena boolean,
lampeggiatori boolean,
telecamere_monitor boolean,
fari_abbaglianti boolean,
fari_fendinebbia boolean,
fari_anabbaglianti boolean,
luci_arresto boolean,
luci_vano_sanitario boolean,
luci_retromarcia boolean,
luci_carico boolean,
luci_cruscotto boolean,
luci_direzione boolean,
luci_targa boolean,
luci_posizione boolean,
luci_vano_guida boolean,
sollevatore_carrozzelle boolean,
ruota_scorta boolean,
kit_scasso boolean,
triangolo boolean,
catene boolean,
libretto boolean,
scheda_carburante boolean,
tergicristalli boolean,
cric boolean,
chiave boolean,
giubbino boolean,
estintori boolean,
faro_portatile boolean,
tagliando_assicurativo boolean,
card_pin boolean,
gancio_traino boolean,
suoneria_retromarcia boolean,
segnalazioni text,
primary key(id_controllo),
foreign key(id_mezzo) references mezzo(id_mezzo) on delete cascade on update cascade
);
