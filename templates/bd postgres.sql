CREATE TABLE adversario(
	id SERIAL,
	adversario VARCHAR(20) NOT NULL,
	constraint adversario_pk primary key (id)
);
CREATE TABLE resultado(
	id SERIAL,
	resultado VARCHAR(10) NOT NULL,
	constraint resultado_pk primary key (id)
);
CREATE TABLE jogos(
	id SERIAL,
	data DATE NOT NULL,
	local VARCHAR(10) NOT NULL,
	adversario_id INT NOT NULL,
	placar VARCHAR(10) NOT NULL,
	resultado_id INT NOT NULL,
	nois VARCHAR(100) NOT NULL,
	observacao VARCHAR(100),
	constraint jogos_adversario_fk foreign key (adversario_id)
		references adversario(id) on delete no action on update no action,
	constraint jogos_resultado_fk foreign key (resultado_id)
		references resultado(id) on delete no action on update no action,
	constraint jogos_pk primary key (id)
);

INSERT INTO adversario(adversario) VALUES
('Tanque'),
('Rosário'),
('João Pescoço'),
('Geminho'),
('Julinho');
INSERT INTO resultado(resultado) VALUES
('Vitória'),
('Derrota'),
('Empate');
INSERT INTO jogos (data, local, adversario_id, placar, resultado_id, nois, observacao) VALUES
('10/01/2017', 'Adilson', 4, '10+', 1, 'Willian, Hugo, Emanuel, Almir, Everson, Ghetti, Leo', ''),
('18/01/2017', 'Ivan', 3, '10x6', 1, 'Mozão, Hugo, Lê Mendes, Leo, Iago, Everson, Emanuel, Michael', '');







