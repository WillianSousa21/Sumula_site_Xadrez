CREATE TABLE JOGADAS  (
  id_movimento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Partida_idPartida INTEGER UNSIGNED NOT NULL,
  jogadores _idjogadores  INTEGER UNSIGNED NOT NULL,
  MOVIMENTOS VARCHAR(10) BINARY NOT NULL,
  Move_esp._idMove_esp. INTEGER UNSIGNED NULL,
  temp_jogada TIME NOT NULL,
  PRIMARY KEY(id_movimento),
  INDEX JOGADAS _FKIndex2(Move_esp._idMove_esp.),
  INDEX JOGADAS _FKIndex3(jogadores _idjogadores ),
  INDEX JOGADAS _FKIndex4(jogadores _idjogadores ),
  INDEX JOGADAS _FKIndex4(Partida_idPartida)
);

CREATE TABLE jogadores  (
  idjogadores  INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  torneio_idtorneio INTEGER UNSIGNED NOT NULL,
  nome  VARCHAR(45) NULL,
  pais  VARCHAR(20) NULL,
  data de nascimento DATE NULL,
  PRIMARY KEY(idjogadores ),
  INDEX jogadores _FKIndex1(torneio_idtorneio)
);

CREATE TABLE Move_esp. (
  idMove_esp. INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  abr_esp VARCHAR(10) NULL,
  exp_move TEXT NULL,
  PRIMARY KEY(idMove_esp.)
);

CREATE TABLE Partida (
  idPartida INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  jogadores _idjogadores  INTEGER UNSIGNED NOT NULL,
  Mesa INTEGER UNSIGNED NULL,
  data_hora DATETIME NULL,
  jogador_2 INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idPartida),
  INDEX Partida_FKIndex1(jogadores _idjogadores ),
  INDEX Partida_FKIndex2(jogadores _idjogadores )
);

CREATE TABLE Peças (
  codigopecas  INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  JOGADAS _id_movimento INTEGER UNSIGNED NOT NULL,
  nome_peca VARCHAR(10) NULL,
  Sigla CHAR(2) NULL,
  quantidade INTEGER UNSIGNED NULL,
  rating INTEGER UNSIGNED NULL,
  PRIMARY KEY(codigopecas ),
  INDEX PEÇAS _FKIndex1(JOGADAS _id_movimento)
);

CREATE TABLE torneio (
  idtorneio INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  UF VARCHAR(5) NOT NULL,
  PAIS INTEGER UNSIGNED NOT NULL,
  data_evento DATE NOT NULL,
  PRIMARY KEY(idtorneio)
);


