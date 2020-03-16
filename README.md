# Projeto E-commerce

Projeto desenvolvido do zero no [Curso de PHP 7](https://www.udemy.com/curso-completo-de-php-7/) disponível na plataforma da Udemy e no site do [HTML5dev.com.br](https://www.html5dev.com.br/curso/curso-completo-de-php-7).

Template usado no projeto [Almsaeed Studio](https://almsaeedstudio.com)


Dicas:  

1 - =================================================================================================================================
MySQL - TRUNCATE em tabelas com CONSTRAINT de chave estrangeira
maio 23, 2012
Na fase de desenvolvimento e testes é muito comum alterar as propriedades de suas tabelas e preenche-las com informações.

 Porém chega um momento que queremos resetar tudo para colocar nosso banco em produção e para isso é sempre bom dar um TRUNCATE nas tabelas, a fim de zera-las, tanto na questão dos dados quanto dos incrementadores (AUTO_INCREMENT).

 Dependendo de como seu banco foi modelado podemos ver frustradas estas tentativas. No caso de tabelas com CONSTRAINTS nas chaves estrangeiras simplesmente o MySQL não vai obedecer ao seu comando TRUNCATE.

Então o que fazer?

Uma solução simples é setar a checagem das CONSTRAINTS para false, truncar a tabela e depois voltar a checagem.

 O procedimento para isto é bem simeples:


Execute uma query com o comando: "mysql> SET FOREIGN_KEY_CHECKS = 0;" 
Execute TRUNCATE em suas tabelas 
Execute uma query com o comando: "mysql> SET FOREIGN_KEY_CHECKS = 1;"
Desta forma você consegue zerar suas tabelas e manter toda a integridade do banco.

É isso ai.

====================================================================================================================================

2 - ================================================================================================================================
 
Quando subir a aplicação para o servidor de escolha (deploy), existe um ajuste a ser feito no slim:
   Vá na pasta vendor->slim->slim e copie o arquivo .htaccess. Cole esse arquivo na pasta raiz do projeto onde está o index.php.
   Com isso o sistema de rotas do slim funcionará corretamente

====================================================================================================================================

3 - ================================================================================================================================

Caros alunos, a função mcrypt_encrypt() usada nesta aula foi depreciada no PHP 7.1
Se ocorrer algum erro em seu código, mude-o para a função openssl_encrypt()
Para mais informações, vejam o arquivo User.php no repositório deste projeto em nosso GitHub: https://github.com/hcodebr/ecommerce/blob/master/vendor/hcodebr/php-classes/src/Model/User.php
Bons estudos :)

Equipe Hcode

====================================================================================================================================