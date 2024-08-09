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
  --header 'Content-Type: application/json' \
  --header 'Accept: application/json' \
  -d '{
    "name" : "user",
    "password : "12345678"
  }'
  ```