-- Insertar datos en la tabla de libros
INSERT INTO libros (titulo, autor, editorial, anio_publicacion, genero, isbn)
VALUES ('Cien Años de Soledad', 'Gabriel García Márquez', 'Editorial Sudamericana', 1967, 'Novela', '9780060883287');

-- Insertar datos en la tabla de miembros
INSERT INTO miembros (nombre, direccion, telefono, correo, fecha_registro)
VALUES ('Juan Pérez', 'Av. Siempre Viva 123', '123456789', 'juan@example.com', '2024-10-22');

-- Insertar datos en la tabla de préstamos
INSERT INTO prestamos (id_libro, id_miembro, fecha_prestamo, fecha_devolucion, estado)
VALUES (1, 1, '2024-10-22', '2024-11-22', 'prestado');

-- Insertar datos en la tabla de adquisiciones
INSERT INTO adquisiciones (id_libro, fecha_adquisicion, proveedor, costo)
VALUES (1, '2024-10-22', 'Librería Central', 500.00);

-- Insertar datos en la tabla de inventario
INSERT INTO inventario (id_libro, cantidad, ubicacion)
VALUES (1, 5, 'Estantería A-3');

