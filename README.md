# domain-model
This is a domain model which is a vital part in adaptive e-learning system.
## Making it work
When you clone the git repo you must follow these steps to run the project:

### Create a Database locally
### Rename .env.example file to .env inside your project root and fill the database information. 
(windows won't let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
Open the console and cd your project root directory
##### Run ```composer install ```
##### Run ```composer dump-autoload```
##### Run ```php artisan key:generate```
##### Run ```php artisan migrate```
##### Run ```php artisan serve ```

