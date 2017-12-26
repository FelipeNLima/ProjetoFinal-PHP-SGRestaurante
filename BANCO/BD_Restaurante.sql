CREATE DATABASE BD_RESTAURANTE;

USE BD_RESTAURANTE;

CREATE TABLE FORMA_PAGAMENTO (
id_formaPagamento			int		PRIMARY KEY		AUTO_INCREMENT,
tipo_pagamento				varchar(50),
apagado						bit
);

CREATE TABLE BANDEIRA_CARTAO (
id_bandeiras				int		PRIMARY KEY		AUTO_INCREMENT,
nome_bandeiras				varchar(50),
taxa						decimal (9,2),
apagado						bit,
id_formaPagamento			int
);

CREATE TABLE PAGAMENTO (
id_pagamento				int		PRIMARY KEY		AUTO_INCREMENT,
Valor_total					decimal(9,2),
Valor_recebido				decimal(9,2),
data						date,
troco						decimal(9,2), 
id_venda					int,
id_formaPagamento			int,
id_bandeiras				int,
id_caixa					int
);

CREATE TABLE GARCOM (
id_garcom					int		PRIMARY KEY		AUTO_INCREMENT,
codigo						int,
taxa_servico				decimal(9,2),
nome_garcom					varchar(50),
apagado						bit
);

CREATE TABLE CATEGORIAPRODUTO (
id_categoriaproduto			int		PRIMARY KEY		AUTO_INCREMENT,
descricao					varchar(50),
apagado						bit
);

CREATE TABLE CATEGORIACARDAPIO (
id_categoriacardapio		int		PRIMARY KEY		AUTO_INCREMENT,
descricao					varchar(50),
apagado						bit
);

CREATE TABLE PRODUTO (
id_produto					int		PRIMARY KEY		AUTO_INCREMENT,
preco_custo					decimal(9,2),
nome_produto				varchar(50),
estoque_atual				int,
estoque_minimo				int,
apagado						bit,
id_categoriaproduto			int
);

CREATE TABLE CARDAPIO (
id_cardapio					int		PRIMARY KEY		AUTO_INCREMENT,
nome_item					varchar(100),
preco_item					decimal(9,2),
apagado						bit,
id_categoriacardapio		int
);

CREATE TABLE MESA (
id_mesa						int		PRIMARY KEY		AUTO_INCREMENT,
Numero_mesas				int,
Status						tinyint
);

CREATE TABLE CONSUMO (
id_consumo					int		PRIMARY KEY		AUTO_INCREMENT,
quantidade					int,
Subtotal	 				decimal(9,2),
Valor_total 				decimal(9,2),
apagado						bit,
id_cardapio					int,
id_venda					int
);

CREATE TABLE VENDA (
id_venda					int		PRIMARY KEY		AUTO_INCREMENT,
Numero_pessoa				int,
Desconto					decimal(9,2),
Status_venda				tinyint,
Data_entrada				datetime,
Data_saida					datetime,
Couvert_artistico			decimal(9,2),
id_garcom					int,
id_mesa						int
);

CREATE TABLE LOGIN (
id_login					int		PRIMARY KEY		AUTO_INCREMENT,
Usuario						varchar(50),
Senha						varchar(128)
);


CREATE TABLE CAIXA (
id_caixa					int		PRIMARY KEY		AUTO_INCREMENT,
data_fechamento				datetime,
valor_inicial				decimal(9,2),
valor_final					decimal(9,2),
data_abertura				datetime,
diferença					decimal(9,2),
StatusCaixa					tinyint				
);

CREATE TABLE RESTAURANTE (
id_restaurante				int		PRIMARY KEY		AUTO_INCREMENT,
Nome_restaurante			varchar(250),
IE							varchar(220),
CNPJ						varchar(220),
Nome_fantasia				varchar(250),
email						varchar(250),
Telefone					varchar(250),
Endereco					varchar(50),
numero						int,
Cidade						varchar(250),
Estado						varchar(220),
cep							varchar(250)
);



ALTER TABLE BANDEIRA_CARTAO	 ADD FOREIGN KEY(id_formaPagamento)		REFERENCES FORMA_PAGAMENTO (id_formaPagamento);
ALTER TABLE PAGAMENTO		 ADD FOREIGN KEY(id_venda)				REFERENCES VENDA (id_venda);
ALTER TABLE PAGAMENTO		 ADD FOREIGN KEY(id_caixa)				REFERENCES CAIXA (id_caixa);
ALTER TABLE PAGAMENTO		 ADD FOREIGN KEY(id_formaPagamento)		REFERENCES FORMA_PAGAMENTO (id_formaPagamento);
ALTER TABLE PAGAMENTO		 ADD FOREIGN KEY(id_bandeiras)			REFERENCES BANDEIRA_CARTAO (id_bandeiras);
ALTER TABLE PRODUTO			 ADD FOREIGN KEY(id_categoriaproduto)	REFERENCES CATEGORIAPRODUTO (id_categoriaproduto);
ALTER TABLE CONSUMO			 ADD FOREIGN KEY(id_venda)				REFERENCES VENDA (id_venda);
ALTER TABLE CONSUMO			 ADD FOREIGN KEY(id_cardapio)			REFERENCES CARDAPIO (id_cardapio);
ALTER TABLE CARDAPIO		 ADD FOREIGN KEY(id_categoriacardapio)	REFERENCES CATEGORIACARDAPIO (id_categoriacardapio);
ALTER TABLE VENDA			 ADD FOREIGN KEY(id_mesa)	            REFERENCES MESA (id_mesa);
ALTER TABLE VENDA			 ADD FOREIGN KEY(id_garcom)				REFERENCES GARCOM (id_garcom);




INSERT INTO Login
	(Usuario,Senha)
 VALUES
	('admin','123');



