# Git

##### Qué es un sistema de control de versiones. <hr>

``
 El control de versiones es un sistema que registra los cambios realizados sobre un archivo o conjunto de archivos a lo largo del tiempo, de modo que puedas recuperar versiones específicas más adelante, permite trabajar en equipo colaborativamente.
 Sistemas: Git.
``

##### ¿Qué es git? Características más relevantes <hr>

``
  Git, es un software de control de versiones diseñado por Linus Torvalds.
``

**Características**

=>  Rapidez en la gestión de ramas, debido a que Git nos dice que un cambio será fusionado mucho más frecuentemente de lo que se escribe originalmente.

=> Gestión distribuida; Los cambios se importan como ramas adicionales y pueden ser fusionados de la misma manera como se hace en la rama local.

=> Gestión eficiente de proyectos grandes.

=> Realmacenamiento periódico en paquetes.

##### Comandos básicos de git y su utilidad <hr>

+ Iniciar un repositorio vacío en unas carpeta específica.
``
git init
``
+ Añadir un archivo especifico.
``
git add “nombre_de_archivo”
``
+ Añadir todos los archivos del directorio
``
git add .
``
+ Confirmar los cambios realizados. El “mensaje” generalmente se usa para asociar al commit una breve descripción de los cambios realizados.
``
git commit –am “mensaje”
``
+ Revertir el commit identificado por "hash_commit"
``
git revert “hash_commit"
``
+ Subir la rama(branch) “nombre_rama” al servidor remoto.
``
git push origin “nombre rama”
``
+ Mostrar el estado actual de la rama(branch), como los cambios que hay sin hacer commit.
``
git status
``
