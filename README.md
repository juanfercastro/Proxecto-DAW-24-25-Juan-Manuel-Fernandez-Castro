# Proxecto fin de ciclo

- [Proxecto fin de ciclo](#proxecto-fin-de-ciclo)
  - [Taboleiro do proyecto](#taboleiro-do-proyecto)
  - [Descrición](#descrición)
  - [Instalación / Posta en marcha](#instalación--posta-en-marcha)
  - [Uso](#uso)
  - [Sobre o autor](#sobre-o-autor)
  - [Licenza](#licenza)
  - [Índice](#índice)
  - [Guía de contribución](#guía-de-contribución)
  - [Links](#links)

## Taboleiro do proyecto

En desarollo

## Descrición

El proyecto consiste en el desarrollo de una página web dedicada por completo al sector de la programación, en ella las personas de dicho sector podrán crear usuarios para compartir sus portfolios, también se podrán unir empresas cuya actividad principal sea del mismo sector y podran publicar ofertas de empleo. La página dispondrá también de un foro a disposición de los usuarios con el fin de interactuar y ayudarse en sus proyectos.
Se usará html, css y javascript con jquery en el frontend de la web y en el backend php en arquitectura MVC para facilitar la organización de los archivos.

## Instalación / Posta en marcha
Para poder desplegar DevLink lo primero es tener instalado docker y docker-compose instalado en la máquina, ya sea virtual o real.
- Si usas windows: sigue este tutorial u otro de tu gusto, [Instalar docker-windows](https://learn.microsoft.com/es-es/virtualization/windowscontainers/manage-docker/configure-docker-daemon).
- si usas linux abre la terminal y ejecuta los comandos:
  - sudo apt update.
  - sudo apt upgrade.
  - sudo apt install docker.
  - sudo apt install docker-compose.
>
una vez instalado docker y docker-compose, clona el repositorio, entra en la carpeta DevLink y ejecuta el comando sudo docker-compose up. Esto debería lanzar los contenedores docker y una vez entres en el navegador y busques 'localhost' ya deberías ver la landign-page de DevLink.


## Uso
El uso de DevLink permite a los usuarios programadores la creación de su propio portfolio, destacando su especialidad y las tecnologías que conocen, también pueden buscar en las ofertas de empleo la que mas se ajuste a ellos. Los usuarios empresas pueden tanto crear anuncios sobre ofertas de empleo como buscar los portfolios de los desarrolladores en busca de algún perfil que consideren adecuado para el puesto.

Actualmente DevLink permite el registro y login de usuarios, asi como la búsqueda, adición, edición y eliminación de entradas en el foro de manera dinámica.

## Sobre o autor

Como el creador de DevLink soy estudiante del segundo año de Ciclo Superior en Desarrollo de Aplicaciones Web, con puntos fuertes orientados al desarrollo backend en php, siendo este el lenguaje con el que más familiarizado estoy ahora mismo, asimismo también tengo conocimientos de larevel,javascript, html5, css3 y un poco de experiencia en Wordpress y uso de jquery.
>
La idea de DevLink nace de la necesidad de hacer mas fluido la búsqueda de empleo y formación de relaciones en un sector que es relativamente nuevo y que crece cada vez más, necesitándose un mayor número de profesionales cada año.
>
Para poder contactar conmigo hágase mediante correo electrónico a jmauelfercas@gmail.com

## Licenza

[Licencia](License.md)

## Índice

1. [Anteproyecto](doc/templates/1_Anteproxecto.md)
2. [Análise](doc/templates/2_Analise.md)
3. [Deseño](doc/templates/3_Deseño.md)
4. [Codificación e probas](doc/templates/4_Codificacion_e_probas.md)
5. [Implantación](doc/templates/5_Implantación.md)
6. [Referencias](doc/templates/6_Referencias.md)
7. [Incidencias](doc/templates/7_Incidencias.md)

## Guía de contribución
Si te llama la idea y quieres contribuir al desarrollo de DevLink puedes empezar haciendo el modelo y controlador de la clase Oferta, o el modelo Entrada e implementandolo en el controlador del Foro.
>
Otras cosas con las que se pueden contribuir son la implementacion de un formulario cuando un usuario de tipo developer entra por primera vez y aún no ha creado su portfolio o lo mismo en el caso de un usuario empresa que no ha hecho su primera oferta (aunque en este último será opcional ya que los usuarios tipo empresa pueden buscar los portfolios de los desarrolladores de de misma forma que se pueden buscar las conversaciones del foro). Por supuesto, de la misma forma que cada programador crea su propio portfolio, lo pueden editar, habilitar la edición del portfolio usando la librería Xeditable haría que quedase mucho mejor visualmente hablando.

## Links

[Explicación sobre las formas jurídicas.](https://www.stelorder.com/blog/forma-juridica/)
>
[Diferencias entre autonomo y SL](https://www.managementpoint.es/6-diferencias-entre-ser-autonomo-o-sociedad-limitada/)
>
[Precio internet profesional](https://www.orange.es/empresas/tarifas/fibra)
>
[Precio Hosting](https://www.vultr.com/)
>
[Precio asesoría fiscal](https://solo-autonomos.es/planes/)
>
[Proteccion de datos (hacer scroll abajo para precios)](https://protecciondatos-lopd.com/presupuesto-proteccion-datos-precio/)
>
[Costes deducibles](https://www.repsol.es/autonomos-y-empresas/asesoramiento/desgravar-luz-autonomo/)
>
[Ayudas para emprendimientos IEBT](https://emprego.xunta.gal/portal/index.php/es/?option=com_content&view=article&id=226)
>
[Referencia para el portafolio](https://www.figma.com/design/95qacm3BYZ6Q3sNW7giaKp/Portfolio%7C-Personal-Portfolio-%7C-5---Community-?node-id=0-1&p=f&t=V9gYG79VGdjtbNbo-0)
>
[Informacion diagrama de arquitectura](https://www.lucidchart.com/blog/es/como-elaborar-diagramas-de-arquitectura)
>
[Bootstrap para formulario](https://getbootstrap.com/docs/5.3/forms/overview/)
>
[jQuery para AJAX y filtro](https://jquery.com/)
>
Referencia para la landing page: 
 - [lingoda](https://www.lingoda.com/es/)
 - [Youtube](https://www.youtube.com/premium?ybp=Sg0IBhIJdW5saW1pdGVk4AEC)
 - [FontAwesome](https://fontawesome.com/icons)
>
Referencia iconos login: [Codeanywhere](https://codeanywhere.com/signin)
>
Iconos: [Fontawesome](https://fontawesome.com/icons)
>
Imagenes: [Unsplash](https://unsplash.com/es)
>
Referencia de las tabs en foro: [Ceogest](https://ceogest.com/) (necesrio crear una cuenta para ver las datatables).
>
[Requisitos de instalación de docker](https://platzi.com/blog/requisitos-minimos-para-instalar-docker/)