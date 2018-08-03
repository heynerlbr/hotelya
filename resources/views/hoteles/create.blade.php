<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <h1>hola create</h1>

    
    {!! Form::open(['route'=>'hotel.store','method'=>'POST']) !!}
    <div class="form-group">
            {!! Form::label('Nombre:') !!}
            {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'escriba el nombre del hotel'])!!}
    </div>
    <div class="form-group">
            {!! Form::label('Departamento:') !!}
            {!!Form::text('departamento',null,['class'=>'form-control','placeholder'=>'escriba el Departamento'])!!}
    </div>
    <div class="form-group">
            {!! Form::label('Ciudad:') !!}
            {!!Form::text('ciudad',null,['class'=>'form-control','placeholder'=>'escriba la ciudad'])!!}
    </div>
    <div class="form-group">
            {!! Form::label('Direccion:') !!}
            {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'escriba la direccion del hotel'])!!}
    </div>
    <div class="form-group">
            {!! Form::label('Numero habitaciones:') !!}
            {!!Form::text('numeroHabitaciones',null,['class'=>'form-control','placeholder'=>'escriba el numero de habitaciones del hotel'])!!}
    </div>
    
    {!! Form::submit('REGISTRAR HOTEL', ['class'=>'btn btn-primary']) !!}
    
    {!! Form::close() !!}
    
   
   
</body>
</html>