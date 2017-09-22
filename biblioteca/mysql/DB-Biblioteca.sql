/* Listado de base de datos del servidor */
show databases;

/* Eliminar la base de datos biblioteca */
drop database biblioteca;

/* Crear una base de datos llamada Biblioteca */
Create database Biblioteca;

/* Usando la base de datos biblioteca */
Use Biblioteca;

/* Creando la tabla libros */
Create table Libros
(
	CodLib int not null,
    NomLib char(60) not null,
    EditLib char(35) not null,
    AutLib char(35) not null,
    GenLib char(35) not null,
    NumPagLib int not null,
    FecEdicLib date not null,
    CONSTRAINT CodLib_PK Primary key (CodLib)
);

/* Ver listado de tablas creadas dentro de la base de datos activa */
show tables;

/* Creando la tabla préstamos */
Create table Prestamos
(
	NumPres int not null,
    CodLib int not null,
    CodUser int not null,
    FecSalLib date not null,
    FecDevLib date not null,
    CONSTRAINT NumPres_PK Primary Key (NumPres)
);
    
/* Creando la tabla usuarios */
Create table Usuarios
(
	CodUs int not null,
    NomUs char(40) not null,
    ApeUs char(40) not null,
    DNIUs char(8) not null,
    DirUs char(50) not null,
    DistUs char(40) not null,
    Provincia char(40) not null,
    FeNac date not null,
    CONSTRAINT CodUs_PK Primary Key (CodUs)
);

/* Listado de tablasde base de datos */
show tables;

/* Creando relaciones en la tabla detalle o tabla principal */
Alter table Prestamos
	Add CONSTRAINT CodLib FOREIGN KEY (CodLib) REFERENCES Libros (CodLib),
    Add CONSTRAINT CodUs FOREIGN KEY (CodUser) REFERENCES Usuarios (CodUs);

/* Insertar registros en tabla Libros */
Insert into Libros
(CodLib, NomLib, EditLib, AutLib, GenLib, NumPagLib, FecEdicLib)
Values
('1', 'Don Quijote de la Mancha I', 'Anaya', 'Miguel de Cervantes Saavedra', 'Caballeresco', '517', '1979-10-05');

/* Ver registro de la tabla Libros */
select * from Libros;

/* Agregar dos o más registros a la tabla Libros */
Insert into Libros
(CodLib, NomLib, EditLib, AutLib, GenLib, NumPagLib, FecEdicLib)
Values
('2', 'Don Quijote de la Mancha II', 'Anaya', 'Miguel de Cervantes Saavedra', 'Caballeresco', '517', '1990-10-10'),
('3', 'Historia de Nueva Orleans', 'Alfaraguara', 'William Faulkner', 'Novela', '186', '1985-04-10');

/* Agregar más registros a la tabla Libros */
Insert into Libros
(CodLib, NomLib, EditLib, AutLib, GenLib, NumPagLib, FecEdicLib)
Values
('4', 'El Principito', 'Andina', 'Antonie Saint', 'Aventura', '120', '1996-04-09'),
('5', 'El Príncipe', 'S.M', 'Maquiavelo', 'Político', '210', '1995-08-12'),
('6', 'Diplomacia', 'S.M', 'Henry Kissinger', 'Político', '825', '1975-06-10');

/* Ver listado de registros ingresados */
select * from Libros;

/* Insertar registros en la tabla Usuarios */
Insert into Usuarios
(CodUs, NomUs, ApeUs, DNIUs, DirUs, DistUs, Provincia, FeNac)
Values
('1', 'Inés', 'Posadas Gil','25786321', 'Av. Las Escaleritas 125', 'Nuevo Imperial', 'Cañete', '1971-07-04'),
('2', 'José', 'Sánchez Pons','40155263', 'Meza y López 51', 'Lunahuaná', 'Cañete', '1996-09-06'),
('3', 'Miguel', 'Gómez Sáenz','15478952', 'Gran Vía 71', 'Imperial', 'Cañete', '1976-12-09'),
('4', 'Eva', 'Santana Páez','01563289', 'Pío Baroja 23', 'San Vicente', 'Cañete', '1980-05-23'),
('5', 'Yolanda', 'Betancor Díaz','45896325', 'El Cid 45', 'San Luis', 'Cañete', '1976-09-17');

/* Visualizar los datos de usuarios ingresados */
select * from usuarios;

/*Insertar registros a la tabla Préstamos*/
Insert into Prestamos
(NumPres, CodLib, CodUser, FecSalLib, FecDevLib)
Values
('1', '1', '3', '1999-11-01', '1999-11-13'),
('2', '3', '2', '1999-11-03', '1999-11-18'),
('3', '2', '5', '1999-11-18', '1999-11-25'),
('4', '5', '2', '1999-11-21', '1999-12-01'),
('5', '6', '4', '1999-11-21', '1999-11-30'),
('6', '2', '4', '1999-11-26', '1999-12-01'),
('7', '4', '3', '1999-11-30', '1999-12-05'),
('8', '1', '1', '1999-12-01', '1999-12-04');

/* Ver registro de la tabla libros */
select * from libros;

/* Ver registros de la tabla usuarios */
select * from usuarios;

/* Ver registros de la tabla prestamos */
select * from prestamos;

DESCRIBE libros;
