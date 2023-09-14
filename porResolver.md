# funcionalidades

-controlar error cuando no existe el perfil y se intenta entrar
-como guardar y mostar fotografia
-error al cargar una img y al editarla
-mejor ccs similar al figma
-el correo electronico se podria editar???

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
