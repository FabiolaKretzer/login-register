CREATE DATABASE exercicio_final;

USE exercicio_final;

CREATE TABLE tipo_pacote
(
	id int unsigned not null auto_increment,
	nome_tipo varchar(40) not null,
	PRIMARY KEY (id)
);

CREATE TABLE conta 
( 
	cod int unsigned not null auto_increment,
    nome varchar(40) not null,
    email varchar(40) not null,
    senha varchar(20) not null,
	id_pacote int unsigned not null,
    PRIMARY KEY (cod),
	CONSTRAINT id_tipo_pacote FOREIGN KEY (id_pacote) REFERENCES tipo_pacote (id)

);

INSERT INTO tipo_pacote(nome_tipo) VALUES ('Premium');
INSERT INTO tipo_pacote(nome_tipo) VALUES ('Base');

INSERT INTO conta(nome, email, senha, id_pacote) VALUES ('José', 'jose@softblue.com.br', md5('123456'), 1);
INSERT INTO conta(nome, email, senha, id_pacote) VALUES ('Wagner', 'wagner@softblue.com.br', md5('654321'), 2);

SELECT nome_tipo FROM tipo_pacote ORDER BY nome_tipo ASC;
SELECT * FROM conta;

DELETE FROM conta WHERE cod > 0;

ALTER TABLE conta MODIFY senha VARCHAR(32) ;

