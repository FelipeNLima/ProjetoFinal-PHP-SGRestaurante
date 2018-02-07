CREATE DATABASE BD_RESTAURANTE;

USE BD_RESTAURANTE;

CREATE TABLE PAGAMENTO (
id_pagamento int 		PRIMARY KEY 	AUTO_INCREMENT,
Data_entrada datetime,
Troco decimal(9,2),
Valor decimal(9,2),
id_caixa int,
id_venda int,
id_formapagamento int,
id_bandeira int
);

CREATE TABLE CAIXA (
id_caixa int 		PRIMARY KEY 	AUTO_INCREMENT,
Valor Decimal(9,2),
Data_abertura datetime,
Data_fechamento datetime
);

CREATE TABLE FORMA_PAGAMENTO (
id_formapagamento int 		PRIMARY KEY 	AUTO_INCREMENT,
tipo_pagamento varchar(200),
id_bandeira int
);

CREATE TABLE BANDEIRA_CARTAO (
id_bandeira int 			PRIMARY KEY 	AUTO_INCREMENT,
nome_bandeira varchar(200)
);

CREATE TABLE MESA (
id_mesa int 	PRIMARY KEY 	AUTO_INCREMENT,
Status int,
numero int
);

CREATE TABLE CATEGORIACARDAPIO (
id_categoriacardapio int 		PRIMARY KEY 	AUTO_INCREMENT,
nome_categoria varchar(200)
);

CREATE TABLE CONSUMO (
id_consumo int 			PRIMARY KEY 	AUTO_INCREMENT,
quantidade int,
valor_unitario decimal(9,2),
id_venda int,
id_cardapio int
);

CREATE TABLE CARDAPIO (
id_cardapio int 		PRIMARY KEY 	AUTO_INCREMENT,
nome_cardapio varchar(200),
preco decimal(9,2),
id_categoriacardapio int
);

CREATE TABLE CATEGORIAPRODUTO (
id_categoriaproduto int 		PRIMARY KEY		AUTO_INCREMENT,
nome_categoria varchar(200)
);

CREATE TABLE PRODUTO (
id_produto int 		PRIMARY KEY 	AUTO_INCREMENT,
nome_produto varchar(200),
preco decimal(9,2),
estoque_minimo int,
estoque_atual int,
id_categoriaproduto int
);

CREATE TABLE CARGO (
id_cargo int 		PRIMARY KEY 	AUTO_INCREMENT,
cargo varchar(200)
);

CREATE TABLE USUARIO (
id_usuario int 		PRIMARY KEY 	AUTO_INCREMENT,
nome varchar(200),
login varchar(200),
senha varchar(200),
Data datetime,
id_cargo int
);

CREATE TABLE VENDA (
id_venda int 		PRIMARY KEY  	AUTO_INCREMENT,
Desconto varchar(200),
Data datetime,
Numero_pessoas int,
Status int,
id_taxaservico int,
id_couvert int,
id_usuario int,
id_mesa int
);

CREATE TABLE Couvert_Artistico (
id_couvert int 				PRIMARY KEY  	AUTO_INCREMENT,
Data datetime,
valor decimal(9,2)
);

CREATE TABLE TAXA_SERVICO (
id_taxaservico int 			PRIMARY KEY 	AUTO_INCREMENT,
valor decimal(9,2),
Data datetime,
id_usuario int
);

CREATE TABLE ESTOQUE (
id_estoque int 		PRIMARY KEY 	AUTO_INCREMENT,
Data_entrada  datetime,
quantidade_entrada int,
id_produto int
);




ALTER TABLE TAXA_SERVICO 	ADD CONSTRAINT FOREIGN KEY(id_usuario) 				REFERENCES USUARIO (id_usuario);
ALTER TABLE ESTOQUE 		ADD CONSTRAINT FOREIGN KEY(id_produto) 				REFERENCES PRODUTO (id_produto);
ALTER TABLE PAGAMENTO 		ADD CONSTRAINT FOREIGN KEY(id_caixa) 				REFERENCES CAIXA (id_caixa);
ALTER TABLE PAGAMENTO 		ADD CONSTRAINT FOREIGN KEY(id_venda) 				REFERENCES VENDA (id_venda);
ALTER TABLE PAGAMENTO 		ADD CONSTRAINT FOREIGN KEY(id_bandeira) 			REFERENCES BANDEIRA_CARTAO (id_bandeira);
ALTER TABLE PAGAMENTO 		ADD CONSTRAINT FOREIGN KEY(id_formapagamento) 		REFERENCES FORMA_PAGAMENTO (id_formapagamento);
ALTER TABLE FORMA_PAGAMENTO ADD CONSTRAINT FOREIGN KEY(id_bandeira) 			REFERENCES BANDEIRA_CARTAO (id_bandeira);
ALTER TABLE CONSUMO 		ADD CONSTRAINT FOREIGN KEY(id_venda) 				REFERENCES VENDA (id_venda);
ALTER TABLE CONSUMO 		ADD CONSTRAINT FOREIGN KEY(id_cardapio) 			REFERENCES CARDAPIO (id_cardapio);
ALTER TABLE VENDA 			ADD CONSTRAINT FOREIGN KEY(id_taxaservico) 			REFERENCES TAXA_SERVICO (id_taxaservico);
ALTER TABLE VENDA 			ADD CONSTRAINT FOREIGN KEY(id_couvert) 				REFERENCES Couvert_Artistico (id_couvert);
ALTER TABLE VENDA 			ADD CONSTRAINT FOREIGN KEY(id_usuario) 				REFERENCES USUARIO (id_usuario);
ALTER TABLE VENDA 			ADD CONSTRAINT FOREIGN KEY(id_mesa) 				REFERENCES MESA (id_mesa);
ALTER TABLE USUARIO 		ADD CONSTRAINT FOREIGN KEY(id_cargo) 				REFERENCES CARGO (id_cargo);
ALTER TABLE PRODUTO 		ADD CONSTRAINT FOREIGN KEY(id_categoriaproduto) 	REFERENCES CATEGORIAPRODUTO (id_categoriaproduto);
ALTER TABLE CARDAPIO 		ADD CONSTRAINT FOREIGN KEY(id_categoriacardapio) 	REFERENCES CATEGORIACARDAPIO (id_categoriacardapio);
