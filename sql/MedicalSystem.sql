CREATE TABLE usuario(


    id INT NOT NULL AUTO_INCREMENT,
 	nome varchar (50)NOT null,
    email varchar (50) NOT null,
    cidade varchar (50) NOT null,
    especialidade varchar (50) NOT null,
    CRM varchar (15) NOT null,
    telefone varchar (14) NOT null,
    senha varchar (20) NOT null,
    
    PRIMARY KEY(id)
);

INSERT INTO `usuario`(`Nome`, `Email`, `Cidade`, `Especialidade`, `CRM`, `Telefone`, `Senha`) VALUES ('Hector','hector@gmail.com','SC','Oftalmologia','00000101010','(47) 9 9285-8585','123')