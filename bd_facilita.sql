-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema db_facilita
--

CREATE DATABASE IF NOT EXISTS db_facilita;
USE db_facilita;

--
-- Definition of table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE `pessoa` (
  `id_pessoa` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(45) default NULL,
  `cpf` varchar(15) default NULL,
  `email` varchar(45) default NULL,
  `tel` varchar(20) default NULL,
  `rua` varchar(20) default NULL,
  `nume` varchar(6) default NULL,
  `complemento` varchar(20) default NULL,
  `bairro` varchar(20) default NULL,
  `estado` varchar(45) default NULL,
  `cidade` varchar(45) default NULL,
  `id_login` varchar(20) default NULL,
  `ds_senha` varchar(20) default NULL,
  `id_perfil` int(10) unsigned default NULL COMMENT '1-Admin(Funcionario) 2- Cliente',
  PRIMARY KEY  (`id_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pessoa`
--

/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` (`id_pessoa`,`nome`,`cpf`,`email`,`tel`,`rua`,`nume`,`complemento`,`bairro`,`estado`,`cidade`,`id_login`,`ds_senha`,`id_perfil`) VALUES 
 (1,'Thiago Gregorio','123456789','thiagomelo35@hotmail.com','(31) 8888-7777','Rua Central','501','apt 101','Centro','MG','Patos de Minas','admin','123456',1),
 (4,'JoÃ£o Neto de Souza ','123.456.789-12','joÃ£oneto@hotmail.com','(34) 8811-7666','Rua Major Gote','65','apt 205','Centro','Patos de Minas','SP','cliente1','123456',2);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;


--
-- Definition of table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE `tb_cliente` (
  `id_pessoa` int(10) unsigned NOT NULL,
  PRIMARY KEY  USING BTREE (`id_pessoa`),
  CONSTRAINT `FK_tb_cliente_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cliente`
--

/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` (`id_pessoa`) VALUES 
 (4);
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;


--
-- Definition of table `tb_funcionario`
--

DROP TABLE IF EXISTS `tb_funcionario`;
CREATE TABLE `tb_funcionario` (
  `id_pessoa` int(10) unsigned NOT NULL,
  PRIMARY KEY  USING BTREE (`id_pessoa`),
  CONSTRAINT `FK_tb_funcionario_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_funcionario`
--

/*!40000 ALTER TABLE `tb_funcionario` DISABLE KEYS */;
INSERT INTO `tb_funcionario` (`id_pessoa`) VALUES 
 (1);
/*!40000 ALTER TABLE `tb_funcionario` ENABLE KEYS */;


--
-- Definition of table `tb_marca`
--

DROP TABLE IF EXISTS `tb_marca`;
CREATE TABLE `tb_marca` (
  `id_marca` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  PRIMARY KEY  (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_marca`
--

/*!40000 ALTER TABLE `tb_marca` DISABLE KEYS */;
INSERT INTO `tb_marca` (`id_marca`,`nome`,`pais`) VALUES 
 (2,'Fiat','ItÃ¡lia'),
 (3,'Ferrari','ItÃ¡lia  '),
 (4,'Ford','Estados Unidos'),
 (5,'Volkswagen','Alemanha');
/*!40000 ALTER TABLE `tb_marca` ENABLE KEYS */;


--
-- Definition of table `tb_promocao`
--

DROP TABLE IF EXISTS `tb_promocao`;
CREATE TABLE `tb_promocao` (
  `id_promocao` int(10) unsigned NOT NULL auto_increment,
  `desconto` varchar(45) NOT NULL,
  `data` varchar(45) NOT NULL,
  `id_veiculo` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id_promocao`),
  KEY `FK_tb_promocao_1` (`id_veiculo`),
  CONSTRAINT `FK_tb_promocao_1` FOREIGN KEY (`id_veiculo`) REFERENCES `tb_veiculo` (`id_veiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_promocao`
--

/*!40000 ALTER TABLE `tb_promocao` DISABLE KEYS */;
INSERT INTO `tb_promocao` (`id_promocao`,`desconto`,`data`,`id_veiculo`) VALUES 
 (2,'R$ 1.500,00','08/09/09',1),
 (3,'R$ 1.000,00','09/09/09',1),
 (4,'R$ 1.000,00','09/09/09',3);
/*!40000 ALTER TABLE `tb_promocao` ENABLE KEYS */;


--
-- Definition of table `tb_veiculo`
--

DROP TABLE IF EXISTS `tb_veiculo`;
CREATE TABLE `tb_veiculo` (
  `id_veiculo` int(10) unsigned NOT NULL auto_increment,
  `modelo` varchar(100) NOT NULL,
  `chassi` varchar(60) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `ano` int(10) unsigned NOT NULL,
  `preco` varchar(45) NOT NULL,
  `id_marca` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id_veiculo`),
  KEY `FK_tb_veiculo_1` (`id_marca`),
  CONSTRAINT `FK_tb_veiculo_1` FOREIGN KEY (`id_marca`) REFERENCES `tb_marca` (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_veiculo`
--

/*!40000 ALTER TABLE `tb_veiculo` DISABLE KEYS */;
INSERT INTO `tb_veiculo` (`id_veiculo`,`modelo`,`chassi`,`cor`,`ano`,`preco`,`id_marca`) VALUES 
 (1,'Ka 4 Portas','1234545645','Branca',2008,'R$ 15.000,00',5),
 (3,'Gol - Freio ABS - 4 Portas - Airbag','21321254','Preta',2006,'R$ 22.000,00',5);
/*!40000 ALTER TABLE `tb_veiculo` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
