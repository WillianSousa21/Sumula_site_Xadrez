create database xadrez2;
use xadrez2;
CREATE TABLE JOGADAS (
  id_movimento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  MOVIMENTOS VARCHAR(10) BINARY NOT NULL,
  temp_jogada TIME NOT NULL,
  PRIMARY KEY(id_movimento)
);
CREATE TABLE jogadores (
  idjogadores  INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  torneio_idtorneio INTEGER UNSIGNED NOT NULL,
  nome  VARCHAR(45) NULL,
  pais  VARCHAR(20) NULL,
  data_nascimento DATE NULL,
  PRIMARY KEY(idjogadores )
  ); 

CREATE TABLE Partida (
  idPartida INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  JOGADAS_id_movimento INTEGER UNSIGNED NOT NULL,
  jogador2_idjogador2 INTEGER UNSIGNED NOT NULL,
  Jogador1_idJogador1 INTEGER UNSIGNED NOT NULL,
  Mesa INTEGER UNSIGNED NULL,
  data_hora DATETIME NULL,
  PRIMARY KEY(idPartida)
);

CREATE TABLE Pecas (
  codigopecas  INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  JOGADAS_id_movimento INTEGER UNSIGNED NOT NULL,
  nome_peca VARCHAR(10) NULL,
  Sigla CHAR(2) NULL,
  quantidade INTEGER UNSIGNED NULL,
  PRIMARY KEY(codigopecas)
);

CREATE TABLE torneio (
  idtorneio INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  UF VARCHAR(5) NOT NULL,
  PAIS INTEGER UNSIGNED NOT NULL,
  data_evento DATE NOT NULL,
  PRIMARY KEY(idtorneio)
);

insert into Pecas  (nome_peca, Sigla, quantidade, rating) values 
("Rei","K",1),
("Rainha", "Q", 1),
("Bispo","B", 2),
("Cavalo","N", 2),
("Torre","R", 2),
("Peao", " ", 8);

insert into JOGADORES (nome, pais, dat_nascimento) values
("Jose", "Brasil", 06/06/1997),
("Caique", "Espanha", '2000-07-04');

insert into Partida (Mesa, data_hora) values 
(1, '2022-08-23 20-27:00'),
(2, '2022-08-24 20-30:00'),
(3, '2022-09-09 20-30:00'),
(4, '2022-10-10 21-40:00');

insert into torneio (UF, PAIS, data_evento) values
("SP", "Brasil", '2022-08-24');

insert into jogadores (nome, pais, data_nascimento) values
("Larissa", "Brasil", "1998-06-04"),
("Kelvin", "Canada","1999-02-25");

CREATE TABLE Jogador1 (
  idJogador1 INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  jogadores_idjogadores  INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idJogador1),
  INDEX Jogador1_FKIndex1(jogadores_idjogadores )
);

CREATE TABLE jogador2 (
  idjogador2 INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  jogadores_idjogadores  INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idjogador2),
  INDEX jogador2_FKIndex1(jogadores_idjogadores )
);
select *from Partida;

alter table Partida
add INDEX Partida_FKIndex1(Jogador1_idJogador1),
add INDEX Partida_FKIndex2(jogador2_idjogador2),
add INDEX Partida_FKIndex3(JOGADAS_id_movimento);

alter table Pecas
add INDEX Pecas_FKIndex1(JOGADAS_id_movimento);

alter table jogadores
add  INDEX jogadores_FKIndex1(torneio_idtorneio);