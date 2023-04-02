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

CREATE TABLE relato(

    idR INT NOT NULL AUTO_INCREMENT,
    altura VARCHAR(3) NOT NULL,
    idade INT NOT NULL,
    sexo ENUM('Masculino', 'm','M', 'f', 'M', 'Femenino') NOT NULL,
    dataR DATE NOT NULL,
    relato VARCHAR(10000) NOT NULL,
    PRIMARY KEY(idR)

);

    UPDATE relato SET dataR = STR_TO_DATE(dataR, '%d/%m/%Y');

