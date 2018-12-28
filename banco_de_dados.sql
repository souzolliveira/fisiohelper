CREATE TABLE pacientes (
	id SERIAL,
	name varchar(100),
	data_nascimento DATETIME,
	genero_fk INT,
	email varchar(100),
	cel varchar(20),
	obs varchar(100),
	howmeet_fk INT,
	endereco_fk INT,
	RG varchar(20),
	CPF varchar(11),
	convenio_fk INT,
	naturalidade varchar(100),
	estado_naturalidade varchar(2),
	nacionalidade varchar(100),
	etnia varchar(100),
	religiao varchar(100),
	profissao varchar(100),
	estado_civil_fk INT,
	escolaridade_fk INT,
	parentesco_fk INT,
	cns varchar(100),
	info_adicional varchar(100),
	PRIMARY KEY (id)
);

CREATE TABLE genero (
	id SERIAL,
	genero varchar(10),
	PRIMARY KEY (id)
);

CREATE TABLE howmeet (
	id SERIAL,
	howmeet varchar(20),
	PRIMARY KEY (id)
);

CREATE TABLE enderecos (
	id SERIAL,
	logradouro varchar(100),
	numero INT,
	bairro varchar(20),
	complemento varchar(20),
	cep INT,
	cidade varchar(30),
	estado varchar(2),
	pais varchar(20),
	PRIMARY KEY (id)
);

CREATE TABLE convenios (
	id SERIAL,
	convenio_fk INT,
	plano varchar(100),
	n_carteirinha varchar(100),
	validade DATETIME,
	acomodacao varchar(100),
	PRIMARY KEY (id)
);

CREATE TABLE convenio (
	id SERIAL,
	convenio varchar(20),
	PRIMARY KEY (id)
);

CREATE TABLE estado_civil (
	id SERIAL,
	estado varchar(20),
	PRIMARY KEY (id)
);

CREATE TABLE escolaridade (
	id SERIAL,
	escolaridade varchar(20),
	PRIMARY KEY (id)
);

CREATE TABLE parentesco (
	id SERIAL,
	nome_mae varchar(100),
	profissao_mae varchar(100),
	nome_pai varchar(100),
	profissao_pai varchar(100),
	PRIMARY KEY (id)
);

CREATE TABLE consultas (
	id SERIAL,
	patient_fk INT,
	agenda TIMESTAMP,
	QP varchar(100),
	OFP varchar(100),
	HMA varchar(100),
	HPP varchar(100),
	APF varchar(100),
	alimentacao varchar(100),
	sono varchar(100),
	posicao_dormir varchar(100),
	tabagismo BOOLEAN,
	tabagismo_freq varchar(10),
	etilismo BOOLEAN,
	etilismo_freq BOOLEAN,
	medicamentos varchar(100),
	exames_complementares varchar(100),
	como_esta_setor varchar(100),
	sinais_vitais varchar(100),
	como_realizar_avds varchar(100),
	sensibilidade varchar(100),
	motricidade_reflexa varchar(100),
	tonus_muscular_fk INT,
	presenca BOOLEAN,
	pg BOOLEAN,
	exercicio_fk INT,
	PRIMARY KEY (id)
);

CREATE TABLE tonus_muscular (
	id SERIAL,
	descricao varchar(20),
	PRIMARY KEY (id)
);

CREATE TABLE exercicio (
	id SERIAL,
	tipo_movimento INT,
	adm_p_d INT,
	adm_p_e INT,
	adm_a_d INT,
	adm_a_e INT,
	fm_d INT,
	fm_e INT,
	PRIMARY KEY (id)
);

CREATE TABLE tipo_movimento (
	id SERIAL,
	tipo varchar(4),
	descricao varchar(30),
	PRIMARY KEY (id)
);

ALTER TABLE pacientes ADD CONSTRAINT patients_fk0 FOREIGN KEY (genero_fk) REFERENCES genero(id);

ALTER TABLE pacientes ADD CONSTRAINT patients_fk1 FOREIGN KEY (howmeet_fk) REFERENCES howmeet(id);

ALTER TABLE pacientes ADD CONSTRAINT patients_fk2 FOREIGN KEY (endereco_fk) REFERENCES enderecos(id);

ALTER TABLE pacientes ADD CONSTRAINT patients_fk3 FOREIGN KEY (convenio_fk) REFERENCES convenios(id);

ALTER TABLE pacientes ADD CONSTRAINT patients_fk4 FOREIGN KEY (estado_civil_fk) REFERENCES estado_civil(id);

ALTER TABLE pacientes ADD CONSTRAINT patients_fk5 FOREIGN KEY (escolaridade_fk) REFERENCES escolaridade(id);

ALTER TABLE pacientes ADD CONSTRAINT patients_fk6 FOREIGN KEY (parentesco_fk) REFERENCES parentesco(id);

ALTER TABLE convenios ADD CONSTRAINT convenios_fk0 FOREIGN KEY (convenio_fk) REFERENCES convenio(id);

ALTER TABLE consultas ADD CONSTRAINT consultas_fk0 FOREIGN KEY (patient_fk) REFERENCES pacientes(id);

ALTER TABLE consultas ADD CONSTRAINT consultas_fk1 FOREIGN KEY (tonus_muscular_fk) REFERENCES tonus_muscular(id);

ALTER TABLE consultas ADD CONSTRAINT consultas_fk2 FOREIGN KEY (exercicio_fk) REFERENCES exercicio(id);

ALTER TABLE exercicio ADD CONSTRAINT exercicio_fk0 FOREIGN KEY (tipo_movimento) REFERENCES tipo_movimento(id);

