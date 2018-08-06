<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Habitaciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <table  class="table">
        <thead>
            <th scope="col">numero de habitacion</th>
            <th scope="col">estado</th>
            <th scope="col">tipo</th>
            <th scope="col">precio</th>
            <th scope="col">acciones</th>
        </thead>
        @foreach ($habitaciones as $h)
    
    <tr> 
        <td>{{ $h->numeroHabitacion }}</td>
        <td>{{ $h->estado }}</td>
        <td>{{ $h->tipo }}</td>
        <td>{{ $h->precio }}</td>
        <td>{!! link_to_route('habitacion.edit', $title = 'editar', $parameters =$h->idhabitaciones, $attributes = ['class'=>'btn btn-primary']); !!}</td>
        

    </tr>                   
    @endforeach   
    </table>
</body>
</html>