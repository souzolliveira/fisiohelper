CREATE TABLE representantes(
	id serial not null,
	nome_completo varchar(100),
	data_nascimento date,
	telefone varchar(14),
	email varchar(100),
	senha varchar(20),
	região_atuacao varchar(100),
	experiencia varchar(300),
	status varchar(10),
	cpf varchar(12),
	rg varchar(12),
	constraint represetantes_id_pk primary key (id)
);
INSERT INTO cadastros(nome_completo, data_nascimento, telefone, email, senha, região_atuacao, experiencia, status) 
VALUES ('João Garninzé', '1983/10/22', '(35)98765-4532', 'joaogarninze@yahoo.com.br', 'abc1234', 'Conceição dos Ouros', 'blablabla', 'aguardando'),
(' ', '', '', '', '', '', '', ''),
(' ', '', '', '', '', '', '', ''),
(' ', '', '', '', '', '', '', ''),
(' ', '', '', '', '', '', '', ''),
(' ', '', '', '', '', '', '', ''),
(' ', '', '', '', '', '', '', ''),
(' ', '', '', '', '', '', '', ''),
(' ', '', '', '', '', '', '', ''),
(' ', '', '', '', '', '', '', '');

CREATE TABLE vendas(
	id serial not null,
	representantes_id integer not null,
	valor float not null,
	data_venda date not null,
	detalhes varchar(300) not null,
	constraint vendas_fk foreign key (representantes_id)
		references representantes(id) on delete no action on update no action,
	constraint vendas_pk primary key (id)
);
INSERT INTO vendas (representantes_id, valor, data_venda, detalhes) 
VALUES (1, 550.00, '2018/03/25', 'Padaria São Pedro'), (2, , '', ''), (3, , '', ''), (4, , '', ''), (5, , '', ''), 
(6, , '', ''), (7, , '', ''), (8, , '', ''), (9, , '', ''), (10, , '', ''),
(1, , '', ''), (2, , '', ''), (3, , '', ''), (4, , '', ''), (5, , '', ''), 
(6, , '', ''), (7, , '', ''), (8, , '', ''), (9, , '', ''), (10, , '', ''),
(1, , '', ''), (2, , '', ''), (3, , '', ''), (4, , '', ''), (5, , '', ''), 
(6, , '', ''), (7, , '', ''), (8, , '', ''), (9, , '', ''), (10, , '', '');

CREATE TABLE nivel(
	id integer not null,
	min float not null,
	max float not null,
	porcentagem float not null,
	constraint conquistas_pk primary key (id)
);

INSERT INTO nivel(id, min, max, porcentagem) 
VALUES (6, 12000.01, 14400, 0.075), 
(7, 14400.01, 16800.00, 0.08), 
(8, 16800.01, 19200.00, 0.085), 
(9, 19200.01, 21600.00, 0.09), 
(10, 21600.01, 24000.00, 0.095), 
(11, 24000.01, 100000.00, 0.10);

CREATE TABLE notificacao(
	id serial not null,
	representantes_id integer not null,
	mensagem varchar(1000) not null,
	constraint representantes_notificacao_fk foreign key (representantes_id)
		references representantes(id) on delete no action on update no action,
	constraint notificacao_pk primary key (id)
);
INSERT INTO notificacao(representantes_id, mensagem)
VALUES(1, 'Notificação teste'), (2, 'Notificação teste'), (3, 'Notificação teste'), (4, 'Notificação teste'), 
(5, 'Notificação teste'),(6, 'Notificação teste'),(7, 'Notificação teste'),(8, 'Notificação teste'),
(9, 'Notificação teste'), (10, 'Notificação teste');

CREATE TABLE endereco(
	id serial not null,
	representante_id integer not null,
	endereco varchar(100),
	bairro varchar(100),
	cidade varchar(100),
	estado varchar(100),
	constraint representantes_endereco_fk foreign key (representantes_id)
		references cadastros(id) on delete no action on update no action,
	constraint represetantes_id_pk primary key (id)
);