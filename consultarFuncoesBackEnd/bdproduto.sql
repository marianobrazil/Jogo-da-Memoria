create database produto;
use produto;

create table t_produto
(
	codigo int UNSIGNED primary key auto_increment,
    nome varchar(50) not null,
    valor double(9,2) UNSIGNED not null,
    imagem json
)Engine=InnoDB;