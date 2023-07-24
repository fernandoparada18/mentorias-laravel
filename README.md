# Mentorias de Laravel

## Que es Laravel

Laravel es un framework para aplicaciones web con una sintaxis expresiva y elegante. Laravel elimina el dolor  del desarrollo al facilitar las tareas comunes utilizadas en muchos proyectos web, como:

- [Motor de enrutamiento simple y rápido](https://laravel.com/docs/routing).
- [Potente contenedor de inyección de dependencia](https://laravel.com/docs/container).
- Múltiples back-ends para [sesiones](https://laravel.com/docs/session) y almacenamiento en [caché](https://laravel.com/docs/cache).
- [Base de datos ORM](https://laravel.com/docs/eloquent) expresiva e intuitiva.
- [Migraciones de esquemas](https://laravel.com/docs/migrations) independientes de la base de datos.
- [Robusto procesamiento de trabajos en segundo plano](https://laravel.com/docs/queues).
- [Transmisión de eventos en tiempo real](https://laravel.com/docs/broadcasting).

Laravel es accesible, potente y proporciona las herramientas necesarias para aplicaciones grandes y robustas.

## Temas de las Mentorias de Laravel

- Metodos de Instalación
    - [Instalación Básica](https://laravel.com/docs/10.x/installation).
    - [Laravel Valet](https://laravel.com/docs/10.x/valet).
    - [Laravel Homestead](https://laravel.com/docs/10.x/homestead).
    - Instalacion con Docker usando [Laravel Sail](https://laravel.com/docs/10.x/installation#laravel-and-docker).
    - Instalacion con Docker usando [Laradock](https://laradock.io/getting-started/).
    - Intalación en Windows con [Laragon](https://laragon.org/download/index.html).
- Estructura de Carpetas
- Rutas

    Cuando accedemos a una aplicación laravel lo primero que se cargan son las rutas.
    
    Las rutas mas utilizadas son las siguientes:
    ```php
        Route::get($uri, $callback);
        Route::post($uri, $callback);
        Route::put($uri, $callback);
        Route::patch($uri, $callback);
        Route::delete($uri, $callback);
        Route::options($uri, $callback);
    ```
    Si queremos una ruta que solo retorna una vista podemos usar el siguiente metodo:
    ```php 
        Route::view($uri, $view); 
    ```

    Incluso en ocaciones podemos responder a varios metodos y para eso podemos utilizar el metodo
    ```php 
        Route::match(['get', 'post'], '/', function () {
            // ...
        });
    ```

    O si queremos respoder a todos los tipos de peticiones podemos utilizar el metodo:
    ```php 
        Route::any('/', function () {
            // ...
        });
    ```
    Para listar todas las rutas que tenemos sisponible tenemos el comando

    ` php artisan route:list `

- Vistas
- Integración de Estilos

    Como comprenderas laravel es un full stack framework ya que no solo provee herramientas no solo para el backend sino tambien para el frontend y en el frontend moderno se utilizan herramientas para compilar archivos css y javascript, herramientas que nos ayuden a acelerar el proceso de desarrollo, en laravel se utiliza vite.

    Para instalar vite basta con ejecutar ` npm install ` ya que este viene incluido en el package.json

    Para usa el preprocesador sass debes instalar la dependencia con ` npm i sass --save-dev ` y cambias ` resources/css/app.css ` a ` resources/css/app.scss ` y puedes probar con el siguiente codigo:

    ```scss
        $white :#ffffff;
        body { 
            background-color: red; 
            h1 { color: $white; } 
            a { color: white }
        }
    ```

    Recuerda que debes cambiar la configuracion de vite en vite.config.js e incorporar la directiva ` @vite('resources/css/app.scss') ` en tus vistas.

    Y finalmente ejecutas ` npm run dev ` o para produccion ejecutas ` npm run build `

    ### Para usar bootstrap
    Instalamos la dependencia con `npm i bootstrap —save-dev`

    Lo importamos en `resources/css/app.scss` con el siguiente codigo `@import “bootstrap/scss/bootstrap”;`
    
    Incluimos los archivos de javascript en `resources/js/app.js` con el siguiente codigo `import * as bootstrap from ‘bootstrap’`

    ### Para usar tailwindcss 
    
    Solo debemos seguir las indicaciones de la pagina de tailwindcss

- Blade, el motor de plantillas de Laravel (Herencia y Componente)

    Blade es el motor de plantillas de laravel y es el que nos permite escribir php dentro de html de una forma mas elegante y descriptiva, para utilizar blade el unico requisito es que la vista debe tener extencion .blade.php, para utilizar php en html podemos hacerlo con {{ }} esto nos permite escapar codigo html con la funcion e() una vez que se compilan las vistas y cuando no quieras que se escape el contenido html debes hacerlo con esta sintaxis {!! !!}, Blade tabien tiene algunas directivas que puedes usas para contruir tu plantilla las cuales puedes encontrar en la documentacion oficial.
- Conexión a Base de Datos
- Migraciones


## Seguir Aprendiendo Laravel

Laravel tiene la biblioteca de tutoriales en video y [documentación](https://laravel.com/docs) más extensa y completa de todos los frameworks web modernos, por lo que es muy fácil comenzar con el framework.

También puede probar el [Laravel Bootcamp](https://bootcamp.laravel.com), donde se le guiará a través de la creación de una aplicación Laravel moderna desde cero.

Si no tienes ganas de leer, [Laracasts](https://laracasts.com) puede ayudarte. Laracasts contiene más de 2000 tutoriales en video sobre una variedad de temas que incluyen Laravel, PHP moderno, pruebas unitarias y JavaScript. Mejore sus habilidades explorando nuestra completa biblioteca de videos.

## Licencia

El framework Laravel es un software de código abierto con [licencia MIT](https://opensource.org/licenses/MIT).
