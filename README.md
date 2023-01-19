# Introdução
Este projeto é resultado da conclusão da formação em PHP na Alura. Abrangendo conceitos e técnicas para desenvolvimento em PHP. 
Utilizando a extensão PDO do PHP, para ter acesso ao banco de dados e criar um CRUD simples na aplicação.


# PDO

PDO (PHP Data Object) é uma extensão da linguagem PHP para acessar o banco de dados, com suporte á diversos mecanismos de banco de dados como queries parametrizadas, diferentes tipos de retorno, tratamento de exceções e tratatamento de transações.
Possuindo os pricipais banco de dados do mercado, esse suporte é possível graças ao conceito de driver utilizado, em linhas gerais, o driver é uma extensão que instalamos no PHP e que indica como o PDO deve se comunicar com aquele banco em específico, os pricipais são:
- MySQL
- SQL Server
- PostgresSQL
- Oracle
- SQLite

Uma vantagem do PDO com relação a outras extensões do PHP é a possibilidado de através das mesmas classes e métodos executar.

#SQLite

Como banco de dados local, foi utilizado o SQLite. O SQLite é uma base de dados relacional de código aberto e que dispensa o uso de um servidor na sua atuação. Armazenando seus arquivos dentro de sua própria estrutura, ele é capaz de funcionar muito bem em aplicações diversas, principalmente, websites de tráfego médio e sistemas mobile.
