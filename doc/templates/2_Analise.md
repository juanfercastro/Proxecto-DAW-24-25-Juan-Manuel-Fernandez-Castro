# Requerimientos do sistema

- [Requerimientos do sistema](#requerimientos-do-sistema)
  - [1- Descrición Xeral](#1--descrición-xeral)
  - [2- Funcionalidades](#2--funcionalidades)
  - [3- Tipos de usuarios](#3--tipos-de-usuarios)
  - [4- Contorno operacional](#4--contorno-operacional)
  - [5- Normativa](#5--normativa)
  - [6- Melloras futuras](#6--melloras-futuras)

## 1- Descrición Xeral

El proyecto consiste en el desarrollo de una página web llamada DevLink y que estará dedicada por completo al sector de la programación, en ella las personas de dicho sector podrán crear usuarios, compartir fotos o videos relacionados con sus proyectos personales o en colaboracion con otros desarrolladores, también se podrán unir empresas cuya actividad principal sea del mismo sector y podran publicar ofertas de empleo. La página dispondra tambien de un foro a disposicion de los usuarios con el fin de interactuar y ayudarse en sus proyectos.
Se usará html, css y javascript con react en el frontend de la web y en el backend php con un framework (laravel) para facilitar el uso de bases de datos

## 2- Funcionalidades

Posibles acciones a realizar en DevLink:
- Alta de usuario: crear un nuevo usuario, ya sea un desarrollador o empresa, en la base de datos.
- Edicion de usuario: modificar los datos del usuarios en la base de datos.
- Eliminar usuario: eliminar el usuario de la base de datos.
- Nueva publicacion: crear un nuevo post de un usuario en la base de datos.
- Editar datos de publicacion: editar los datos de un post en la base de datos.
- Eliminar publicacion: borrar un post de la base de datos.
- Publicar oferta de empleo: crear un anuncio de un usuario en la web.
- Mostrar publicaciones: mostrar las publicaciones de un usuario en la web.
- Busqueda empleo: mostrar las ofertas disponibles en la web.
- Convertirse en usuario premium: cambiar de un usuario normal a uno de pago.
- Darse de baja de premium: dejar de ser un usuario de pago.
- Nuevo comentario en el foro: registrar un nuevo comentario en la base de datos.
- Editar comentario del foro: editar los datos de un comentario en la base de datos.
- Eliminar comentario del foro: eliminar un comentario del foro de la base de datos.

## 3- Tipos de usuarios

En DevLink habrá diverssos tipos de usuarios:
- Usuario estándar: perfil normal de programador usado para subir posts, buscar empleo o usar el foro.
- Usuario premium: perfil de programador que busca más visibilidad o y ventajas.
- Empresa: perfil para entidades empresariales que buscan desarrolladores de software.
- Administrador: tendrá acceso a todos los perfiles y publicaciones para controlar y eliminar contenido de ser necesario, asi como del foro en ciertos casos.
- Moderador: perfil que se centrará en moderar el foro, vigilando el contenido del mismo

## 4- Contorno operacional

Al ser una web con el mayor parecido a una red social lo único requerido para que el usuario tenga acceso a la misma será un navegador actualizado y una conexión a internet estable.

## 5- Normativa

DevLink, al ser una red social para programadores y empresas a nivel nacional, debe cumplir con la [Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPDPGDD)](https://www.boe.es/buscar/act.php?id=BOE-A-2018-16673) así como con el [Real Decreto-ley 12/2018, de 7 de septiembre, de seguridad de las redes y sistemas de información](https://www.boe.es/buscar/act.php?id=BOE-A-2018-12257) y la [Resolución de 11 de mayo de 2023, de la Agencia Española de Protección de Datos, por la que se aprueban las bases reguladoras y se convoca el Premio a la Difusión del Derecho Fundamental a la Protección de Datos en Redes sociales.](https://www.boe.es/buscar/doc.php?id=BOE-A-2023-12049).
>
Para el cumplimiento de la primera nombrada (LOPDPGDD), la aplicación deberá contar con un aviso legal y política de privacidad tal como en el caso de la [agencia española de proteccion de datos](https://www.aepd.es/politica-de-privacidad-y-aviso-legal), así como una política de cookies, por ejemplo en [google](https://policies.google.com/technologies/cookies?hl=es).

## 6- Melloras futuras

Algunas posibles mejoras que se podrán hacer a futuro en DevLink sería añadir un sistema de valoraciones de empresas y colaboraciones, un sistema para verificar las habilidades y conocimientos de cada desarrollador o el añadir IA a la página con el fin de sugerir mejoras en CV y/o perfiles a los usuarios.

[**<-Anterior**](../../README.md)
