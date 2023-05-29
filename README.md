# Calculadora Blendio Raul Ruiz

Este repositorio contiene un proyeco en PHP utilizando el framework de Laravel, el cual permite calcular diferentes operaciones aritmericas con dos operandos. 


## Requisitos previos

Antes de comenzar a utilizar este proyecto, asegúrate de tener los siguientes requisitos previos instalados en tu sistema:

- PHP >= 8.1
- Laravel 10
- Docker Compose


# Comandos de ejecución básicos para el ejercicio

## Ejecución de pruebas automaticas
Ejecuta automaticamente todas las pruebas creadas
>php artisan test

## Comando local
> php artisan operations {operador1} {operador2} {operacion}

## Despliegue de Laravel del servidor
> ./vendor/bin/sail up

## Endpoint disponible
> /{operacion}/{numero1}/{numero2}