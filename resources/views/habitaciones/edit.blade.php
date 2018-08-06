<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>editar habitaciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
        {!! Form::model($habitacion,['route'=>['habitacion.update',$habitacion->idhabitaciones],'method'=>'PUT']) !!}
        <div class="form-group">
                {!! Form::label('numero Habitacion:') !!}
                {!!Form::text('numeroHabitacion',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                {!! Form::label('Precio:') !!}
                {!!Form::text('precio',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                {!! Form::label('Estado:') !!}               
                {!!Form::select('estado', ['libre' => 'libre', 'ocupado' => 'ocupado'], 'libre',['class'=>'form-control']);!!}
        </div>
        <div class="form-group">
                {!! Form::label('Tipo:') !!}
                {!!Form::select('tipo', ['ventilador' => 'ventilador', 'aire' => 'aire'], 'ventilador',['class'=>'form-control']);!!}
        </div>
        
        
        {!! Form::submit('Actualizar Datos', ['class'=>'btn btn-primary']) !!}
        
        {!! Form::close() !!}
</body>
</html>