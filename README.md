# 📘 Guía rápida: Trabajando con repositorios de GitHub en tu PC

Este documento explica cómo clonar un repositorio desde GitHub, cómo agregar/mover archivos dentro del repositorio clonado en tu PC, y cómo subir los cambios de vuelta a GitHub.

---

## 🔹 1. Clonar un repositorio desde GitHub

1. Ingresa a tu repositorio en GitHub.
2. Haz clic en el botón **<> Code**.
3. Copia la **URL HTTPS** (ejemplo: `https://github.com/usuario/nombre-repo.git`).
4. Abre **Git Bash** en la carpeta donde quieras clonar tu proyecto.
5. Ejecuta el comando:

```bash
git clone https://github.com/usuario/nombre-repo.git
```

✅ Esto creará una carpeta con el nombre del repositorio en tu PC.

## 🔹 2. Mover o agregar archivos a tu repositorio clonado

Una vez clonado, puedes mover o copiar archivos/carpetas desde cualquier ubicación de tu PC al repositorio clonado usando el Explorador de archivos o comandos de terminal.

📂 Ejemplo:

C:\Users\TuUsuario\Documentos\nombre-repo

👉 Todo lo que pongas dentro de esa carpeta será parte de tu repositorio.

## 🔹 3. Subir cambios a GitHub (push)

Cada vez que modifiques, agregues o borres archivos, sigue estos pasos en Git Bash dentro de la carpeta del repo:

1. Verificar los cambios realizados:
```bash
git status
```
2. Agregar los archivos modificados o nuevos:
```bash
git add .
```
(. agrega todos los cambios; también puedes especificar un archivo concreto: git add archivo.txt)  
3. Guardar los cambios con un mensaje descriptivo:
```bash
git commit -m "Agregué nuevos archivos y carpetas"
```
4. Enviar los cambios a GitHub:
```bash
git push origin main
```
(⚠️ Si tu rama principal se llama master en lugar de main, usa git push origin master)

## 4. Actualizar tu repo local (pull)

Si realizaste cambios directamente en GitHub (por ejemplo, editaste un archivo online), debes sincronizar tu repositorio local con el remoto:
```bash
git pull origin main
```
🚀 Resumen de comandos más usados
- Clonar repositorio → git clone URL
- Ver estado → git status
- Agregar cambios → git add .
- Confirmar cambios → git commit -m "mensaje"
- Subir cambios a GitHub → git push origin main
- Actualizar repo local → git pull origin main
