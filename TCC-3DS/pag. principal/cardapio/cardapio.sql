drop database cardapio;
create database `cardapio`;
use `cardapio`; 

create table `produto`(
    id smallint unsigned not null auto_increment,
    nome varchar(100) not null,
    categoria varchar(50),
    caminho_foto varchar(100),    
    valor double,
    descricao varchar(250),
    primary key(id)
);

SELECT * from produto;

create table `pedido`(
    id int unsigned not null auto_increment,
    nome varchar(50),
    observacao varchar(255),
    data_pedido date,
    primary key(id)
);

select * from pedido; 

create table `pedido_produto`(
    id int unsigned not null auto_increment,
    pedido_id int unsigned not null,    
    produto_id smallint unsigned not null,    
    qtd tinyint unsigned not null,
    primary key(id),
    constraint fk_pedidoproduto_pedido_id
        foreign key(pedido_id)
        references pedido(id),
    constraint fk_pedidoproduto_produto_id
        foreign key(produto_id)
        references produto(id)        
);

DROP TABLE `produto`;

insert into produto values 
(null, 'Groot(X-Burguer)', 'Lanche', 'img/x-burguer.jpg', 10.00, 'Possui: Hambúrguer tradicional, mussarela, presunto, milho, batata palha, cebola roxa, maionese, ketchup e mostarda'),
(null, 'Homem-Aranha(X-Burgão)', 'Lanche', 'img/x-burgao.jpg', 12.00, 'Possui: 2 Hambúrgueres tradicionais, 2 fatias de mussarela, 2 fatias de presunto, milho, batata palha, cebola roxa, maionese, ketchup e mostarda'),
(null, 'Homem-de-Ferro(X-Salada)', 'Lanche', 'img/x-salada.jpg', 13.00, 'Possui: Hambúrguer tradicional, mussarela, presunto, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Gaviã-Arqueiro(X-Saladão)', 'Lanche', 'img/x-saladao.jpg', 14.00, 'Possui: 2 Hambúrgueres tradicionais, 2 fatias de mussarela, 2 fatias de presunto, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Capitão-America(X-Bacon)', 'Lanche', 'img/x-bacon.jpg', 16.00, 'Possui: Hambúrguer tradicional, bacon, mussarela, presunto, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Thor(X-Frango)', 'Lanche', 'img/x-frango.jpg', 17.00, 'Possui: Hambúrguer tradicional, peito de frango desfiado, mussarela, presunto, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Pantera_Negra(X-Calabresa)', 'Lanche', 'img/x-calabresa.jpg', 16.00, 'Possui: Hambúrguer tradicional, calabresa, mussarela, presunto, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Visão(X-Egg)', 'Lanche', 'img/x-egg.jpg', 12.00, 'Possui: Hambúrguer tradicional, ovo, mussarela, presunto, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Doutor-Estranho(X-Bacon Frango)', 'Lanche', 'img/x-bacon-frango.jpg', 18.00, 'Possui: Hambúrguer tradicional, bacon, frango, mussarela, presunto, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Hulk(X-Tudo)', 'Lanche', 'img/x-tudo.jpg', 23.00, 'Possui: Hambúrguer tradicional, bacon, peito de frango desfiado, ovo, calabresa, mussarela, presunto, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Thanos(X-Familia)', 'Lanche', 'img/x-familia.jpg', 30.00, 'Possui: 4 Hambúrgueres tradicionais, 4 fatias de mussarela, 4 fatias de presunto, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate');

select * from produto where lower(categoria) = 'Bebidas';

