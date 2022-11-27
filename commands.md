# PHP COMMANDS

## ROUTES
```
Route::get('/product/{id}', function($id = 'all'){

    $data = [
        1 => 'Apple',
        2 => 'Orange',
        3 => 'Banana'
    ];  

    if ($id == 'all') {

        return $data;

    }else{

        return $data[$id] ?? "The Fruit is not in the basket";

    }


});
```

## How to assigen middleware to route
```
// * Route::get('/group-test', function(){

//* }) -> middleware('first');

```



## Middleware group
```
Route::prefix('admin')->group(function() {


    Route::get('/group-test2', function(){

        return 'Hello admin';

    });


});

Route::get('/group-test2', function(){

    return 'hello cahier';

});

```

## middleware creation 
```
php artisan make:middleware name
```

## Controller creation
```
php artisan make:controller name
```

## Resource controller creation
```
php artisan make:controller name --resource
```
# Model creation

## Model creation (name is singular)     
```
php artisan make:model name   
```
                                                                
## Model migration (name is plural)          
```
php artisan make:migration create_names_table
```
                                                                  
## Now Migrate table to database              
```
php artisan migrate    
```
## How to Update database tabels
```
php artisan migrate:fresh
```

## Reset all migration to default
```
php artisan migrate:reset
```

### Create model and migration in one command
```
php artisan make:model Product -m 
```

## Create seeder for static data
```
php artisan make:seeder StudentSeeder
```

## push Seeder static data to database
```
php artisan db:seed
```

## Create factory
```
php artisan make:factory name(StudentFactory)
```