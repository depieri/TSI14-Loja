loja tsi14
==========

Projeto exemplo para as aulas de Programação da turma TSI14

Desenvolvido por [Carlos G. Godri](https://twitter.com/carlosgodri) e [Patrick Di Pierri](https://www.facebook.com/patrick.depieri)

Implementação de uma versão simples de loja virtual

>Instalacao

**Crie um banco de dados com o nome loja**

<code>CREATE DATABASE loja;</code>

**Depois crie uma tabela chamada preco com os campos ID, NOME, DETALHES, PRECO**

<code>
CREATE TABLE produtos (id integer auto_increment primary key, nome varchar(255) not null, detalhes text not null, preco decimal (10,2));
</code>

**Sugiro adcionar um item na tabela produtos para testar**
<code>
INSERT INTO produtos VALUES (1, 'Sapato','Sapato de cristal feito para alguma princesa da Disney', 15000);
</code>	

**crie mais uma tabela chamada categorias**

<code>
CREATE TABLE categorias (id integer auto_increment primary key, nome varchar(255));
</code>	

**Adcionado mais uma coluna na tablela Produtos a coluna para o departamento**
<code>
ALTER TABLE produtos ADD COLUMN categoria_id integer;
</code>	
***EM ATUALIZACAO***

