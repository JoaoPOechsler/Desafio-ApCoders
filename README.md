# Desafio Ap Coders

Projeto baseado no padrão MVC, utilizando telas simples e intuitivas para facilitar seu uso. 

Recursos utilizados: PHP 7.4, Yii Framework, mySQL com phpMyAdmin e DBDesigner 4(Modelagem do Banco de dados)

Php: https://www.php.net/
Yii2 Framework: https://www.yiiframework.com/doc/guide/2.0/pt-br
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

# Acessando a aplicação:

Utilize o comando ```git clone https://github.com/JoaoPOechsler/Desafio-ApCoders.git``` no cmd ou terminal

Com o painel do Xampp aberto inicie os seviços do ```Apache``` e ```mySql```.

Obs: a porta do mySQL deve estar como 3306 (padrão)

### Instalando o Banco de dados utilizado:

Você deve criar um banco de dados com o nome ```bdapcoders``` em ```utf8_unicode_ci``` no phpMyAdmin ou SGBD de preferencia, após isso localize a aba importar com o banco de dados selecionado e importe o arquivo dentro do projeto com o nome de: ```bdapcoders.sql``` na aba importar deixe exatamente dessa forma:
![image](https://user-images.githubusercontent.com/54291049/149548734-37f79cd9-4d54-497d-9257-ae86c5f28ef9.png)

Caso não funcione pela importação, selecione o Banco de dados criado e Importe o comando SQL do arquivo ```bdapcoders.sql``` 

Após isso abra o CMD ou Terminal, entre na pasta do projeto através do comando ```cd```, com o diretorio aberto do cmd digite:```php yii serve```, feito isso você pode acessar a aplicação em 
http://localhost:8080

![image](https://user-images.githubusercontent.com/54291049/150614303-3c940c40-8576-4bf8-8695-fcffc85bd759.png)

E pronto! Agora é só utilizar como quiser. :)

# Possivel erro:

Ao tentar entrar em uma pagina o seguinte erro pode ser exibido:

Database Exception – yii\db\Exception
SQLSTATE[HY000] [1698] Access denied for user 'root'@'localhost'
↵
Caused by: PDOException
SQLSTATE[HY000] [1698] Access denied for user 'root'@'localhost'

Esse erro é por causa da senha do banco de dados mysql utilizada em ```config/db.php``` para resolver vocẽ tem que colocar sua senha do banco de dados no campo ```'password' => '',```
após isso é so rodar a aplicação novamente


