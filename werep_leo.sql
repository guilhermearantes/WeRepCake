DROP DATABASE IF EXISTS werep;
CREATE DATABASE  `werep`;


#DROP USER `werepsis`@`localhost`;
#CREATE USER 'werepsis'@'localhost' identified by '123456';
#GRANT ALL PRIVILEGES ON werep.* TO 'werep'@'localhost';

--
-- Database: werep
--

use werep;

--
-- Database: `werep`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsereLancamento`(valor float, conta_id int(11))
BEGIN declare contador int(11); 
UPDATE contas SET saldo = saldo + valor
WHERE id = conta_id;
SELECT count(*) into contador FROM werep.inquilinos; IF contador > 0 
THEN UPDATE contas SET valor_rateio = valor_rateio + valor/contador
WHERE id = conta_id;
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InserePatrimonio`(valor float, conta_id int(11))
BEGIN declare contador int(11);
UPDATE contas SET saldo = saldo + valor
WHERE id = conta_id;
SELECT count(*) into contador FROM werep.inquilinos; IF contador > 0
THEN UPDATE contas SET valor_rateio = valor_rateio + valor/contador
WHERE id = conta_id;
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RemoveLancamento`(valor float, conta_id int(11))
BEGIN declare contador int(11); 
UPDATE contas SET saldo = saldo - valor
WHERE id = conta_id;
SELECT count(*) into contador FROM werep.inquilinos; IF contador > 0 
THEN UPDATE contas SET valor_rateio = valor_rateio - valor/contador
WHERE id = conta_id;
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RemovePatrimonio`(valor float, conta_id int(11))
BEGIN declare contador int(11);
UPDATE contas SET saldo = saldo - valor
WHERE id = conta_id;
SELECT count(*) into contador FROM werep.inquilinos; IF contador > 0 
THEN UPDATE contas SET valor_rateio = valor_rateio - valor/contador
WHERE id = conta_id;
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `saldo` float NOT NULL,
  `valor_rateio` float NOT NULL,
  `moradia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `moradia_id` (`moradia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`id`, `nome`, `tipo`, `saldo`, `valor_rateio`, `moradia_id`) VALUES
