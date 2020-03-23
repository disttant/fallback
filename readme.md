## About Fallback

Fallback is a microservice that was created to catch all requests
when another service fails, for example, into kubernetes as
default service to catch all traffic when ingress controller 
can NOT route to a declared ingress resource


## Features
There are defined paths for most of the common HTTP error codes
* path: "/" show 404 error page
* path: "/401"
* path: "/403"
* path: "/404"
* path: "/419"
* path: "/429"
* path: "/500"
* path: "/503"


## Framework info (Mar/2020)
* Laravel 7


## Dependencies
* PHP >= 7.2.0
* BCMath PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PDO PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension


## Preparing

## Installing for production

#### 1. The hard way

0. Install PHP, PHP extensions, Composer, Git
1. Clone the repository to a temporary folder
2. Copy composer.json and composer.lock to the final location
3. Go to that folder: 
```
cd /final/location
```
4. Execute: 
```
composer install --no-dev --no-scripts
```
5. Move the temporary folder's content to the final location
6. Re-build the autoload file executing: 
```
composer dump-autoload
```
7. Configure *.env* file
8. Create your DB tables executing: 
```
php artisan migrate
```
9. Give the right permissions to the files: 
```
find /final/location -type f -exec chmod 644 {} \;
find /final/location -type d -exec chmod 755 {} \;
```
10. Configure the web server (like Nginx) to route all the requests 
to public/index.php



#### 2. The easy way (testing mode)
```
0. Install Docker
1. Clone the repository
2. Build the image with the Dockerfile included
3. Upload the image to a repository
4. Use the image with Compose or Kubernetes
   * Set all the environment variables Laravel uses
     + APP_VENDOR
     + APP_NAME
     + [...]

   * Mount /var/www in a volume
   * Mount /var/www/storage into a volume
```

Now, your container is listening on port 9000 (PHP_FPM)


You just must configure an NGINX container in the way 
Laravel documentation explains to use the app


## Security Vulnerabilities

If you discover security vulnerabilities, please send 
an e-mail to Alby Hern�ndez [me@achetronic.com]. 

All security vulnerabilities will 
be fixed as soon as we notice them.

## License
This is privative software and it is NOT allowed to redistribute
any copy neither partial not complete.