CREATE DATABASE tienda_master;
USE tienda_master;

CREATE TABLE usuarios(
    id INT(255) auto_increment not null,
    nombre varchar (100) not null,
    apellidos varchar (255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    rol varchar(20)
    image varchar (255)
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)engine=innoDb;

INSERT into usuarios VALUES(null, 'Admin', 'admin','admin@admin.com', 'password', 'admin', null);

CREATE TABLE categorias(
    id INT(255) PRIMARY KEY auto_increment not null,
    nombre varchar(100) not null,
    CONSTRAINT pk_categorias
)engine=innoDb;

INSERT INTO categorias VALUES(null,'manga corta');
INSERT INTO categorias VALUES(null,'manga larga');
INSERT INTO categorias VALUES(null,'tirantes');
INSERT INTO categorias VALUES(null,'sudadera');

CREATE TABLE productos (
    id INT(255) auto_increment not null,
    categoria_id INT(255) not null,
    nombre varchar (100) not null,
    descripcion text,
    precio float not null,
    stock int(255) not null,
    oferta varchar(2),
    fecha date not null,
    imagen varchar(255),
    CONSTRAINT pk_categorias primary key(id),
    CONSTRAINT fk_producto_categoria foreign key(categoria_id) references categorias(id)
)engine=innoDb;


CREATE TABLE pedidos (
    id INT(255) auto_increment not null,
    categoria_id INT(255) not null,
    provincia varchar (255) not null,
    localidad varchar (255) not null,
    direccion varchar(255) not null,
    costo float(200,2) not null,
    estado varchar(20) not null,
    fecha date,
    hora time,
    CONSTRAINT pk_categorias primary key(id),
    CONSTRAINT fk_pedido_usuario foreign key(usuario_id) references usuarios(id)
)engine=innoDb;

CREATE TABLE lineas_pedido(
    id int (255) auto_increment not null,
    pedido_id int(255) not null,
    producto_id int(255) not null,
    CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id)
    CONSTRAINT fk_linea_pedido foreign key (pedido_id) references pedidos(id),
    CONSTRAINT fk_linea_producto foreign key(producto_id) references productos(id)
)engine=innoDb;
