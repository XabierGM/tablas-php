# Tablas con PHP

Velaquí un traballo de unha base de datos con tablas feito en php.

## Proceso

Comezamos creando a estructura de carpetas e arquivos que se pode ver nesta ligazón: [Demo](https://phpgrid.com/example/build-project-management-application-scratch/)

Logo creamos unha base de datos en phpmyadmin e lle inyectamos os datos das táboas que se poden atopar no tutorial anterior.

Unha vez dentro modificamos as seguintes liñas cos datos da nosa base creada (é decir, o seu nome e o usuario e contrasinal):

```bash
define('PHPGRID_DB_HOSTNAME','localhost');
define('PHPGRID_DB_USERNAME', 'root');
define('PHPGRID_DB_PASSWORD', '');
```

Co só iso podíamos ver a base de datos así:

![imaxe](https://phpgrid.com/wp-content/uploads/2017/05/pm-employee-screenshot-1-1024x594.png)

Finalmente, modifiquei o CSS como nos instruiron para personalizala e entender as particularidades de PHP. Pódense ver nas capturas adxuntas.


## Contribucións

Tanto o tutorial como o contido da tabla foi cedido por Richard de [phpgrid.com](phpgrid.com).

As fontes son parte do programa google fonts, cedidas con licenza estándar [Google Fonts](Fonts.google.com).

## Resultados

A base de datos é plenamente accesible tanto como manager como con empregado, e cada un ve correctamente só os datos que lle corresponden. Do mesmo xeito, as tablas compórtanse como deberían e poden estirarse e contraerse a vontade, e están totalmente enlazadas entre si.