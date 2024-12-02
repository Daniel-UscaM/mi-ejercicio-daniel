<!-- # **Introducción a Herramientas Colaborativas con Git y GitHub**

### **Objetivo General**

Familiarizarse con el uso de Git para el control de versiones y GitHub como plataforma para trabajo colaborativo en proyectos de software.

---

https://youtu.be/DinilgacaWs?si=NRC5GaDEaahYV4WD

### **1. Conceptos Básicos**

1. **¿Qué es Git?**
    - Sistema de control de versiones distribuido.
    - Permite gestionar los cambios en un proyecto de manera eficiente.
    - Rastrea historiales, colabora y retrocede a versiones anteriores.
2. **¿Qué es GitHub?**
    - Plataforma basada en Git.
    - Facilita el trabajo colaborativo y el almacenamiento remoto de repositorios.

---

### **2. Instalación de Git**

- Descargar e instalar Git: https://git-scm.com/
- Configuración inicial:
    
    ```bash
    git config --global user.name "Tu Nombre"
    git config --global user.email "tuemail@example.com"
    ```
    

---

### **3. Comandos Básicos de Git**

| Comando | Descripción |
| --- | --- |
| `git init` | Inicializa un nuevo repositorio. |
| `git clone [URL]` | Clona un repositorio remoto. |
| `git status` | Muestra el estado de los archivos en el repositorio. |
| `git add [archivo]` | Añade cambios al área de preparación (staging). |
| `git commit -m "msg"` | Guarda los cambios con un mensaje. |
| `git log` | Muestra el historial de commits. |
| `git push` | Envía los cambios al repositorio remoto. |
| `git pull` | Trae y fusiona cambios del repositorio remoto. |

---

### **4. Flujos Básicos de Trabajo**

### **A. Crear un Repositorio Local y Sincronizar con GitHub**

1. Crear un repositorio en GitHub:
    - Accede a [GitHub](https://github.com/).
    - Haz clic en **"New repository"**.
    - Configura el repositorio (nombre, visibilidad, etc.).
2. Enlazar repositorio local con GitHub:
    
    ```bash
    git remote add origin [URL]
    git branch -M main
    git push -u origin main
    ```
    

### **B. Clonar un Proyecto Existente**

```bash
git clone [URL]
```

### **C. Flujo de Trabajo Básico**

1. **Realizar Cambios**:
    - Editar archivos en el proyecto.
2. **Preparar y Confirmar Cambios**:
    
    ```bash
    git add [archivo]
    git commit -m "Descripción del cambio"
    ```
    
3. **Enviar Cambios a GitHub**:
    
    ```bash
    git push
    ```
    

### **D. Trabajo en Equipo**

- Descargar cambios:
    
    ```bash
    git pull
    ```
    
- Resolver conflictos manualmente en caso de que ocurran.

---

### **5. Uso de Branches (Ramas)**

1. **Crear una Nueva Rama**:
    
    ```bash
    git branch [nombre-rama]
    git checkout [nombre-rama]
    git push -u origin [nombre-rama]
    ```
    
    *o usar*
    
    ```bash
    git switch -c [nombre-rama]
    ```
    
2. **Unir Ramas (Merge)**:
    
    ```bash
    git checkout main
    git merge [nombre-rama]
    ```
    
3. **Eliminar una Rama**:
    
    ```bash
    git branch -d [nombre-rama]
    ```
    

---

### **6. Herramientas en GitHub**

1. **Pull Requests (PRs)**:
    - Proceso para revisar y fusionar cambios entre ramas.
    - Permite discutir y aprobar cambios antes de integrarlos.
2. **Issues**:
    - Útil para registrar tareas, bugs o ideas.
3. **Actions**:
    - Automatización de flujos de trabajo (CI/CD).
4. **Wiki**:
    - Documentación colaborativa del proyecto.

---

### **7. Actividades Prácticas**

1. **Inicialización y Primer Commit**:
    - Crea un repositorio, realiza un commit y súbelo a GitHub.
2. **Trabajo Colaborativo**:
    - Clona un repositorio, crea una nueva rama, realiza cambios y envía un pull request.
3. **Resolución de Conflictos**:
    - Simula un conflicto editando el mismo archivo desde dos ramas diferentes.

---

### **Recursos Adicionales**

- [Git Cheatsheet](https://education.github.com/git-cheat-sheet-education.pdf)
- [Guía Oficial de Git](https://git-scm.com/doc)
- [GitHub Docs](https://docs.github.com/) -->



<!-- # **Ejercicio Práctico con Git y GitHub**

### **Objetivo:**

Crear un repositorio en GitHub, trabajar con ramas y manejar versiones del código.

---

### **Pasos a Seguir:**

### **1. Configuración Inicial**

1. Asegúrate de tener instalado [Git](https://git-scm.com/) en tu computadora.
2. Configura tu nombre y correo en Git:
    
    ```bash
    git config --global user.name "TuNombre"
    git config --global user.email "tuemail@example.com"
    ```
    

### **2. Crear un Repositorio en GitHub**

1. Ve a [GitHub](https://github.com/) e inicia sesión.
2. Crea un nuevo repositorio con el nombre: `mi-ejercicio-git`.
    - Marca la opción para inicializar con un `README.md`.

### **3. Clonar el Repositorio en tu PC**

1. Copia el enlace del repositorio.
2. Abre tu terminal o línea de comandos y ejecuta:
    
    ```bash
    git clone <URL_DE_TU_REPOSITORIO>
    cd mi-ejercicio-git
    ```
    

### **4. Crear una Rama Nueva**

1. Crea una rama nueva llamada `feature-inicial`:
    
    ```bash
    git checkout -b feature-inicial
    ```
    

### **5. Realizar Cambios en el Repositorio**

1. Crea un archivo `index.html` y añade este contenido: -->
    
    ```html
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
    ```
    
<!-- 2. Guarda el archivo.

### **6. Realizar un Commit**

1. Añade el archivo al área de staging:
    
    ```bash
    git add index.html
    ```
    
2. Realiza un commit con un mensaje descriptivo:
    
    ```bash
    git commit -m "Añadido index.html con contenido inicial"
    ```
    

### **7. Fusionar la Rama al Main**

1. Cambia a la rama principal:
    
    ```bash
    git checkout main
    ```
    
2. Fusiona la rama `feature-inicial` en `main`:
    
    ```bash
    git merge feature-inicial
    ```
    

### **8. Subir Cambios a GitHub**

1. Sube los cambios al repositorio remoto:
    
    ```bash
    git push origin main
    ```
    

### **9. Comprobar en GitHub**

1. Ve a tu repositorio en GitHub y verifica que el archivo `index.html` y los cambios estén reflejados.

---

### **Reto Adicional**

- Crea otra rama llamada `feature-estilos` donde agregues un archivo CSS para darle estilo al `index.html`.
- Realiza los mismos pasos: cambios, commit, merge y push. -->