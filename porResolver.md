# funcionalidades

-porque base de datos no esta guardando la secuencia de id correcta?
-validar cuando no encuentra conexion a la base de datos
-validar que no guarde correos en blanco
-corregir cuando los campos se actualizan no me cierre si no se a actualizado el correo
-controlar error cuando no existe el perfil y se intenta entrar
-como guardar y mostar fotografia
-error al cargar una img y al editarla
-mejor ccs similar al figma
-el correo electronico se podria editar???
-validar cuando las imagenes superan la capacidad tamaño
-validar numero de caracters a mostrar en input bio en views show
-boton back alinear a la derecha
-lineas de vista show

# opcionales

-modo oscuro
-diseño responsive
-utilizar bootstrap 5


# actividad base de datos

Se requiere diseñar una base de datos relacional para gestionar la información de los asuntos manejados por un bufete de abogados. Cada asunto se identifica mediante un número de expediente único y está asociado a un cliente específico. La base de datos debe incluir detalles como el período del asunto (fecha de inicio y fecha de archivo o finalización), su estado actual (como en trámite o archivado), así como la información personal del cliente, que incluye el DNI, nombre, dirección, entre otros datos relevantes. Además, algunos asuntos pueden ser manejados por uno o varios abogados, y se requiere almacenar también los detalles personales de estos profesionales.


#asuntos

nro_expediente
fecha_inicio
fecha_finalizacion
estado_id
cliente_dni
abogado_dni


#estado_asunto

-tramite
-archivado


#cliente

dni
nombre
direccion
otros

#abogado

dni
nombre
direccion
otros
