# Portafolio Flotante Multiplataforma (PFM)

## Descripción
El Portafolio Flotante Multiplataforma (PFM) es una aplicación diseñada para simplificar y automatizar el proceso de combinar múltiples documentos de diferentes formatos (Excel, Word, PDF) en un solo archivo estructurado. 
Este sistema está orientado a facilitar la gestión de documentos, permitiendo a los usuarios combinar información de manera eficiente y organizada, lo que es especialmente útil en entornos de trabajo que manejan grandes volúmenes de datos.

## Características Principales
- **Interfaz Multiplataforma:** Accesible desde dispositivos móviles y de escritorio.
- **Informes Detallados:** Generación de reportes que permiten el análisis de la evolución de las inversiones.
- **Configuraciones Personalizadas:** Posibilidad de personalizar la plataforma según las necesidades específicas de cada entidad.

## Instalación

### Requisitos Previos
Antes de comenzar, asegúrate de tener instalados:
- [En proceso de edicion\]
- [Node.js](https://nodejs.org/) (versión recomendada: 14 o superior)
- [MySQL](https://www.mysql.com/) para la gestión de base de datos
- [Git](https://git-scm.com/) para clonar el repositorio

### Pasos de Instalación

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/pfm.git  [En proceso de Edicion]
   cd pfm
nstalar las dependencias: Usa npm o yarn para instalar las dependencias del proyecto:
npm install requeriments.txt
Configurar las variables de entorno: Crea un archivo .env en el directorio raíz del proyecto y añade las siguientes variables:
DB_HOST=localhost
DB_USER=tu_usuario
DB_PASSWORD=tu_contraseña
DB_NAME=pfm_db
Ejecutar migraciones de la base de datos: Para crear la estructura de la base de datos, ejecuta:
npx sequelize db:migrate
Iniciar el servidor: Para ejecutar la aplicación en modo desarrollo, utiliza:
npm start
Acceder a la aplicación: Abre tu navegador y dirígete a http://localhost:3000 para utilizar la plataforma.
Manual de Usuario
Consulta nuestro Manual de Usuario para obtener información sobre cómo utilizar todas las funcionalidades de la aplicación.
Estructura del Proyecto [En proceso de edicion]
/PFM
│
├── /assets                    # Recursos estáticos para la página web
│   ├── /css
│   │    └── styles.css        # Estilos CSS para la página
│   ├── /images
│   │    └── logo.png          # Imágenes (si se necesitan, como logos o banners)
│   └── /js
│        └── script.js         # Código JavaScript para interactividad o validaciones
│
├── /backend                   # Lógica del servidor y scripts
│   ├── /php
│   │    ├── db.php            # Conexión a la base de datos
│   │    ├── login.php         # Lógica para inicio de sesión
│   │    └── registro.php      # Lógica para registro de usuarios
│   ├── /python
│   │    ├── aja.py            # Script Python para alguna funcionalidad específica
│   │    └── requirements.txt  # Dependencias necesarias para Python
│
├── /views                     # Páginas web (frontend)
│   ├── index.html             # Página principal de la aplicación con información
│   ├── sesion.html            # Página de inicio de sesión
│   └── registro.html          # Página de registro de usuarios
│
├── /templates                 # Plantillas para la generación de contenido
│   └── archivo_plantilla_mod.xlsx  # Plantillas para Excel u otros formatos
│
└── README.md                  # Documentación opcional para describir el proyecto

Contribuir
Si deseas colaborar con el proyecto, sigue estos pasos:
Haz un fork del proyecto.
Crea una nueva rama para tus cambios:
git checkout -b nombre-de-la-rama
Realiza tus cambios y haz commit:
git commit -m "Descripción de los cambios"
Sube tus cambios a tu repositorio:
git push origin nombre-de-la-rama
Abre un Pull Request.
Reporte de Errores
Si encuentras algún error, por favor crea un issue en el repositorio de GitHub proporcionando:
Descripción del problema.
Pasos para reproducir el error.
Sistema operativo y navegador utilizado.
Capturas de pantalla si es necesario.



https://app.gitbook.com/invite/KEpeU4FsinqPJ40cOsbP/d3IGnhd7PjIg5QFq9K58