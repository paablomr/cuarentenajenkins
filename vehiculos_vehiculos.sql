create table vehiculos
(
    tipo        varchar(50) not null,
    id          varchar(50) not null,
    propietario varchar(50) not null,
    dni         varchar(50) not null,
    estado      varchar(50) not null
);

INSERT INTO vehiculos.vehiculos (tipo, id, propietario, dni, estado) VALUES ('Coche ', '123342-Z', 'Pablo Muñoz', '4135135X', 'disponibles');
INSERT INTO vehiculos.vehiculos (tipo, id, propietario, dni, estado) VALUES ('Barco ', '3413431-P', 'Pablo Muñoz', '4312532M', 'disponibles');
INSERT INTO vehiculos.vehiculos (tipo, id, propietario, dni, estado) VALUES ('Motocicletas ', '12435341-M', 'Pablo Muñoz', '2435423P', 'disponibles');