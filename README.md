# EventPass - El programa de gestión de eventos (Versión alumnos)

Este programa está hecho para gestionar eventos de forma dinámica y comodá desde una plataforma basada en html, css, js y php, trabajdo con Laravel 13, que nos permite mantener una estructura comóda de trabajo más fluido.

## Ventanas de administración del programa

### Gestionar alumnos
Desde esta ventana se pueden gestionar los alumnos que tenemos en la base de datos que está vinculada a nuestra página, desde ahí se puede ver la lista de alumnos que tenemos, una barra de buscador para buscar el alumno, y dentro de la lista tenemos los alumnos, con su nombre, DNI/NIE, y al final del objeto su puntaje.
Justo debajo de la lista que mostrará máximo 4 alumnos, aparecerá una ficha de alumno abajo de la lista, con la información más detallada, incluyendo el correo, QR personal y invitaciones disponibles.

### Dar de alta o importar alumnos
En esta ventana podremos añadir a los alumnos dentro de la base de datos, nada más entrar un nuestra ventana, aparecerá una mini ventana que nos dejará crear un alumno de forma manual, con el nombre, apellido, DNI / NIE, correo electrónico, contraseña inicial, invitaciones y la puntuación inicial (además de un pequeño recordatorio de que el QR personal se generará de forma automática), y hay un botón debajo para crear al alumno.

Luego más abajo nos da la opción de importar alumnos a través de un archivo .csv (hoja de calculo), y no solo eso, si no que nos deja descargar una plantilla de CSV, después de estos 2 botones, sale un pequeño texto con las columnas requeridas de la plantilla,además a la hora de subir un archivo, hay una pestaña de previsualización donde podemos ver los errores que hay en el archivo y nos dice cual es el fallo, y nos da la opción de volver a validar los alumnos, y hay un botón que se desmarcará cuando el CSV esté correcto.

Y por último de esta pestaña, nos da la opción de eliminar cualquier alumno de la lista que tenemos en la base de datos, si selecionamos un alumno, nos salta un pequeño texto en rojo a modo de advertencia que nos dice si queremos borrar a ese usuario, y abajo salen 2 botones, uno donde nos deja cancelar la selección, y otro que nos deja borrar al alumno.

### Consultar invitaciones

En esta ventana podemos ver las invitaciones que se han hecho y quién las ha realizado, y nos muestra los detalles de la invitación, nos muestra quién ha invitado y sus invitaciones disponibles, y debajo la persona que han invitado.

### Gestionar actos

Dentro de esta ventana, nos volverá a mostrar otra lista con un buscador que máximo nos muestra 3 eventos de los creados, de ahi nos muestra los actos, fecha, hora del evento, y los puntos que da, además que nos muestra si el evento está activo o inactivo.
Encima de la lista nos sale un botón para añadir un acto, en caso de seleccionar un evento, saldrá un submenú debajo que nos permite editar el evento, y por ende todos sus campos como el nombre, descripción, Ubicación, fecha, hora de inicio / finalización, la puntuación y si está activo o no. Luego nos dejará elejir si queremos guardar los cambios o queremos eliminar el evento.

### Gestionar puntos de control

Aquí dentro, nos deja ver todos los puntos de control de cada tipo de eventos tenemos, por ejemplo puerta principal, el acceso al auditorio, entre muchos otros, además que nos deja ver por sublistas de cada sección cuantos registros tiene cada punto de control, y si se selecciona uno, nos deja cambiar el nombre del evento.

Debajo de la sección de cambio de nombre nos dejará añadir un punto de control, que nos deja poner el nombre del punto, y el registro donde irá.

Y justo debajo de la sección de añadir un punto, tenemos una sección para eliminar un punto de control.

### Consultar registros de acceso

Desde esta página podemos filtrar los accesos por evento, fecha, resultados o punto de control, y nos muestra los registros que se han hecho en base a los varemos de búsqueda, y al pulsar en un registro, nos muestra información detalla del regsitro.

### Consultar asistentes

En esta ventana podemos consultar los asistentes que tenemos guardados, las personas que hay registradas, las validaciones, los alumnos, los invitados de cada acto, justo debajo de estos grandes números, nos salen los asistentes que han asistido al evento y a que hora han fichado, nos deja ver los detalles del asistente, y nos deja ver si su validación al evento ha sido correcta o incorrecta.

### Consultar estadisticas

En esta pestaña podemos ver varias secciones, podemos consultar si queremos ver de todos los eventos o evento por evento, nos muestra las personas e invitaciones, y nos hace un calculo de cuantos invitados hay de todas las personas que han asistido, y abajo nos muestra una fracción de cuantos invitados hay, y nos muestra del total de alumnos, todas las invitaciones y cuantos se han invitado, nos deja ver también la participación por acto, el numero de personas u registros, y los resultados de validación, y por último sale cuantos registros se han hecho en cada punto de control, por ejemplo puerta, acceso auditorio, vestíbulo, etc.

### Consultar ranking

En esta pestaña se muestra la clase con más puntaje, y luego un mini ranking con los alumnos con más puntos, si se selecciona al alumno con más puntos se ve la información, puntaje, y la clase a la que pertenece.

### Configuración

En nuestra pestaña de configuración, podemos ver la información de administrador de la página, nos deja cambiar la contraseña de la cuenta de administrador, pidiendo la contraseña antigua, y un botón donde podemos guardar la información, cambiar el idioma de preferencia, y cerrar la sesión de administración.

## Archivos de inicio de sesión de alumno, usuarios e invitados.

### Inició de sesión
Nuestra ventana de inicio de sesión, cuenta con una ventana simple donde según que se introduzca, podremos entrar como Administrador de la página, o como un alumno, tambíen, tenemos un pequeño botón para restablecer la contraseña, o para contactar con el soporte de la página.

### 
