# iaw-practica-lamp-docker

>IES Celia Viñas (Almería) - Curso 2017/2018  
>Módulos: Bases de Datos (BD) / Implantación de Aplicaciones Web (IAW)  
>Ciclos: CFGS Desarrollo de Aplicaciones Web (DAW) / CFGS Administración de Sistemas Informáticos en Red (ASIR)  

El contenido de este repositorio ha sido utilizado por el alumnado del IES Celia Viñas (Almería) en los módulos de:

- Bases de Datos del Ciclo Formativo de Grado Superior Desarrollo de Aplicaciones Web.
- Implantación de Aplicaciones Web del Ciclo Formativo de Grado Superior Administración de Sistemas Informáticos en Red.

Esta práctica consiste en la creación de un sistema CRUD **muy básico** que permite añadir, editar, borrar y ver registros de una base de datos, haciendo uso de [PHP][1] y [MySQL][2].

Vamos a trabajar con diferentes versiones de la misma aplicación para ir estudiando su evolución. Los repositorios de las aplicaciones que vamos a utilizar están disponibles en GitHub:

- [Versión 1. Código Monolítico o Código _Espagueti_][9]
- [Versión 2. Controlador y Vista][10]
- [Versión 3. Modelo, Vista, Controlador (MVC)][11]

## Características

- La aplicación no sigue ningún patrón de diseño, podemos decir que tiene una **estructura monolítica**.
- El entorno de desarrollo LAMP se ha creado con [Docker][3] y [Docker Compose][4].
- No se ha utilizado ningún framework de PHP, estamos utilizando _vanilla_ PHP.
- Se ha utilizado la interfaz de programación **procedimental** de la  [extensión MySQLi de PHP][5] para interactuar con la base de datos.
- El framework CSS que se ha utilizado es [Bootstrap][6].

## Créditos

El código utilizado en esta práctica está basado en el repositorio [crud-php-complete][7] de [@chapagain][8].

[1]: http://www.php.net
[2]: https://www.mysql.com
[3]: https://www.docker.com
[4]: https://docs.docker.com/compose/
[5]: https://www.php.net/manual/es/book.mysqli.php
[6]: https://getbootstrap.com/docs/5.2/getting-started/introduction/
[7]: https://github.com/chapagain/crud-php-complete
[8]: https://github.com/chapagain
[9]: https://github.com/josejuansanchez/iaw-practica-lamp-docker
[10]: https://github.com/josejuansanchez/iaw-practica-lamp-login-docker/
[11]: https://github.com/josejuansanchez/iaw-practica-lamp-mvc-docker