<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adios</title>

        

        
    </head>
    <body>
	
	
        
        <p>Adios</p> <?php if($_GET)
    echo  $_GET['nombre']. " tienes " .$_GET['edad']; ?>

	

    </body>
</html>
