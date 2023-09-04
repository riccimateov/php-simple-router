# php-simple-router

Este router te permite manejar rutas y controladores en tu aplicación web. 
Puedes definir rutas y asociarlas a controladores para mostrar vistas correspondientes.
Tambien en los controladores podes evaluar condiciones del lado de servidor como estado de sesion del usuario, params etc.

## Estructura de Carpetas

El proyecto sigue una estructura de carpetas básica:

- `controllers/`: Contiene los archivos de controladores.
- `views/`: Puedes colocar tus archivos de vistas en esta carpeta.
- `router.php`: El archivo principal que contiene el enrutador y las definiciones de rutas.

## Definición de Rutas

Puedes definir rutas en el archivo `router.php`. 

Cada ruta se define como un arreglo en el que especificas el patrón de ruta, el controlador correspondiente y un nombre opcional para la ruta. 

Aquí hay un ejemplo de cómo definir una ruta:

```php
$routes = array(
    array(
        'path_pattern' => '/^index$/',
        'controller' => 'controllers/main.controller.php',
        'name' => 'index',
    ),
);

En caso de que no encuentre el archivo del controlador o la ruta no este definida, mostrara el mensaje correspondiente. 
Tambien se podria reemplazar esto y mostrar un 404 not found.

Tambien podria ser utilizado para desarrollar una API y las rutas definidas utilizarlas como endpoints de la misma.
