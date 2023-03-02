CREATE TABLE Cadastro(


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