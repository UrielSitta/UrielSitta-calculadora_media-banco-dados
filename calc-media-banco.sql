CREATE DATABASE calc_media2;

CREATE TABLE notas_alunos (
  ID_ALUNO INT PRIMARY KEY AUTO_INCREMENT,
  ALUNO VARCHAR(100) NOT NULL,
  NOTA01 VARCHAR(10) NOT NULL,
  NOTA02 VARCHAR(10) NOT NULL,
  NOTA03 VARCHAR(10) NOT NULL,
  NOTA04 VARCHAR(10) NOT NULL,
  NOTA05 VARCHAR(10) NOT NULL,
  MEDIA VARCHAR(10),
  SITUACAO VARCHAR(30)
);