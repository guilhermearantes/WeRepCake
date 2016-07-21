use werep;

-- Extraindo dados da tabela moradias
--
INSERT INTO moradias (id, nome, endereco, telefone, data_fundacao, email) VALUES
(0, 'República Catapulta', 'Rua Bernardo Sayao.196.Novo Horizonte', '(31)3852-6843', '2003-01-01', 'repcatapulta@gmail.com'),
(1, 'República Vira Lata', 'Rua Fulano de Tal.416.Novo Horizonte', '(31)3852-0043', '2006-01-01', 'repviralata@gmail.com');




-- Extraindo dados da tabela contas
--
INSERT INTO contas(id, nome, tipo, saldo, valor_rateio, id_moradias_contas) VALUES
(1, 'Conta Poupança', 'Poupança', 0, 0, 0),
(2, 'Conta Emergencia', 'Poupança', 400, 0, 0),
(3, 'Conta Corrente', 'Corrente', 0, 0, 0);



-- Extraindo dados da tabela inquilinos
--
INSERT INTO inquilinos (id, nome, apelido, celular, email, data_nascimento, naturalidade, sexo, id_moradias_inquilinos) VALUES
(0, 'Guilherme Jannotti Arantes', 'Jannottin', 999826018, 'guilherme.jannotti@gmail.com', '1992-10-10', 'Belo Horizonte/MG', 'Masculino', 0),
(1, 'Leonardo de Souza Nogueira', 'Leo', 989063857, 'leosouza3102@gmail.com', '1994-11-18', 'Buenos Aires/Argentina', 'Masculino', 0);




-- Extraindo dados da tabela lancamentos
--
INSERT INTO lancamentos (id, nome, data_entrada, categoria, valor, imagem, id_contas_lancamentos,id_inquilinos_lancamentos) VALUES
('Café Três corações', '2016-06-05', 'Cozinha', 90, 0x2f696d61676573,3,0),
('Ração Pedigree', '2016-06-06', 'Bichos Estimação', 90, 0x2f696d61676573,3,1);

DELETE FROM `werep`.`lancamentos` WHERE `id`='0';
DELETE FROM `werep`.`lancamentos` WHERE `id`='1';




-- Extraindo dados da tabela patrimonios 
-- Deve ser consertado
-- A trigger está inserindo o valor e dividindo no rateio com um valor muito alto, deve ser dividido por uma quiantidade de meses
/*
INSERT INTO patrimonios (id, nome, data_entrada, data_troca, valor_patrimonio, id_moradias_patrimonios, id_contas_patrimonios) VALUES
(0, 'TV 42 Full HD', '2012-01-01','2020-01-12', 1000, 0,3),
(1, 'Sofá 6 Lugares - Verde', '2012-01-01', '2020-01-12', 1000, 0,3);

DELETE FROM `werep`.`patrimonios` WHERE `id`='0';
DELETE FROM `werep`.`patrimonios` WHERE `id`='1';
*/