# Deploment document Veilingsite

> $ stands for code you have to put into a terminal/command line interface

## ++ Minimal requirements ++

- **php** globally installed AND php version >=7.0.0

- **composer** globally installed

- **git** globally installed


## ++ Commands to execute ++

- run: $ git clone https://github.com/RobLui/web_development_2.git

- change directory: $ cd web_development_2/veilingsite

- run: $ composer install

- copy paste .env.example file into .env

- create a database in your own environment (use phpmyadmin or other)

- change into appropriate values in the .env file:
	- DB_DATABASE = **homestead <- change me**
	- DB_USERNAME = **homestead <- change me**
	- DB_PASSWORD = **secret <- change me**

- run: $ php artisan migrate

## Next?

- Wanna test if the site works well? run: $ localhost -S localhost:8000

- go to the site on your localhost by putting localhost:8000/public into the browser

- Enjoy the site!

