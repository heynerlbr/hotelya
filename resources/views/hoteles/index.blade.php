<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hoteles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/hoteles.css">
</head>
<body>
    <?php $message=Session::get('message') ?>
    @if($message=='store')
    <div class="alert alert-success" role="alert">
           se creo exitosamente el hotel
          </div>
    @endif
    <section id="contenedor">
       <header>bienvenidos  al hotel {{$habitaciones[0]->'nombre'}}</header>
        <section id="hotel-control">
            @foreach ($habitaciones as $h)
                <div id="habitacion"><button type="button" class="btn btn-outline-primary"><img src="puerta.jpg" height="100" width="100" > {{ $h->numeroHabitacion }}--{{ $h->estado }}</button></div>                
            @endforeach            
        </section>
    </section>
    <hr>
    
</body>
</html>