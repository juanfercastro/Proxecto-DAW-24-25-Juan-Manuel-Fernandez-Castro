# FASE DE CODIFICACIÓN E PROBAS

- [FASE DE CODIFICACIÓN E PROBAS](#fase-de-codificación-e-probas)
  - [1- Codificación](#1--codificación)
  - [2- Prototipos](#2--prototipos)
  - [3- Innovación](#3--innovación)
  - [4- Probas](#4--probas)

## 1- Codificación

[Código](/DevLink/)

## 2- Prototipos

[Prototipo Figma](https://www.figma.com/design/Qg7UdD7r1dpncMoztecmSe/DevLink?node-id=0-1&p=f&t=TbSOAMuUIvYqO0iS-0)

## 3- Innovación

Se usará bootstrap para facilitar el uso de css en formularios y jquery para acelerar el desarrollo en js

## 4- Probas

Se prueba el registro de un nuevo usuario: no funciona bien. Problema: al dejar el campo de apellidos vacío salta un error. Corrección: añadir el ? en la declaración de los atributos de las clases que pueden ser nulos.
>
Se prueba el login de usuarios: funciona correctamente.
>
Se lleva a cabo prueba del listado del foro: no muestra todos los resultados existentes. Corrección: mal escrito el nombre del array que contenía las entradas.
>
Se prueba la insercion de entradas del foro: funciona correctamente.
>
Tras modificación de los estilos en el foro se prueba de nuevo la insercion mediante AJAX: funciona correctamente.
>
Probamos los mensajes de error al mandar el formulario de nueva entrada vacío: no se muestran los mensajes de error. Corrección: no estaba puesta la variable que contenía el mensaje.
>
Probamos la edición de entradas del foro: funciona correctamente.
>
Probamos la eliminación de entradas del foro: no funciona bien. Problema: la selección estaba hecha mediante el id, en ajax al selccionar por id solo detecta el primer elemento con el id. Corrección: cambiar de id a clase para la seleccion con AJAX

[**<-Anterior**](../../README.md)
