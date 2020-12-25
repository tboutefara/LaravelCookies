# Using cookies with Laravel

## Aim

An example on the use of cookies with Laravel.

## Modifications

### View : index.blade.php

The unique view in the application. It will check if there is a defined cookie.
If it is the case, a personalized 'Hello' message will be displayed. If it's not the case,
a small 'subscribtion' form is displayed.

### View : secookie.blade.php

This view contains only a direction. Its goal is to apply cookie-related changes on the client side. It redirects in 1 sec to the main view (index.blade.php).

### MyController

Contain three functions for three actions :

- subscribe : creates the cookie, then attach it to the response (based on setcookie view),
- unsubscribe : distroy the cookie, then attach it to the response (based on setcookie view),
- index : create the display (the view)

### Route : web.php

The route is updated to point to the three function depending on the urls.

## Additional notes

Cookies are by default encrypter. To disable the encryption for a set of cookies, their keys
must be added to the 'except' array in the 'EncryptCookies.php' in 'App/Http/Middleware/'.
In this example, the 'name' cookie key was added to the 'except' array. 

## Last edit

Added bootstrap :

`composer require laravel/ui`

`php artisan ui bootstrap`

`npm install`

`npm run dev`

In the index.blade.php, the Bootstrap API can be included by :

`<link rel="stylesheet" href="{{ asset('css/app.css')  }}">`