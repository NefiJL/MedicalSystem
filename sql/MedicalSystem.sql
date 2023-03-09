CREATE TABLE Usuario(


    id INT NOT NULL AUTO_INCREMENT,
 	Nome varchar (50)NOT null,
    Email varchar (50) NOT null,
    Cidade varchar (50) NOT null,
    Especialidade varchar (50) NOT null,
    CRM int(15) NOT null,
    Telefone int (14) NOT null,
    Senha int(20) NOT null,
    
    PRIMARY KEY(id)
);

INSERT INTO `cadastro`(`Nome`, `Email`, `Cidade`, `Especialidade`, `CRM`, `Telefone`, `Senha`) VALUES ('Hector','hector@gmail.com','SC','Oftalmologia','00000101010','(47) 9 9285-8585','123')