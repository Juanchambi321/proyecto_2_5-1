-- Crear la base de datos
CREATE DATABASE PlayStick;

-- Usar la base de datos
USE PlayStick;

-- Crear la tabla Usuarios
CREATE TABLE Usuarios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100),
    Usuario VARCHAR(50) UNIQUE,
    Gmail VARCHAR(100) UNIQUE,
    Contraseña VARCHAR(100)
);

-- Crear la tabla Categorias
CREATE TABLE Categorias (
    Tematica VARCHAR(40),
    Nombre VARCHAR(70) PRIMARY KEY
);

-- Crear la tabla Publicaciones
CREATE TABLE Publicaciones (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    UsuarioID INT,
    Foto VARCHAR(255),
    Descripcion TEXT,
    FechaPublicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Categoria VARCHAR(70),
    Opinion INT,
    Guardados INT,
    FOREIGN KEY (UsuarioID) REFERENCES Usuarios(ID),
    FOREIGN KEY (Categoria) REFERENCES Categorias(Nombre)
);

-- Crear la tabla Likes
CREATE TABLE Likes (
    publicacion_l INT AUTO_INCREMENT PRIMARY KEY,
    FOREIGN KEY (publicacion_l) REFERENCES Publicaciones(ID)
);

-- Crear la tabla Guardados
CREATE TABLE Guardados (
    publicacion_g INT AUTO_INCREMENT PRIMARY KEY,
    FOREIGN KEY (publicacion_g) REFERENCES Publicaciones(ID)
);

-- Crear la tabla Biblioteca
CREATE TABLE Biblioteca (
    id_biblioteca INT PRIMARY KEY,
    me_gusta INT,
    guardar INT,
    FOREIGN KEY (me_gusta) REFERENCES Likes(publicacion_l),
    FOREIGN KEY (guardar) REFERENCES Guardados(publicacion_g)
);

-- Crear la tabla Calificacion
CREATE TABLE Calificacion (
    id_calificacion INT PRIMARY KEY,
    lik INT,
    vistas INT,
    FOREIGN KEY (lik) REFERENCES Likes(publicacion_l),
    FOREIGN KEY (vistas) REFERENCES Guardados(publicacion_g)
);

-- Crear la tabla Comentarios
CREATE TABLE Comentarios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    PublicacionID INT,
    UsuarioID INT,
    Comentario TEXT,
    FechaComentario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (PublicacionID) REFERENCES Publicaciones(ID),
    FOREIGN KEY (UsuarioID) REFERENCES Usuarios(ID)
);

-- Crear la tabla Administradores
CREATE TABLE Administradores (
    ID INT PRIMARY KEY,
    Nombre VARCHAR(40),
    Contraseña VARCHAR(50),
    usuario_B INT,
    publicaion_usuario INT,
    comentarios_usuario INT,
    bloquear BOOLEAN,
    FOREIGN KEY (usuario_B) REFERENCES Usuarios(ID),
    FOREIGN KEY (publicaion_usuario) REFERENCES Publicaciones(ID),
    FOREIGN KEY (comentarios_usuario) REFERENCES Comentarios(ID)
);
