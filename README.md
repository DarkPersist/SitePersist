# SitePersist

## ¿Que es?

SitePersist

## Tecnologias Implementadas

- apache (2.4.54)
- php (8.1.11)
- composer (2.2.18)
- nginx (1.22.0)

💻 Desarrolladores

| [<img src="https://avatars.githubusercontent.com/u/100486485?=4" width="100px;"/><br /><sub><b>Sebastian L.</b></sub>](https://github.com/SebastianLopezOsorno-SENA) | [<img src="https://avatars.githubusercontent.com/u/103140681?v=4" width="100px;"/><br /><sub><b>Mateo L.</b></sub>](https://github.com/Matthew1403) |
| :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------: | :----------------------------------------------------------------------------------------------------------------------------------------------------------: |

# 📑 Guía de Uso

A nivel de edición contenido hay que tener en cuenta una [Guía de Uso del Sitio Web](./docs/GUIA.md) ya que algunos contenidos tienen reglas especiales para poder ser agregados.

# Estructura de Base de Datos

---

  CREATE TABLE `administradores` (
    `id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `lastname` varchar(100) NOT NULL,
    `password` varchar(200) NOT NULL,
    `mail` varchar(100) NOT NULL,
    `charge` int(11) NOT NULL
  );

  CREATE TABLE `acciones` (
    `id` int(11) NOT NULL,
    `action` varchar(100) NOT NULL,
    `description` int(100) NOT NULL,
    `administrator` varchar(200) NOT NULL,
    `date_action` datetime NOT NULL,
    `ip` varchar(15) NOT NULL
  );

  CREATE TABLE `cargos` (
    `id` int(11) PRIMARY KEY NOT NULL,
    `name` varchar(100) NOT NULL,
    `description` varchar(100) NOT NULL,
    `permission` varchar(100) NOT NULL
  );

  CREATE TABLE `equipos` (
    `id` int(11) PRIMARY KEY NOT NULL,
    `name` varchar(100) NOT NULL,
    `brand` varchar(100) NOT NULL,
    `category` varchar(100) NOT NULL
  );

  CREATE TABLE `espacios` (
    `id` int(11) PRIMARY KEY NOT NULL,
    `name` varchar(100) NOT NULL,
    `description` varchar(100) NOT NULL,
    `state` tinyint(1) NOT NULL,
    `type` varchar(100) NOT NULL,
    `size` int(11) NOT NULL,
    `capacity` int(11) NOT NULL
  );

  CREATE TABLE `eventos` (
    `id` int(11) PRIMARY KEY NOT NULL,
    `name` varchar(100) NOT NULL,
    `description` varchar(200) NOT NULL,
    `img` varchar(200) NOT NULL
  );

  CREATE TABLE `inventario` (
    `id` int(11) NOT NULL,
    `code` int(11) NOT NULL,
    `state` tinyint(1) NOT NULL,
    `use_time` int(11) NOT NULL
  );

  CREATE TABLE `prestamos` (
    `id` int(11) NOT NULL,
    `equipment` int(11) NOT NULL,
    `delivery_time` datetime NOT NULL,
    `return_time` datetime NOT NULL,
    `user` int(11) NOT NULL,
    `state` tinyint(1) NOT NULL
  );

  CREATE TABLE `reservas` (
    `id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `state` tinyint(1) NOT NULL,
    `amount_people` int(11) NOT NULL,
    `space` int(11) NOT NULL,
    `start_time` datetime NOT NULL,
    `end_time` datetime NOT NULL,
    `user` int(11) NOT NULL,
    `event` int(11) NOT NULL
  );

  CREATE TABLE `seguridad` (
    `id` int(11) NOT NULL,
    `token` varchar(200) NOT NULL,
    `status` boolean NOT NULL,
    `last_access` datetime NOT NULL,
    `last_change` datetime NOT NULL,
    `user` int(11) NOT NULL,
    `password` varchar(200) NOT NULL
  );

  CREATE TABLE `usuarios` (
    `id` int(11) PRIMARY KEY NOT NULL,
    `name` varchar(100) NOT NULL,
    `lastname` varchar(100) NOT NULL,
    `mail` varchar(100) NOT NULL,
    `phone` int(25) NOT NULL,
    `img` varchar(200) NOT NULL,
    `charge` varchar(100) NOT NULL,
    `state` tinyint(1) NOT NULL
  );

  ALTER TABLE `administradores` ADD FOREIGN KEY (`charge`) REFERENCES `cargos` (`id`);

  ALTER TABLE `inventario` ADD FOREIGN KEY (`code`) REFERENCES `equipos` (`id`);

  ALTER TABLE `seguridad` ADD FOREIGN KEY (`user`) REFERENCES `usuarios` (`id`);

  ALTER TABLE `reservas` ADD FOREIGN KEY (`space`) REFERENCES `espacios` (`id`);

  ALTER TABLE `reservas` ADD FOREIGN KEY (`event`) REFERENCES `eventos` (`id`);

  ALTER TABLE `prestamos` ADD FOREIGN KEY (`equipment`) REFERENCES `inventario` (`id`);

  ALTER TABLE `prestamos` ADD FOREIGN KEY (`user`) REFERENCES `usuarios` (`id`);

  ALTER TABLE `reservas` ADD FOREIGN KEY (`user`) REFERENCES `usuarios` (`id`);

  ALTER TABLE `administradores` ADD FOREIGN KEY (`id`) REFERENCES `acciones` (`administrator`);


# Instrucciones
---

 1. Copiar el codigo y guardarlo con la Extension ***SQL***
 2. Iniciar los servicios de Apache y MySQL en XAMPP
 3. Ir a el localhost: http://localhost/phpmyadmin/
 4. Seleccionar **Nueva** en el panel lateral de ***phpMyAdmin***
 5. Colocar los siguientes Datos: 
--		       **Nombre de la base de Datos:** sitepersist
--		       **Cotejamiento:** utf8mb4_unicode_ci
 5. Le damos en **Crear**
 6. Abrimos la Base de Datos
 7. Le damo en Importar
 8. Seleccionar Archivo y Subes el archivo
 9. En la parte inferior dar click en continuar
 
 *Listo, ya puedes ejecutar localmente esta pagina web*


# Architecture & Infrastructure map

[Direct Link to Map](https://lucid.app/publicSegments/view/89f254ef-faee-44d4-a3f1-924dc2c5434d/image.png)
![Mapa de Developing](/docs/general.png)

## Developing

[Direct Link to Map](https://lucid.app/publicSegments/view/275ec419-eb6e-4f41-bf58-8ddff551e644/image.png)
![Mapa de Developing](/docs/developing.png)

## Staging

[Direct Link to Map](https://lucid.app/publicSegments/view/275ec419-eb6e-4f41-bf58-8ddff551e644/image.png)
![Mapa de Developing](/docs/developing.png)

## Production

[Direct Link to Map](https://lucid.app/publicSegments/view/275ec419-eb6e-4f41-bf58-8ddff551e644/image.png)
![Mapa de Developing](/docs/developing.png)

# User Story Mapping

# SiteMap

# Page Outline

# DataBase Diagram

[Direct Link to Diagram](https://dbdiagram.io/embed/634f6f5a4709410195902535)
![Diagrama de Base de Datos](/docs/diagram.png)
