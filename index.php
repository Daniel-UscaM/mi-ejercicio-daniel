<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Ejercicio Git</title>
</head>
<body>
    <h1>Hola, GitHub</h1>
    <p>Este es mi primer archivo gestionado con Git y GitHub.</p>
</body>
</html>

¿Qué es API?

Una API (Application Programming Interface, o Interfaz de Programación de Aplicaciones) es un conjunto de reglas y protocolos 
que permite que diferentes sistemas, programas o aplicaciones se comuniquen entre sí. 
Funciona como un intermediario que facilita la interacción, permitiendo que un software acceda a las 
funcionalidades o datos de otro sin necesidad de conocer cómo está construido internamente.

Ejemplos prácticos:
Imagina que quieres integrar un mapa de Google en tu aplicación. En lugar de crear un mapa desde cero, 
puedes usar la API de Google Maps para mostrar mapas, buscar direcciones o calcular rutas.

Usos principales:
Automatización : Permite conectar sistemas para trabajar de forma más eficiente.
Integración : Por ejemplo, integrar pagos con PayPal o Stripe en una tienda online.
Acceso a datos : Recuperar información desde servicios externos, como publicaciones en redes sociales.
En resumen, una API es una herramienta esencial en la programación moderna que facilita el desarrollo y
 la interoperabilidad entre aplicaciones. 


1. Interfaz:

Es una capa de abstracción que permite que dos sistemas se comuniquen. Por ejemplo, 
cuando usas un volante en un auto, no necesitas saber cómo funciona la mecánica interna; 
solo giras el volante y el auto responde.



2. API (Application Programming Interface):

Es una interfaz que permite que aplicaciones o 
programas de software se comuniquen entre sí y compartan datos.



3. Arquitectura de software:

Es la forma en que está diseñado un sistema, incluyendo cómo
 se organizan y comunican sus componentes y qué funciones realizan.



4. Servicio web:

Es un sistema que permite la comunicación entre equipos a 
través de una red, usando estándares como el protocolo HTTP.



5. Arquitectura REST (Representational State Transfer):

Es un estilo arquitectónico para construir APIs. 
Permite que los datos se guarden en caché y establece cómo se accede y manipula la información. 
El estado de la solicitud no se envía, y el acceso a los datos está controlado por permisos.



6. XML (Extensible Markup Language):

Es un formato tradicional usado para transferir datos, basado en etiquetas.
Aunque sigue en uso, hoy en día el formato JSON es más común.



7. JSON (JavaScript Object Notation):

Es un formato más moderno para transferir datos, fácil de entender y manipular. 
Es el estándar actual en la mayoría de las APIs.



8. APIs públicas y privadas:

Las APIs públicas pueden ser accedidas por cualquier persona, mientras que las APIs privadas requieren autenticación. 
Para acceder a una API privada, se utiliza un token (un objeto con los datos de autenticación), 
generalmente en formato JWT (JSON Web Token).



9. APIs locales vs remotas:

Las APIs locales operan dentro de un mismo entorno (por ejemplo, en un teléfono móvil para realizar una acción local como vibrar). 
Las APIs remotas permiten la comunicación entre sistemas ubicados en diferentes lugares a través de la red.



10. Métodos HTTP:



Los métodos GET, POST, PUT y DELETE son utilizados para interactuar con las APIs:

GET: Para solicitar información.

POST: Para enviar nueva información.

PUT: Para actualizar información existente.

DELETE: Para eliminar información.



11. Códigos de respuesta HTTP:



Los códigos HTTP indican el estado de la solicitud realizada:

200: Éxito.

202: Recurso creado.

300: Redirección.

400: Solicitud inválida (por ejemplo, recurso no encontrado con el código 404).

500: Error en el servidor.



12. HATEOAS (Hypermedia As The Engine Of Application State):



Es un principio en la arquitectura de APIs REST donde los recursos son autodescriptivos,
lo que significa que cada respuesta incluye información sobre otros recursos relacionados.


13. Seguridad:



Es crucial proteger las APIs privadas para evitar que usuarios 
no autorizados accedan o manipulen datos sensibles.


14. Testeo de APIs:



Es importante realizar pruebas para asegurar que las APIs funcionen 
correctamente y devuelvan los datos esperados.


15. Documentación de APIs:



La documentación es esencial para que otros desarrolladores puedan entender cómo utilizar la API, 
qué recursos están disponibles, y cómo interactuar con ella correctamente.


Estos conceptos son fundamentales para desarrollar, 
consumir y trabajar con APIs de manera efectiva.