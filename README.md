# Laravel Phonebook

## Requirements

[Laravel requirements](https://laravel.com/docs/7.x/installation#server-requirements)

## Installation

Clone the project:

```
git clone https://github.com/nicolas-costa/laravel-phonebook.git
```

Get into project's folder: 
```
cd laravel-phonebook
```

Install dependencies
```
composer install
```
Copy the file .env.example renaming it as .env and make the due changes relevant to your environment   
(ex. database credentials)    

Generate the app key  

```
php artisan key:generate
```
Run migrations 

```
php artisan migrate
```

Install template's assets
```
npm install
```

Compile the assets
```
npm run dev
```

Run the seeders

```
php artisan db:seed
```

Run laravel server 

```
php artisan serve
```

Access http://localhost:8000   

```
u: admin@phonebook.com
p: 123456789
```

### Tests


Copy the .env.example file renaming it as .env.testing and make the due changes relevant to your environment    
(ex. database credentials)  

* Windows
```
    php vendor\bin\phpunit
```

## License 
WTFPL

## Credits 
Nícolas Costa



