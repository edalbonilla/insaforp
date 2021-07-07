# README #

levantar aplicacion en modo local modo desarrollo.

### Back End ###

* Crear base de datos  
* Configurar archivo .env con el servidor y la base creada 
* Ejecutar el comando php artisan migrate para crear los modelos de base de datos
* Ejucutar el comando php artisan serve

### Front End ###

* Configurar la ruta del BE en el archivo main.ts si es que cambia la ruta de localhost axios.defaults.baseURL = 'http://localhost:8000/api/';
* ejecutar el comando npm run serve


### APIS ###+--------+-----------+---------------------------------------+-------------------------+--------------------------------------------------------+------------+
| Domain | Method    | URI                                   | Name                    | Action                                                 | Middleware |
+--------+-----------+---------------------------------------+-------------------------+--------------------------------------------------------+------------+
|        | GET|HEAD  | /                                     |                         | Closure                                                | web        |
|        | GET|HEAD  | api/calendarizacion                   | calendarizacion.index   | App\Http\Controllers\CalendarizacionController@index   | api        |
|        | POST      | api/calendarizacion                   | calendarizacion.store   | App\Http\Controllers\CalendarizacionController@store   | api        |
|        | DELETE    | api/calendarizacion/{calendarizacion} | calendarizacion.destroy | App\Http\Controllers\CalendarizacionController@destroy | api        |
|        | PUT|PATCH | api/calendarizacion/{calendarizacion} | calendarizacion.update  | App\Http\Controllers\CalendarizacionController@update  | api        |
|        | GET|HEAD  | api/calendarizacion/{calendarizacion} | calendarizacion.show    | App\Http\Controllers\CalendarizacionController@show    | api        |
|        | GET|HEAD  | api/docentes                          | docentes.index          | App\Http\Controllers\DocenteController@index           | api        |
|        | POST      | api/docentes                          | docentes.store          | App\Http\Controllers\DocenteController@store           | api        |
|        | GET|HEAD  | api/docentes/{docente}                | docentes.show           | App\Http\Controllers\DocenteController@show            | api        |
|        | PUT|PATCH | api/docentes/{docente}                | docentes.update         | App\Http\Controllers\DocenteController@update          | api        |
|        | DELETE    | api/docentes/{docente}                | docentes.destroy        | App\Http\Controllers\DocenteController@destroy         | api        |
|        | GET|HEAD  | api/eventos                           | eventos.index           | App\Http\Controllers\EventoController@index            | api        |
|        | POST      | api/eventos                           | eventos.store           | App\Http\Controllers\EventoController@store            | api        |
|        | DELETE    | api/eventos/{evento}                  | eventos.destroy         | App\Http\Controllers\EventoController@destroy          | api        |
|        | PUT|PATCH | api/eventos/{evento}                  | eventos.update          | App\Http\Controllers\EventoController@update           | api        |
|        | GET|HEAD  | api/eventos/{evento}                  | eventos.show            | App\Http\Controllers\EventoController@show             | api        |
|        | POST      | api/programas                         | programas.store         | App\Http\Controllers\ProgramaController@store          | api        |
|        | GET|HEAD  | api/programas                         | programas.index         | App\Http\Controllers\ProgramaController@index          | api        |
|        | GET|HEAD  | api/programas/{programa}              | programas.show          | App\Http\Controllers\ProgramaController@show           | api        |
|        | PUT|PATCH | api/programas/{programa}              | programas.update        | App\Http\Controllers\ProgramaController@update         | api        |
|        | DELETE    | api/programas/{programa}              | programas.destroy       | App\Http\Controllers\ProgramaController@destroy        | api        |
+--------+-----------+---------------------------------------+-------------------------+--------------------------------------------------------+------------+
