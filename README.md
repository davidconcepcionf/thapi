# Tower House Studio API Test

This is the result of the questions 7 and 8 of the test

The code was written on php, under Laravel 5.7 framework

To try it, you have to install php 7

For practical purposes, and without having a complete server configured

Just execute in the root of the project this command to start the PHP's built-in development server of Laravel 

`php artisan serve`

Once the server starts, open your browser and enter this link

**http://127.0.0.1:8000/front**

You can try the endpoint directly making a POST request from Postman to this url

**127.0.0.1:8000/api/calculator**

Must be a content-type application/json and have 2 params:

* values: array of 2 numbers 

* operations: sum|subtraction|division|multiplication as string

Example:

```
{
	"values":[2,3],
	"operation":"sum"
}
```

### Enjoy!