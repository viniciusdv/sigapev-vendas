
create database db_projeto;

use db_projeto;

CREATE TABLE IF NOT EXISTS `tb_produto` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(100) NOT NULL,
  `descricao_produto` varchar(100) NOT NULL,
  `qtd_produto` varchar(100) NOT NULL,
  `tag_produto` varchar(100) NOT NULL UNIQUE KEY,
  `valor_produto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

CREATE TABLE IF NOT EXISTS `tb_pedido` (
  `id_pedido` int(100) NOT NULL AUTO_INCREMENT,
  `tag_produto` varchar(100) NOT NULL,
  `cpf_cliente` varchar(100) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `qtd_produto` varchar(100) NOT NULL,
  `valor_produto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

