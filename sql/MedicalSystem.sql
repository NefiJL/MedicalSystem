CREATE TABLE usuario(

    id INT NOT NULL AUTO_INCREMENT,
 	nome varchar (50)NOT null,
    email varchar (50) NOT null,
    especialidade varchar (50) NOT null,
    CRM varchar (15) NOT null,
    senha varchar (100) NOT null,
    
    PRIMARY KEY(id)
);

INSERT INTO `usuario`(`Nome`, `Email`, `Especialidade`, `CRM`, `Senha`) VALUES ('Hector','hector@gmail.com','Oftalmologia','00000101010','123')

CREATE TABLE relato(

    idR INT NOT NULL AUTO_INCREMENT,
    altura VARCHAR(10) NOT NULL,
    peso VARCHAR(10) NOT NULL,
    idade INT NOT NULL,
    sexo ENUM('Masculino', 'm','M', 'f', 'M', 'Femenino') NOT NULL,
    dataR DATE NOT NULL,
    titulo VARCHAR(500) NOT NULL,
    observacao VARCHAR(5000) NOT NULL,
    relatoD VARCHAR(10000) NOT NULL,
    PRIMARY KEY(idR)

);

    UPDATE relato SET dataR = STR_TO_DATE(dataR, '%d/%m/%Y');

