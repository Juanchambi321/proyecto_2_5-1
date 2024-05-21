---https://www.tutorialspoint.com/how-do-i-connect-an-html-web-page-to-a-database

create schema PlayStick;

use PlayStick;
create table likes(
publicacion_l int AUTO_INCREMENT PRIMARY KEY,
FOREIGN key (publicacion_l) REFERENCES publicaciones(id),
);

CREATE TABLE guardados(
publicacion_g int AUTO_INCREMENT primary key,
foreign key (publicacion_g) REFERENCES Publicaciones(id),
)

Create table biblioteca(
id_biblioteac int PRIMARY KEY,
me_Gusta INT,
guardar int,
foreign key (me_Gusta) REFERENCES likes(publicacion_l),
foreign key (guardar) REFERENCES guardados(publicacion_g),
);

create TABLE categorias(
tematica VARCHAR(40),
Nombre varchar(70) primary key,
)

Create table calificacion(
id_calificaion int primary key,
lik int,
vistas int,
foreign key (lik) REFERENCES likes(publicacion_l),
foreign key (vistas) REFERENCES guardados(publicacion_g),
);

CREATE TABLE Usuarios(
  ID INT AUTO_INCREMENT PRIMARY KEY,
  Nombre VARCHAR(100),
  Usuario VARCHAR(50)UNIQUE,
  Gmail VARCHAR(100)UNIQUE,
  Contraseña VARCHAR(100),
 
);

CREATE TABLE Publicaciones(
  ID INT AUTO_INCREMENT PRIMARY KEY,
  UsuarioID INT,
  Foto VARCHAR(255),
  Descripcion TEXT,
  FechaPublicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  categoria varchar(70),
  opinion int,
  guardados int,
  foreign key (opinion) references calificacion (id_calificaion),
  FOREIGN KEY (UsuarioID)REFERENCES Usuarios(ID),
  foreign key (categoria)references categorias(Nombre),
  foreign key (guardados) references biblioteca(id_biblioteac),
);

CREATE TABLE Comentarios(
  ID INT AUTO_INCREMENT PRIMARY KEY,
  PublicacionID INT,
  UsuarioID INT,
  Comentario TEXT,
  FechaComentario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (PublicacionID)REFERENCES Publicaciones(ID),
  FOREIGN KEY (UsuarioID)REFERENCES Usuarios(ID)
);

create table administradores(
id int primary key,
Nombre varchar(40).
Contraseña(50),
usuario_B int,
publicaion_usuario int,
comentarios_usuario int,
bloquear BOOLEAN,
foreign key (usuario_B) references Usuario(ID),
foreign key (publicaion_usuario) REFERENCES Publicaciones(id),
foreign key (comentarios_usuario) REFERENCES Comentarios(id),

)


--CREATE TABLE MeGusta(
 -- UsuarioID INT,
 -- PublicacionID INT,
--FOREIGN KEY (UsuarioID)REFERENCES Usuarios(ID),
 -- FOREIGN KEY (PublicacionID)REFERENCES Publicaciones(ID),
--PRIMARY KEY (UsuarioID, PublicacionID)
--);

--CREATE TABLE PublicacionesGuardadas(
 -- UsuarioID INT,
--  PublicacionID INT,
 -- FOREIGN KEY (UsuarioID)REFERENCES Usuarios(ID),
  --FOREIGN KEY (PublicacionID)REFERENCES Publicaciones(ID),
 -- PRIMARY KEY (UsuarioID, PublicacionID)
--);