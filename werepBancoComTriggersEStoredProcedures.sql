DROP DATABASE IF EXISTS werep;
CREATE DATABASE  `werep`;


DROP USER IF EXISTS `werepsis`@`localhost`;
CREATE USER 'werepsis'@'localhost' identified by '123456';
GRANT ALL PRIVILEGES ON werep.* TO 'werep'@'localhost';

--
-- Database: werep
--

use werep;



DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InsereLancamento`(valor float, id_contas_lancamentos int(11))
BEGIN declare contador int(11); 
UPDATE contas SET saldo = saldo + valor
WHERE id = id_contas_lancamentos;
SELECT count(*) into contador FROM werep.inquilinos; IF contador > 0 
THEN UPDATE contas SET valor_rateio = valor_rateio + valor/contador
WHERE id = id_contas_lancamentos;
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_InserePatrimonio`(valor float, id_contas_patrimonios int(11))
BEGIN declare contador int(11);
UPDATE contas SET saldo = saldo + valor
WHERE id = id_contas_patrimonios;
SELECT count(*) into contador FROM werep.inquilinos; IF contador > 0
THEN UPDATE contas SET valor_rateio = valor_rateio + valor/contador
WHERE id = id_contas_patrimonios;
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RemoveLancamento`(valor float, id_contas_lancamentos int(11))
BEGIN declare contador int(11); 
UPDATE contas SET saldo = saldo - valor
WHERE id = id_contas_lancamentos;
SELECT count(*) into contador FROM werep.inquilinos; IF contador > 0 
THEN UPDATE contas SET valor_rateio = valor_rateio - valor/contador
WHERE id = id_contas_lancamentos;
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_RemovePatrimonio`(valor float, id_contas_patrimonios int(11))
BEGIN declare contador int(11);
UPDATE contas SET saldo = saldo - valor
WHERE id = id_contas_patrimonios;
SELECT count(*) into contador FROM werep.inquilinos; IF contador > 0 
THEN UPDATE contas SET valor_rateio = valor_rateio - valor/contador
WHERE id = id_contas_patrimonios;
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `saldo` float NOT NULL,
  `valor_rateio` float NOT NULL,
  `id_moradias_contas` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_moradias_contas` (`id_moradias_contas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inquilinos`
--

CREATE TABLE IF NOT EXISTS `inquilinos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `apelido` varchar(80) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `naturalidade` varchar(50) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `id_moradias_inquilinos` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_moradias_inquilinos` (`id_moradias_inquilinos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamentos`
--

CREATE TABLE IF NOT EXISTS `lancamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_entrada` date NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `valor` float NOT NULL,
  `imagem` longblob NOT NULL,
  `id_contas_lancamentos` int(11) NOT NULL,
  `id_inquilinos_lancamentos` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_contas_lancamentos` (`id_contas_lancamentos`),
  KEY `id_inquilinos_lancamentos` (`id_inquilinos_lancamentos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Acionadores `lancamentos`
--
DROP TRIGGER IF EXISTS `TRG_InsereLancamento_AI`;
DELIMITER //
CREATE TRIGGER `TRG_InsereLancamento_AI` AFTER INSERT ON `lancamentos`
 FOR EACH ROW BEGIN CALL SP_InsereLancamento (new.valor, new.id_contas_lancamentos);
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `TRG_RemoveLancamento_AI`;
DELIMITER //
CREATE TRIGGER `TRG_RemoveLancamento_AI` AFTER DELETE ON `lancamentos`
 FOR EACH ROW BEGIN CALL SP_RemoveLancamento(old.valor,old.id_contas_lancamentos); 
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `moradias`
--

CREATE TABLE IF NOT EXISTS `moradias` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(80) NOT NULL,
  `data_fundacao` date NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrimonios`
--

CREATE TABLE IF NOT EXISTS `patrimonios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_troca` date NOT NULL,
  `valor_patrimonio` float NOT NULL,
  `id_moradias_patrimonios` int(11) NOT NULL,
  `id_contas_patrimonios` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_moradias_patrimonios` (`id_moradias_patrimonios`),
  KEY `id_contas_patrimonios` (`id_contas_patrimonios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Acionadores `patrimonios`
--
/*
DROP TRIGGER IF EXISTS `TRG_InserePatrimonio_AI`;
DELIMITER //
CREATE TRIGGER `TRG_InserePatrimonio_AI` AFTER INSERT ON `patrimonios`
 FOR EACH ROW BEGIN CALL SP_InserePatrimonio (new.valor_patrimonio, new.id_contas_patrimonios);
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `TRG_RemovePatrimonio_AI`;
DELIMITER //
CREATE TRIGGER `TRG_RemovePatrimonio_AI` AFTER DELETE ON `patrimonios`
 FOR EACH ROW BEGIN CALL SP_RemovePatrimonio(old.valor_patrimonio, old.id_contas_patrimonios);
END
//
DELIMITER ;
*/
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contas`
--
ALTER TABLE `contas`
  ADD CONSTRAINT `id_moradias_contas` FOREIGN KEY (`id_moradias_contas`) REFERENCES `moradias` (`id`);

--
-- Limitadores para a tabela `inquilinos`
--
ALTER TABLE `inquilinos`
  ADD CONSTRAINT `id_moradias_inquilinos` FOREIGN KEY (`id_moradias_inquilinos`) REFERENCES `moradias` (`id`);

--
-- Limitadores para a tabela `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD CONSTRAINT `id_contas_lancamentos` FOREIGN KEY (`id_contas_lancamentos`) REFERENCES `contas` (`id`),
  ADD CONSTRAINT `id_inquilinos_lancamentos` FOREIGN KEY (`id_inquilinos_lancamentos`) REFERENCES `inquilinos` (`id`);

--
-- Limitadores para a tabela `patrimonios`
--
ALTER TABLE `patrimonios`
  ADD CONSTRAINT `id_contas_patrimonios` FOREIGN KEY (`id_contas_patrimonios`) REFERENCES `contas` (`id`),
  ADD CONSTRAINT `id_moradias_patrimonios` FOREIGN KEY (`id_moradias_patrimonios`) REFERENCES `moradias` (`id`);
