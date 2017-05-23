## 1

**Route Binding** 

**wild cards** names have to match variables names, unless overwritten in the `RouteServiceProvider.php`.

## 2

`('throttle:#,min');` limits request to a `#` per `min`. `throttle` by default is 1 min and 60 requests.

`throttle` middleware `app/Http/Kernel` follow the `ThrottleRequests` link to see the throttle's class default > follow the link to `rate_limiter` class

## 3

`php artisan make:auth` Meant to be used at the begining of the project.  Preferably at the start of the project. -This will create `HomeController` and it will change the `routes` (web.php) files.

`LoginController` has a redirect back to home after sign in that can be changed to whatever view.

the `HomeController` adds auth through middleware to all of its routes.

`Auth::routes();` in the `web.php` file is larvel's way of tucking away all of its routes in one place.  Remember that the command `php artisan route:list` will name all the routes in our app.


the command (`php artisan make:auth`) also creates the views with all of the stuff the login and registration forms need.

## 5

Authentication: `config/auth.php` Laravel offers _session_ and _token_ based authentication.
				`Illuminare/Auth/SessionGuard` contains the method that get called when calling `Auth::user()`.

1. create a route.

2. 