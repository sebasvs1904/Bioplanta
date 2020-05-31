

-- TABLAS
-- Tabla cliente
CREATE TABLE Cliente (
    idcliente integer PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    nombrecli varchar(40) NOT NULL,
	apellidop varchar(25) NOT NULL, 
    apellidom varchar(25) NOT NULL,
	nombreusuario varchar(50) NOT NULL, 
    fecha_nac date, 
    telefono char(10) NOT NULL,
    email varchar(70) NOT NULL,   
    contraseña varchar(20) NOT NULL, 
    iddireccion integer NOT NULL
    );
-- Tiene C1	

-- Tabla administrador
CREATE TABLE Administrador (
    idadmin integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombreadmin varchar(40) NOT NULL,
	apellidoap varchar(25) NOT NULL,
    apellidoam varchar(25) NOT NULL,
	nombreusuarioa varchar(50) NOT NULL,
    fecha_nac date,
    telefono char(10) NOT NULL,
	email varchar(70) NOT NULL,
	contraseña varchar(20) NOT NULL,
	fec_ingreso TIMESTAMP  NOT NULL,
    iddireccion integer NOT NULL
     );
-- Tiene C2

-- Tabla productos
CREATE TABLE Productos (
    idproducto integer PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    nombrepro varchar(20) NOT NULL,
    cantexistencia integer NOT NULL,
	descripcion varchar(300) NOT NULL,
	foto longblob NOT NULL, 
	preciou double NOT NULL, 
    categoria varchar(20) NOT NULL,
    disponibilidad boolean NOT NULL 
    );

-- Tabla compra
CREATE TABLE Compra (
	idproducto integer NOT NULL,
	idcliente integer NOT NULL,
    folio integer NOT NULL, 
    cantidad integer NOT NULL,
    fecha_compra TIMESTAMP,
    	 CONSTRAINT C9 PRIMARY KEY (idcliente,idproducto) 

    );
-- Tiene C3 y C4	

-- Tabla actualiza
CREATE TABLE Actualiza ( 
	idadmin integer NOT NULL,
	idproducto integer NOT NULL,
    fecha_modificacion  TIMESTAMP NOT NULL,
	
	 CONSTRAINT C8 PRIMARY KEY (idadmin,idproducto) 
     );
-- Tiene C5 y C6

-- Tabla direccion
CREATE TABLE Direccion (
    iddireccion  integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
    calle varchar(40) NOT NULL,
    ciudad varchar(20) NOT NULL,
    cp char(5) NOT NULL, 
    municipio varchar(20) NOT NULL,
    estado varchar(20) NOT NULL,
    num_casa char(5) NOT NULL
    );

-- Tabla tarjeta
CREATE TABLE Tarjeta (
    idtarjeta integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
    numcuenta varchar(16) NOT NULL,
    cvv char(4) NOT NULL,
    fechavenc char(4) NOT NULL,
    idcliente integer NOT NULL
    );
-- Tiene C7


-- ALTER TABLE - CONSTRAINTS = C#
-- AT de Cliente
ALTER TABLE Cliente ADD CONSTRAINT C1 FOREIGN KEY (iddireccion) 
REFERENCES Direccion(iddireccion) ON UPDATE CASCADE ON DELETE RESTRICT;

-- AT de Administrador
ALTER TABLE Administrador ADD CONSTRAINT C2 FOREIGN KEY (iddireccion) 
REFERENCES Direccion(iddireccion) ON UPDATE CASCADE ON DELETE RESTRICT;   

-- AT de Compra
ALTER TABLE Compra ADD CONSTRAINT C3 FOREIGN KEY (idcliente) 
REFERENCES Cliente(idcliente) ON UPDATE CASCADE ON DELETE RESTRICT;
ALTER TABLE Compra ADD CONSTRAINT C4 FOREIGN KEY (idproducto) 
REFERENCES Productos(idproducto) ON UPDATE CASCADE ON DELETE RESTRICT;

-- AT de Actualiza
ALTER TABLE Actualiza ADD CONSTRAINT C5 FOREIGN KEY (idadmin) 
REFERENCES Administrador(idadmin) ON UPDATE CASCADE ON DELETE RESTRICT;
ALTER TABLE Actualiza ADD CONSTRAINT C6 FOREIGN KEY (idproducto) 
REFERENCES Productos(idproducto) ON UPDATE CASCADE ON DELETE RESTRICT;

-- AT de Tarjeta
ALTER TABLE Tarjeta ADD CONSTRAINT C7 FOREIGN KEY (idcliente) 
REFERENCES Cliente(idcliente) ON UPDATE CASCADE ON DELETE RESTRICT;