<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
	
<style>
	.title {
                font-size: 84px;
            }        
	
</style>
   
 </head>
    <body>
        

            
                <div class="title">
                    <a href="./adios">Hola Mundo!!</a>
                </div>

		<form action="./adios" method="GET" name="formulario">
			Introduce tu nombre: <input name="nombre" type="text" /> 
			Introduce tu edad: <input name="edad" type="number" />
			<input type="submit" value="Enviar por GET"  />
		</form>
		
		<form action="./adiospost" method="POST" name="formulario">
			{{ csrf_field() }}
			Introduce tu nombre: <input name="nombre" type="text" value="pedro"/> 
			Introduce tu edad: <input name="edad" type="number" value=4 />
			<input type="submit" value="Enviar por POST"  />
		</form>


                
            
        
    </body>
</html>
