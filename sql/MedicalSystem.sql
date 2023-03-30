CREATE TABLE usuario(


    id INT NOT NULL AUTO_INCREMENT,
 	nome varchar (50)NOT null,
    email varchar (50) NOT null,
    especialidade varchar (50) NOT null,
    CRM varchar (15) NOT null,
    senha varchar (20) NOT null,
    
    PRIMARY KEY(id)
);

INSERT INTO `usuario`(`Nome`, `Email`, `Especialidade`, `CRM`, `Senha`) VALUES ('Hector','hector@gmail.com','Oftalmologia','00000101010','123')