(1, 'Conta Poupança', 'Poupança', 0, 0, 1),
(2, 'Conta Emergencia', 'Poupança', 400, 0, 1),
(3, 'Conta Corrente', 'Corrente', 180, 90, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inquilinos`
--

CREATE TABLE IF NOT EXISTS `inquilinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `data_nascimento` date NOT NULL,
  `naturalidade` varchar(25) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `moradia_id` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `moradia_id` (`moradia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `inquilinos`
--

INSERT INTO `inquilinos` (`id`, `nome`, `apelido`, `celular`, `email`, `data_nascimento`, `naturalidade`, `sexo`, `moradia_id`, `login`, `senha`) VALUES
(1, 'Guilherme Jannotti Arantes', 'Jannottin', 999826018, 'guilherme.jannotti@gmail.com', '1992-10-10', 'Belo Horizonte/MG', 'Masculino', 1, 'guilherme', '123456'),
(2, 'Leonardo de Souza Nogueira', 'Leo', 989063857, 'leosouza3102@gmail.com', '1994-11-18', 'Buenos Aires/Argentina', 'Masculino', 1, 'leonardo', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamentos`
--

CREATE TABLE IF NOT EXISTS `lancamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `data_entrada` date NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `valor` float NOT NULL,
  `imagem` longblob NOT NULL,
  `inquilino_id` int(11) NOT NULL,
  `conta_id` int(11) NOT NULL,
  `moradia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `inquilino_id` (`inquilino_id`),
  KEY `conta_id` (`conta_id`),
  KEY `moradia_id` (`moradia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `lancamentos`
--

INSERT INTO `lancamentos` (`id`, `nome`, `data_entrada`, `categoria`, `valor`, `imagem`, `inquilino_id`, `conta_id`, `moradia_id`) VALUES
(1, 'Café Três corações', '2016-06-05', 'Cozinha', 90, 0x2f696d61676573, 1, 3, 1),
(2, 'Ração Pedigree', '2016-06-06', 'Bichos Estimação', 90, 0x2f696d61676573, 2, 3, 1);

--
-- Acionadores `lancamentos`
--
DROP TRIGGER IF EXISTS `TRG_InsereLancamento_AI`;
DELIMITER //
CREATE TRIGGER `TRG_InsereLancamento_AI` AFTER INSERT ON `lancamentos`
 FOR EACH ROW BEGIN CALL SP_InsereLancamento (new.valor, new.conta_id);
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `TRG_RemoveLancamento_AI`;
DELIMITER //
CREATE TRIGGER `TRG_RemoveLancamento_AI` AFTER DELETE ON `lancamentos`
 FOR EACH ROW BEGIN CALL SP_RemoveLancamento(old.valor,old.conta_id); 
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `moradias`
--

CREATE TABLE IF NOT EXISTS `moradias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data_fundacao` date NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `moradias`
--

INSERT INTO `moradias` (`id`, `nome`, `cidade`, `estado`, `bairro`, `rua`, `numero`, `complemento`, `telefone`, `data_fundacao`, `email`) VALUES
(1, 'República Catapulta', 'João Monlevade','Minas Gerais','Novo Horizonte','Rua Bernardo Sayao','196','em frente tal coisa','(31)3852-6843', '2003-01-01', 'repcatapulta@gmail.com'),
(2, 'República Vira Lata', 'João Monlevade','Minas Gerais','Novo Horizonte','Rua Fulano de Tal','416','ao lado da igreja','(31)3852-0043', '2006-01-01', 'repviralata@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrimonios`
--

CREATE TABLE IF NOT EXISTS `patrimonios` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_troca` date NOT NULL,
  `valor_patrimonio` float NOT NULL,
  `moradia_id` int(11) NOT NULL,
  `conta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `moradia_id` (`moradia_id`),
  KEY `conta_id` (`conta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Acionadores `patrimonios`
--
DROP TRIGGER IF EXISTS `TRG_InserePatrimonio_AI`;
DELIMITER //
CREATE TRIGGER `TRG_InserePatrimonio_AI` AFTER INSERT ON `patrimonios`
 FOR EACH ROW BEGIN CALL SP_InserePatrimonio (new.valor_patrimonio, new.conta_id);
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `TRG_RemovePatrimonio_AI`;
DELIMITER //
CREATE TRIGGER `TRG_RemovePatrimonio_AI` AFTER DELETE ON `patrimonios`
 FOR EACH ROW BEGIN CALL SP_RemovePatrimonio(old.valor_patrimonio, old.conta_id);
END
//
DELIMITER ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contas`
--
ALTER TABLE `contas`
  ADD CONSTRAINT `conta_moradia_id` FOREIGN KEY (`moradia_id`) REFERENCES `werep`.`moradias` (`id`);

--
-- Limitadores para a tabela `inquilinos`
--
ALTER TABLE `inquilinos`
  ADD CONSTRAINT `inquilino_moradia_id` FOREIGN KEY (`moradia_id`) REFERENCES `werep`.`moradias` (`id`);

--
-- Limitadores para a tabela `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD CONSTRAINT `lancamento_conta_id` FOREIGN KEY (`conta_id`) REFERENCES `werep`.`contas` (`id`),
  ADD CONSTRAINT `lancamento_inquilino_id` FOREIGN KEY (`inquilino_id`) REFERENCES `werep`.`inquilinos` (`id`),
  ADD CONSTRAINT `lancamento_moradia_id` FOREIGN KEY (`moradia_id`) REFERENCES `werep`.`moradias` (`id`);

--
-- Limitadores para a tabela `patrimonios`
--
ALTER TABLE `patrimonios`
  ADD CONSTRAINT `patrimonio_moradia_id` FOREIGN KEY (`moradia_id`) REFERENCES `werep`.`moradias` (`id`),
  ADD CONSTRAINT `patrimonio_conta_id` FOREIGN KEY (`conta_id`) REFERENCES `werep`.`contas` (`id`);
