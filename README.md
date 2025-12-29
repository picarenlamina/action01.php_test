Aplicación de ejemplo en **PHP puro + HTML** con **tests funcionales** y **CI mediante GitHub Actions**.

La aplicación muestra una calculadora web sencilla que suma dos números introducidos por el usuario.


-- Instalacion dependencias
#composer install

-- Servidor PHP embebido
#php -S localhost:8000 -t src

-- Url
http://localhost:8000/index.php



--Ejecucion test 
#php vendor/bin/phpunit

--Ejecucion linter
#vendor\bin\phpcs.bat --standard=PSR12 src



# 🚀 Pipeline Maestro – CI/CD

Este repositorio utiliza un pipeline maestro que ejecuta tres workflows independientes:

1. **Linter** → `linterPHP.yml`  
2. **Tests** → `tests.yml`  
3. **Deploy** → `deploySSH_SCP.yml`  

El pipeline maestro los ejecuta en orden usando `workflow_dispatch`.

---

## 📊 Diagrama del Pipeline (Mermaid)

```mermaid
flowchart TD

    L[Linter]:::linter --> T[Tests]:::tests
    T --> D[Deploy]:::deploy

    classDef linter fill:#ffcc00,stroke:#b38f00,stroke-width:2px,color:#000
    classDef tests fill:#66ccff,stroke:#006699,stroke-width:2px,color:#000
    classDef deploy fill:#99e699,stroke:#339933,stroke-width:2px,color:#000