insert into produto values 
(null, 'Sukita_Uva', 			'Refrigerantes', 'img/sukita.jpg', 05.70, null),
(null, 'Água', 					'Refrigerantes', 'img/agua.jpg', 01.50, null),
(null, 'Fanta_Laranja', 		'Refrigerantes', 'img/fanta-laranja.jpg', 05.50, null),
(null, 'Coca-Cola',			 	'Refrigerantes', 'img/coca-cola.jpg', 05.50, null),
(null, 'Guaranita', 			'Refrigerantes', 'img/guaranita.jpg', 04.00, null),
(null, 'H2O_Limão', 			'Refrigerantes', 'img/h2o.jpg', 06.20, null),
(null, 'Guaraná_Antártica(Zero)', 'Refrigerantes', 'img/guarana.jpg', 06.00, null),
(null, 'Coca-Cola(2L)', 			'Refrigerantes', 'img/coca-cola2.jpg', 12.00, null),
(null, 'Pepsi(2L)', 				'Refrigerantes', 'img/pepsi2.jpg', 08.20, null),
(null, 'Fanta_Uva', 			'Refrigerantes', 'img/fanta-uva.jpg', 05.70, null),
(null, 'Del_Valle(1L)', 			'Refrigerantes', 'img/del valle.jpg', 08.60, null),
(null, 'Iti_Guaraná(2L)', 		'Refrigerantes', 'img/iti.jpg', 05.30, null),
(null, 'Heineken(330ml)', 		'Bebidas', 'img/heineken.jpg', 08.00, null),
(null, 'Império(350ml)', 		'Bebidas', 'img/imperio.jpg', 03.50, null),
(null, 'Budweiser(350ml)', 	'Bebidas', 'img/budweiser.jpg', 04.70, null),
(null, 'Skol_Beats_Azul(Lata)', 'Bebidas', 'img/skolAzul.jpg', 07.60, null),
(null, 'Skol_Beats_GT(313ml)', 'Bebidas', 'img/skolGT.jpg', 08.90, null),
(null, 'Skol_Lata(350ml)', 	'Bebidas', 'img/skol.jpg', 03.49, null),
(null, 'Smirnoff_Ice(275ml)', 'Bebidas', 'img/ice.jpg', 09.50, null),
(null, 'Cabaré_Cachaça', 		'Bebidas', 'img/cabare.jpg', 34.05, null),
(null, 'Amstel(Lata 350ml)', 	'Bebidas', 'img/amstel.jpg', 04.20, null),
(null, 'Keep_Coller', 			'Bebidas', 'img/keep coller.jpg', 06.20, null),
(null, 'Chevette(700ml)', 		'Bebidas', 'img/chevette.jpg', 10.00, null),
(null, 'Rainha_da_Mata_Azul', 	'Bebidas', 'img/rainha.jpg', 25.20, null);

insert into produto values 
(null, 'Nebulosa(X-Burguer Gourmet)', 'Gourmet', 'img/x-burguer.jpg', 12.00, 'Possui: Hambúrguer artesanal, queijo prato, presunto,  catupiry ou cheddar, milho, batata palha, cebola roxa, maionese, ketchup e mostarda'),
(null, 'Mantis(X-Salada Gourmet)', 'Gourmet', 'img/x-salada.jpg', 14.00, 'Possui: Hambúrguer artesanal, queijo prato, presunto,  catupiry ou cheddar, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'), 
(null, 'Gamora(X-Bacon Gourmet)', 'Gourmet', 'img/x-bacon.jpg', 17.00, 'Possui: Hambúrguer artesanal, bacon, queijo prato, presunto,  catupiry ou cheddar, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Vampira(X-Frango Gourmet)', 'Gourmet', 'img/x-frango.jpg', 17.00, 'Possui: Hambúrguer artesanal, iscas de frango, queijo prato, presunto,  catupiry ou cheddar, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Mulher_Invisível(X-Calabresa Gourmet)', 'Gourmet', 'img/x-calabresa.jpg', 16.00, 'Possui: Hambúrguer artesanal, calabresa, queijo prato, presunto,  catupiry ou cheddar, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Tempestade(X-Egg Gourmet)', 'Gourmet', 'img/x-egg.jpg', 15.00,'Possui: Hambúrguer artesanal, ovo, queijo prato, presunto,  catupiry ou cheddar, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Carol_Danvers(X-Bacon Frango Gourmet)', 'Gourmet', 'img/x-bacon-frango.jpg', 21.00, 'Possui: Hambúrguer artesanal, bacon, iscas de frango, queijo prato, presunto,  catupiry ou cheddar, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Viúva_Negra(X-Tudo Gourmet)', 'Gourmet', 'img/x-tudo.jpg', 27.00, 'Possui: Hambúrguer artesanal, bacon, ovo, iscas de frango, calabresa, queijo prato, presunto,  catupiry ou cheddar, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate'),
(null, 'Feiticeira_Escarlate(X-Familía Gourmet)', 'Gourmet', 'img/x-familia.jpg', 50.00, 'Possui: 4 Hambúrgueres artesanais, bacon, 4 ovos, iscas de frango, calabresa, 4 fatias de queijo prato, 4 fatias de presunto, catupiry ou cheddar, milho, batata palha, cebola roxa, maionese, ketchup, mostarda, alface e tomate');


select * from pedido 
inner join pedido_item on pedido.id = pedido_item.pedido.id
inner join produto on produto.id = pedido_item.produto.id;
 
insert into pedido values
(1, 'Pedido de exemplo', 'Aqui entra a observação', now());

insert into pedido_produto values
(null, 1, 7, 2),
(null, 1, 2, 1),
(null, 1, 4, 4);
select * from pedido
inner join pedido_item on pedido.id=pedido_item.pedido.id;
