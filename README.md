## Uso
Clonar, crear un archivo .env, y ejecutar
* `composer install`
* `php artisan keys:generate`
* `php artisan migrate`
* `php artisan serve`
* `php artisan jwt:secret`


Para crear un usuario, ejecutar `php artisan tinker` y ahi adentro:

`User::create(["name"=> "user","password"=>bcrypt("12345678")]);`

Luego `php artisan serve`, y probar con este curl (o como venga):

```bash
curl --request POST \
  --url http://localhost:8000/api/auth/login \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --data '{
    "name" : "frontend",
    "password" : "12345678"
  }'
  ```

## Consideraciones

La tabla de usuarios no se llama `users`, sino que `api_users`. Esto permite en otro proyecto usar la tabla users con la misma base de datos, por ejemplo.