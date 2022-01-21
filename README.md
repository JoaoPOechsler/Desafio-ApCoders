# Desafio Ap Coders

Projeto baseado no padrão MVC, utilizando telas simples e intuitivas para facilitar seu uso. 

Recursos utilizados: PHP 7.4, Yii Framework, mySQL com phpMyAdmin e DBDesigner 4(Modelagem do Banco de dados)

Php: https://www.php.net/
Phreeze: http://phreeze.com/phreeze/documentation/
mySQL: https://www.mysql.com/
phpMyAdmin: https://www.phpmyadmin.net/
DBDesigner 4: https://dbmstools.com/tools/dbdesigner-4

# Requisitos para rodar a aplicação:

Xampp (Apache e mySQL) e Composer

## Instalando o XAMPP:

Faça o download do XAMPP em: https://www.apachefriends.org/download.html
ATENÇÃO--> Escolha a versão com ```PHP 7.4``` e siga as instruções do setup 

![Xampp](https://user-images.githubusercontent.com/54291049/149547605-e47425b2-01da-47d0-850f-d5a78f2504a4.png)

Obs: os Serviços ou Modulos utilizados no XAMPP são o Apache e mySQL.

## Instalando o Composer:

Faça o download do Composer em: https://getcomposer.org/Composer-Setup.exe ou https://getcomposer.org/download/ e siga as informações do setup.

Atenção, caso ocorra algum erro durante a instalação pelo setup habilite a checkbox developer mode:

![image](https://user-images.githubusercontent.com/54291049/149763005-32bf2e3d-ac40-4bae-8169-4c6ee174550c.png)

## Instalando o Banco de dados utilizado:

Primeiro você deve criar um banco de dados com o nome ```bdapcoders``` em ```utf8_unicode_ci``` np phpMyAdmin, após isso localize a aba importar com o banco de dados selecionado e importe o arquivo dentro do projeto com o nome de: ```bdapcoders.sql``` na aba importar deixe exatamente dessa forma:
![image](https://user-images.githubusercontent.com/54291049/149548734-37f79cd9-4d54-497d-9257-ae86c5f28ef9.png)

# Acessando a aplicação:

Utilize o comando ```git clone https://github.com/JoaoPOechsler/apcoders.git``` no cmd ou terminal

Com o painel do Xampp aberto inicie os seviços do ```Apache``` e ```mySql```.

Obs: a porta do mySQL deve estar como 3306 (padrão)

E pronto! Agora é só utilizar como quiser. :)

