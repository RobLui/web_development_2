# Deploment document Veilingsite

> $ stands for code you have to put into a terminal/command line interface

## ++ Minimal requirements ++

- **php** globally installed AND php version >=7.0.0

- **composer** globally installed

- **git** globally installed


## ++ Commands to execute in terminal/cmd ++

- run cloner: 

```
$ git clone https://github.com/RobLui/web_development_2.git
```

- change directory: 

```
$ cd web_development_2/veilingsite
```

- run installer: 

```
$ composer install
```

- copy paste .env.example file into .env, can be done in the terminal with command: 

```
$ cp .env.example .env
```

- generate application key

```
$ php artisan key:generate
```

- create a database in your own environment (use phpmyadmin or other)

- change these values into your own in the .env file
	- DB_DATABASE = **homestead <- change me**
	- DB_USERNAME = **homestead <- change me**
	- DB_PASSWORD = **secret <- change me**

- run migrations: 

```
$ php artisan migrate
```

- index search tables for "items":
```
$ php artisan index:table items lot_id,category,auction_title,year,description,condition,origin
```


## Next?

- Wanna test if the site works well? run: 

```
$ php -S localhost:8000/public
```

- go to the site on your localhost by putting localhost:8000 into the browser

- Enjoy the site!


## Extra

- Wanna get rid of the /public in the url easy? (not available in the localhost:8000/public mode)

	- Create a **.htaccess file** into the root directory of your clone (this should be: web_development_2/veilingsite/..
	- Put these lines into the file:

```
<IfModule mod_rewrite.c>
	RewriteEngine On
	RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```