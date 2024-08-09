## What is this?

Just a empty Laravel proyect, with JWT installed and configured.

Clone, make a .env file, and then:
* `composer install`
* `php artisan keys:generate`
* `php artisan migrate`
* `php artisan serve`
* `php artisan jwt:secret`


To create an User for testing, if you still don't know how to do it run this crap on Tinker (`php artisan tinker`):

`User::create(["name"=> "larainfo","email"=>"larainfo@gmail.com","password"=>bcrypt("123456")]);`

Then, do some `php artisan serve` magic, and test this curl:

```
curl --request POST \
  --url http://localhost:8000/api/auth/login \
  --header 'Authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTY2NzE4ODk5NiwiZXhwIjoxNjY3MTkyNTk2LCJuYmYiOjE2NjcxODg5OTYsImp0aSI6IksyMkNQQmxiejlEZHR6cWQiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.dMrJGOT5EbBIvqd-Ac7FvYXAO92JHgERKyzb2cdPYfw' \
  --header 'Content-Type: multipart/form-data' \
  --form name=larainfo \
  --form password=123456
  ```