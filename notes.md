## 1

**Route Binding** 

**wild cards** names have to match variables names, unless overwritten in the `RouteServiceProvider.php`.

## 2

`('throttle:#,min');` limits request to a `#` per `min`. `throttle` by default is 1 min and 60 requests.

`throttle` middleware `app/Http/Kernel` follow the `ThrottleRequests` link to see the throttle's class default > follow the link to `rate_limiter` class