# FavelaInvest
 Projeto Favela Invest Squad 6. (PHP)


#### Etapa realizada por :  Kaique e Daiana


- [x] dentro do phpAdmin criar um bd Favelainvest
- [x] dentro do bd Favelainvet criar a tabela de usuarios :

            CREATE TABLE usuarios (
                id int not null PRIMARY KEY AUTO_INCREMENT,
                nome varchar (80) not null,
                email varchar (80) not null UNIQUE,
                senha char(32) not null    
                )

- [x] Conexão com BD para criação de login
 com os campos nome, email, senha e  confirmação de senha.
- [x] Criptografia da senha
- [x] Retorna para pagina de login
- [x] Conexão com BD para verificar login e senha cadastrados
- [x] Retorna pagina HOME