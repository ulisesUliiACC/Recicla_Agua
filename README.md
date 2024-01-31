# Recicla_Agua


## Configuracion del proyecto
_pasos para poder iniciar  proyecto  en laravel 10 

_para el usuario superAdmin
* comando para crear un usuario este esta definido dos usuarios super admin
```
 php artisan migrate:fresh --seed --seeder=AdminSeeder 
```
* comando para crear los pormisos este es importante para crear lo permisos para asignar
los roles 
```
 php artisan db:seed --class=SeederTablaPermisos 
```

