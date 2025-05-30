# Documentación de Modelos

Este proyecto contiene modelos para interactuar con las tablas de la base de datos en MySQL. A continuación se describen los modelos y sus respectivas propiedades.

## Modelos

### Alumnos
- **Clase**: `Alumnos`
- **Tabla**: `alumnos`
- **Propiedades**:
  - `alumno_id`
  - `alumno_numero_control`
  - `alumno_password`
  - `alumno_rol`
  - `alumno_ultimo_acceso`
  - `alumno_fecha_registro`

### AlumnosInfoAcademica
- **Clase**: `AlumnosInfoAcademica`
- **Tabla**: `alumnos_info_academica`
- **Propiedades**:
  - `academica_id`
  - `academica_alumno_id`
  - `academica_numero_control`
  - `academica_carrera_id`
  - `academica_semestre`
  - `academica_periodo`
  - `academica_promedio`

### AlumnosPagos
- **Clase**: `AlumnosPagos`
- **Tabla**: `alumnos_pagos`
- **Propiedades**:
  - `pagos_id`
  - `pagos_alumno_id`
  - `pagos_numero_control`
  - `pagos_nombre`
  - `pagos_apellido`
  - `pagos_carrera`
  - `pagos_semestre`
  - `pagos_periodo`
  - `pagos_realizado`
  - `pagos_descuento`
  - `pagos_total`

### Aspirantes
- **Clase**: `Aspirantes`
- **Tabla**: `aspirantes`
- **Propiedades**:
  - `aspirante_id`
  - `aspirante_apellido_paterno`
  - `aspirante_apellido_materno`
  - `aspirante_nombre`
  - `aspirante_fecha_nacimiento`
  - `aspirante_sexo`
  - `aspirante_curp`
  - `aspirante_celular`
  - `aspirante_email`
  - `aspirante_nip`

### AspirantesSocioeconomicos
- **Clase**: `AspirantesSocioeconomicos`
- **Tabla**: `aspirantes_socioeconomicos`
- **Propiedades**:
  - `id`
  - `personal_apellido_paterno`
  - `personal_apellido_materno`
  - `personal_nombre`
  - `personal_fecha_nacimiento`
  - `personal_genero`
  - `personal_curp`
  - `personal_nacionalidad`
  - `personal_telefono`
  - `personal_correo`
  - (y muchas más)

### CarrerasInstitucion
- **Clase**: `CarrerasInstitucion`
- **Tabla**: `carreras_institucion`
- **Propiedades**:
  - `carrera_id`
  - `carrera_clave`
  - `carrera_nombre_completo`

### Personal
- **Clase**: `Personal`
- **Tabla**: `personal`
- **Propiedades**:
  - `personal_id`
  - `personal_usuario`
  - `personal_password`
  - `personal_rol`
  - `personal_activo`
  - `personal_ultimo_acceso`
  - `personal_fecha_registro`

## Configuración de Conexión

Para utilizar estos modelos, asegúrese de que la configuración de conexión a la base de datos en el archivo `docker-compose.yml` esté correctamente configurada. Los modelos se conectarán a la base de datos `instituto_tecnologico` utilizando las credenciales especificadas.

## Uso

Para utilizar los modelos, simplemente inclúyalos en su controlador o en la lógica de negocio donde sea necesario. Asegúrese de que la conexión a la base de datos esté activa antes de realizar cualquier operación.