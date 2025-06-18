# FASE DE IMPLANTACIÓN

- [FASE DE IMPLANTACIÓN](#fase-de-implantación)
  - [1- Manual técnico](#1--manual-técnico)
    - [1.1- Instalación](#11--instalación)
    - [1.2- Administración do sistema](#12--administración-do-sistema)
  - [2- Manual de usuario](#2--manual-de-usuario)
  - [3- Melloras futuras](#3--melloras-futuras)

## 1- Manual técnico

### 1.1- Instalación

Para poder continuar con la codificación de DevLink, aparte de una copia de la estrucura de la base de datos (que ya se encuentra en la carpeta DevLink/), es necesario tener docker y docker-compose instalados en el sistema. 
Los requerimientos para instalar docker son: un sistema operativo de 64-bits, al menos 4GB de RAM y permitir la virtualización (en caso de windows activar la virtualización por hardware y en linux requiere tener un procesador con soporte para virtualización).
>
Una vez instalado docker y docker-compose solo es necesario clonar el repositorio, entrar en la carpeta DevLink y ejecutar el comando sudo docker-compose up (en linux en este caso).
>
En caso de que no se vean las imágenes se debe a un problema de permisos en /assets, al conceder permisos a la carpeta deberían verse las imágenes.
>
En caso de no ser capaz de instalar docker puedes descargar la máquina virtual [aqui](https://mega.nz/file/CR0yRISR#la78QQlQYI5GA5s_Nipv6wdRTncmN156RzC7PVPm8DU).Los requerimientos de la propia máquina virtual son más elevados ya que requiere de una máquina real de al menos 12GB de RAM (la máquina virtual usa 8GB), y un procesador de al menos 4 núcleos que son los que requiere la máquina virtual.
La contraseña del usuario es abc123.
>
En caso de querer lanzar DevLink en un servidor ya en funcionamiento, copia los archivos dentro de la carpeta DevLink/ y deberás cambiar todos los enlaces, dirección de las imágenes, archivos js, archivos css y los include de los controladores e index dentro de la carpeta app/, ten en cuenta el archivo globals dentro de la misma carpeta

### 1.2- Administración do sistema

Una vez esté lanzado por completo el sistema de DevLink se llevarán a cabo copias de seguridad tanto del sistema como de la base de datos de forma semanal, como mucho cada dos semanas.
>
Los administradores se encargaran de que los usuarios cumplen las normas de respeto y convivencia, pudiendo alertar e incluso bloquear usuarios de ser estrictamente necesario.
>
Para la gestión de seguridad se deberán implementar: el uso de HTTPS, la protección contra sql inyection, cifrado de contraseña y control de usuarios ya esta hecho

## 2- Manual de usuario
Usuario de tipo desarrollador dado de alta: josema@gmail.com. Contraseña: josemita12
>
Usuario de tipo empresa dado de alta: google@gmail.com. Contraseña: google1274
>
Se puede llevar a cabo registro de nuevos usuarios en caso de ser necesario
>
Registro del usuario: lo primero que se debe hacer es registrarse dando un nombre, email y contraseña válidos, después será redirigido a la página de login donde podrá entrar en su usuario a través del email y contraseña usados anteriormente.
>
Tras haber iniciado sesión el usuario entra a la página del portfolio en la que si es la primera vez que entra se le aparecerá un formulario de datos a rellenar para poder crearlo, también puede modificar el portfolio una vez creado.
>
En caso de que el usuario creado sea de tipo empresa, lo primero que verá será una página con las ofertas que han sido creadas por el usuario, pudiendo tener varias (en el caso de usuario premium), o ninguna. Estas ofertas también se pueden buscar, modificar o eliminar.
>
El usuario puede acceder al foro mediante el menú en la cabecera, en el foro se puede buscar entradas según el título, crear entradas propias, si se necesita ayuda con cualquier tema, y modificar o eliminar las entradas que ya fueron creadas por el usuario anteriormente.
>
De la misma forma que en el foro el usuario puede filtrar las ofertas de empleo, siendo esta la única interacción del usuario con esta página.
>
Para los usuarios de tipo empresa en vez de un listado de ofertas de empleo de terceros, podrá acceder a una lista de portfolios de los programadores registrados en la aplicacición.
>
Se puede cerrar la sesión y volver a la página de login con el boton que se encuentra en la esquina superior derecha

## 3- Melloras futuras

Una de las posibles mejoras a futuro será la implementación de Xeditable para la edición del portfolio, haciendo que la aplicación se vea estéticamente mejor ya que no hay que recurrir a formularios.
>
Otra posible mejora es añadir un chat de ia para aconsejar a los usuarios sobre que poner en los portfolios o en las ofertas de empleo para que llamen más la atención
>
[**<-Anterior**](../../README.md)
