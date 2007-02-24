-- MySQL dump 10.10
--
-- Host: localhost    Database: multiporte
-- ------------------------------------------------------
-- Server version	5.0.27-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `baixas_recebidas`
--

DROP TABLE IF EXISTS `baixas_recebidas`;
CREATE TABLE `baixas_recebidas` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `titulo_id` int(10) unsigned default NULL,
  `valor` decimal(8,2) default NULL,
  `data` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baixas_recebidas`
--

LOCK TABLES `baixas_recebidas` WRITE;
/*!40000 ALTER TABLE `baixas_recebidas` DISABLE KEYS */;
/*!40000 ALTER TABLE `baixas_recebidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banco_horas`
--

DROP TABLE IF EXISTS `banco_horas`;
CREATE TABLE `banco_horas` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `funcionario_id` int(10) unsigned default NULL,
  `horas` time default NULL,
  `data` date default NULL,
  `tipo` set('realizada','paga','compensada') default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banco_horas`
--

LOCK TABLES `banco_horas` WRITE;
/*!40000 ALTER TABLE `banco_horas` DISABLE KEYS */;
INSERT INTO `banco_horas` VALUES (1,1,'01:00:00','2004-01-19','realizada');
/*!40000 ALTER TABLE `banco_horas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
CREATE TABLE `cargos` (
  `id` int(11) NOT NULL auto_increment,
  `descricao` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'Aux. Serv. Gerais'),(2,'Soldador'),(3,'Engenheiro Civil');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(100) default NULL,
  `tipo` set('entrada','saida') default NULL,
  `categoria_pai_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Entradas','entrada',NULL),(2,'Recebimento de Clientes','entrada',1),(3,'Saídas','saida',NULL),(4,'Fornecedores','saida',3);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cheques_emitidos`
--

DROP TABLE IF EXISTS `cheques_emitidos`;
CREATE TABLE `cheques_emitidos` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `conta_id` int(10) unsigned default NULL,
  `numero` varchar(10) default NULL,
  `valor` decimal(10,2) default NULL,
  `nominal` varchar(100) default NULL,
  `data` date default NULL,
  `bom_para` date default NULL,
  `data_compensado` date default NULL,
  `descricao` varchar(255) default NULL,
  `cruzado` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cheques_emitidos`
--

LOCK TABLES `cheques_emitidos` WRITE;
/*!40000 ALTER TABLE `cheques_emitidos` DISABLE KEYS */;
INSERT INTO `cheques_emitidos` VALUES (1,2,'850199','2000.00','Juan Basso','2007-01-01','2007-02-01','2007-02-01','Saque',0);
/*!40000 ALTER TABLE `cheques_emitidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(100) default NULL,
  `logradouro` varchar(100) default NULL,
  `complemento` varchar(50) default NULL,
  `bairro` varchar(50) default NULL,
  `cep` varchar(10) default NULL,
  `cidade` varchar(30) default NULL,
  `estado` varchar(2) default NULL,
  `cpf_cnpj` varchar(20) default NULL,
  `fone` varchar(15) default NULL,
  `celular` varchar(15) default NULL,
  `observacoes` text,
  `modified` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Consbem','Aeroporto','','Aeroporto','43000-000','Fortaleza','CE','00.000.000/0000-00','(85) 8888-8888','','Voando.....','2007-02-24 20:25:40','2007-02-24 20:20:02');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contas`
--

DROP TABLE IF EXISTS `contas`;
CREATE TABLE `contas` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `descricao` varchar(40) default NULL,
  `banco` varchar(20) default NULL,
  `agencia` varchar(10) default NULL,
  `conta` varchar(20) default NULL,
  `saldo_inicial` decimal(10,2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contas`
--

LOCK TABLES `contas` WRITE;
/*!40000 ALTER TABLE `contas` DISABLE KEYS */;
INSERT INTO `contas` VALUES (1,'Caixa',NULL,NULL,NULL,'0.00'),(2,'BB','001','3174-7','11.163-5','2000.00');
/*!40000 ALTER TABLE `contas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa_onibus`
--

DROP TABLE IF EXISTS `empresa_onibus`;
CREATE TABLE `empresa_onibus` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empresa_onibus`
--

LOCK TABLES `empresa_onibus` WRITE;
/*!40000 ALTER TABLE `empresa_onibus` DISABLE KEYS */;
INSERT INTO `empresa_onibus` VALUES (1,'Estrela'),(2,'Transol'),(3,'Insular');
/*!40000 ALTER TABLE `empresa_onibus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `epis`
--

DROP TABLE IF EXISTS `epis`;
CREATE TABLE `epis` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `funcionario_id` int(10) unsigned default NULL,
  `descricao` varchar(100) default NULL,
  `data_entrega` date default NULL,
  `validade` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epis`
--

LOCK TABLES `epis` WRITE;
/*!40000 ALTER TABLE `epis` DISABLE KEYS */;
INSERT INTO `epis` VALUES (1,1,'Oculos','2005-01-01','2007-01-01');
/*!40000 ALTER TABLE `epis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faltas`
--

DROP TABLE IF EXISTS `faltas`;
CREATE TABLE `faltas` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `funcionario_id` int(10) unsigned default NULL,
  `data` date default NULL,
  `dispensa` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faltas`
--

LOCK TABLES `faltas` WRITE;
/*!40000 ALTER TABLE `faltas` DISABLE KEYS */;
INSERT INTO `faltas` VALUES (1,1,'1960-05-12',0),(2,1,'2002-08-21',1);
/*!40000 ALTER TABLE `faltas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faturas`
--

DROP TABLE IF EXISTS `faturas`;
CREATE TABLE `faturas` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `fornecedor_id` int(10) unsigned default NULL,
  `num_documento` varchar(20) default NULL,
  `valor` decimal(10,2) default NULL,
  `vencimento` date default NULL,
  `quitada` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faturas`
--

LOCK TABLES `faturas` WRITE;
/*!40000 ALTER TABLE `faturas` DISABLE KEYS */;
INSERT INTO `faturas` VALUES (1,1,'4564612467','157.92','1963-05-29',0);
/*!40000 ALTER TABLE `faturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fornecedores`
--

DROP TABLE IF EXISTS `fornecedores`;
CREATE TABLE `fornecedores` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(100) default NULL,
  `logradouro` varchar(100) default NULL,
  `complemento` varchar(50) default NULL,
  `bairro` varchar(50) default NULL,
  `cep` varchar(10) default NULL,
  `cidade` varchar(30) default NULL,
  `estado` varchar(2) default NULL,
  `cpf_cnpj` varchar(20) default NULL,
  `fone` varchar(15) default NULL,
  `celular` varchar(15) default NULL,
  `observacoes` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fornecedores`
--

LOCK TABLES `fornecedores` WRITE;
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` VALUES (1,'Ferramentas Gerais','Vem ai',NULL,NULL,'00000-000','Fpolis','SC','00.000.000/0000-00',NULL,NULL,'Geral...');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE `funcionarios` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(100) default NULL,
  `logradouro` varchar(100) default NULL,
  `complemento` varchar(50) default NULL,
  `bairro` varchar(50) default NULL,
  `cep` varchar(10) default NULL,
  `cidade` varchar(30) default NULL,
  `estado` varchar(2) default NULL,
  `cpf` varchar(15) default NULL,
  `fone` varchar(15) default NULL,
  `celular` varchar(15) default NULL,
  `cargo_id` int(11) default NULL,
  `salario_folha` decimal(7,2) default NULL,
  `salario_real` decimal(7,2) default NULL,
  `salario_familia` decimal(5,2) default NULL,
  `insalubridade` decimal(5,2) default NULL,
  `irrf` decimal(5,2) default NULL,
  `inss` decimal(5,2) default NULL,
  `observacoes` text,
  `modified` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` VALUES (1,'Ismael Basso','Rua dos Fracassados ','24','Itaguaçu','88080-040','São Zé','SC','000.000.000-00','(24) 2424-2424','(24) 2424-2424',1,'2000.00','2500.00','35.00','0.00','16.72','80.97','Vagabundo de mais...\r\n','2007-02-24 19:21:23','2007-02-24 19:21:23');
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lancamentos`
--

DROP TABLE IF EXISTS `lancamentos`;
CREATE TABLE `lancamentos` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `conta_id` int(10) unsigned default NULL,
  `tipo` set('entrada','saida') default NULL,
  `categoria_id` int(10) unsigned default NULL,
  `descricao` varchar(200) default NULL,
  `valor` decimal(10,2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lancamentos`
--

LOCK TABLES `lancamentos` WRITE;
/*!40000 ALTER TABLE `lancamentos` DISABLE KEYS */;
INSERT INTO `lancamentos` VALUES (1,2,'saida',4,'Pagamento da Ferramentas Gerais','572.35');
/*!40000 ALTER TABLE `lancamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linhas_onibus`
--

DROP TABLE IF EXISTS `linhas_onibus`;
CREATE TABLE `linhas_onibus` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(50) default NULL,
  `empresa_onibus_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linhas_onibus`
--

LOCK TABLES `linhas_onibus` WRITE;
/*!40000 ALTER TABLE `linhas_onibus` DISABLE KEYS */;
INSERT INTO `linhas_onibus` VALUES (1,'Los Angeles',1),(2,'Campinas',1);
/*!40000 ALTER TABLE `linhas_onibus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obras`
--

DROP TABLE IF EXISTS `obras`;
CREATE TABLE `obras` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `cliente_id` int(10) unsigned default NULL,
  `local` varchar(255) default NULL,
  `contrato` varchar(50) default NULL,
  `data_contrato` date default NULL,
  `inicio_atividades` date default NULL,
  `modified` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obras`
--

LOCK TABLES `obras` WRITE;
/*!40000 ALTER TABLE `obras` DISABLE KEYS */;
INSERT INTO `obras` VALUES (1,1,'Fortaleza','Eng. Zé','2007-01-01','2007-02-01','2007-02-24 20:22:12','2007-02-24 20:22:12');
/*!40000 ALTER TABLE `obras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obras_funcionarios`
--

DROP TABLE IF EXISTS `obras_funcionarios`;
CREATE TABLE `obras_funcionarios` (
  `id` int(11) NOT NULL auto_increment,
  `obra_id` int(10) unsigned NOT NULL,
  `funcionario_id` int(10) unsigned NOT NULL,
  `data_ida` date default NULL,
  `data_volta` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obras_funcionarios`
--

LOCK TABLES `obras_funcionarios` WRITE;
/*!40000 ALTER TABLE `obras_funcionarios` DISABLE KEYS */;
INSERT INTO `obras_funcionarios` VALUES (2,1,1,'1949-01-03','1952-01-08');
/*!40000 ALTER TABLE `obras_funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `refeicoes`
--

DROP TABLE IF EXISTS `refeicoes`;
CREATE TABLE `refeicoes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `funcionario_id` int(10) unsigned default NULL,
  `restaurante_id` int(10) unsigned default NULL,
  `valor` decimal(5,2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refeicoes`
--

LOCK TABLES `refeicoes` WRITE;
/*!40000 ALTER TABLE `refeicoes` DISABLE KEYS */;
INSERT INTO `refeicoes` VALUES (1,1,2,'100.00');
/*!40000 ALTER TABLE `refeicoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurantes`
--

DROP TABLE IF EXISTS `restaurantes`;
CREATE TABLE `restaurantes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(50) default NULL,
  `descricao` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurantes`
--

LOCK TABLES `restaurantes` WRITE;
/*!40000 ALTER TABLE `restaurantes` DISABLE KEYS */;
INSERT INTO `restaurantes` VALUES (1,'Da Esquina','Passando por ali, ta ali...'),(2,'Alambique','Pagamento todo dia 19...');
/*!40000 ALTER TABLE `restaurantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titulos`
--

DROP TABLE IF EXISTS `titulos`;
CREATE TABLE `titulos` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `obra_id` int(10) unsigned default NULL,
  `valor` decimal(8,2) default NULL,
  `vencimento` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titulos`
--

LOCK TABLES `titulos` WRITE;
/*!40000 ALTER TABLE `titulos` DISABLE KEYS */;
/*!40000 ALTER TABLE `titulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vale_transportes`
--

DROP TABLE IF EXISTS `vale_transportes`;
CREATE TABLE `vale_transportes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `data` date NOT NULL,
  `linhas_onibus_id` int(11) default NULL,
  `funcionario_id` int(10) unsigned default NULL,
  `valor` decimal(6,2) default NULL,
  `modified` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vale_transportes`
--

LOCK TABLES `vale_transportes` WRITE;
/*!40000 ALTER TABLE `vale_transportes` DISABLE KEYS */;
INSERT INTO `vale_transportes` VALUES (1,'2007-01-12',2,1,'57.50','2007-02-24 19:31:41','2007-02-24 19:31:41');
/*!40000 ALTER TABLE `vale_transportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vales`
--

DROP TABLE IF EXISTS `vales`;
CREATE TABLE `vales` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `funcionario_id` int(10) unsigned default NULL,
  `data` date default NULL,
  `valor` decimal(6,2) default NULL,
  `modified` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vales`
--

LOCK TABLES `vales` WRITE;
/*!40000 ALTER TABLE `vales` DISABLE KEYS */;
INSERT INTO `vales` VALUES (1,1,'2007-02-12','72.87','2007-02-24 19:40:42','2007-02-24 19:40:42');
/*!40000 ALTER TABLE `vales` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2007-02-24 23:43:55
