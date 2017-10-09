-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-09-11 12:30:36.486

-- tables
-- Table: tblPapel
CREATE TABLE tblPapel (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(250) NULL,
    descricao varchar(250) NOT NULL,
    CONSTRAINT tblPapel_pk PRIMARY KEY (id)
);

-- Table: tblUsuario
CREATE TABLE tblUsuario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NULL,
    email varchar(100) NULL,
    senha varchar(50) NULL,
    CONSTRAINT tblUsuario_pk PRIMARY KEY (id)
);

-- Table: tblUsuarioPapel
CREATE TABLE tblUsuarioPapel (
    id int NOT NULL AUTO_INCREMENT,
    tblUsuario_id int NOT NULL,
    tblPapel_id int NOT NULL,
    CONSTRAINT tblUsuarioPapel_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: tblUsuarioPapel_tblPapel (table: tblUsuarioPapel)
ALTER TABLE tblUsuarioPapel ADD CONSTRAINT tblUsuarioPapel_tblPapel FOREIGN KEY tblUsuarioPapel_tblPapel (tblPapel_id)
    REFERENCES tblPapel (id);

-- Reference: tblUsuarioPapel_tblUsuario (table: tblUsuarioPapel)
ALTER TABLE tblUsuarioPapel ADD CONSTRAINT tblUsuarioPapel_tblUsuario FOREIGN KEY tblUsuarioPapel_tblUsuario (tblUsuario_id)
    REFERENCES tblUsuario (id);

-- End of file.

