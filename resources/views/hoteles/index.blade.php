<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HotelYa!</title>
    @include("layouts.css")
</head>
<body>


    <div id="app" >
        
        <?php $message=Session::get('message') ?>
        @if($message=='store')
        <div class="alert alert-success" role="alert">
               se creo exitosamente el hotel
              </div>
        @endif
    
    
        <div class="card">
          <div class="card-header"> 
            Habitaciones disponibles        
          </div>
          <div class="card-body">
            <section id="contenedor">
                <header>bienvenidos  al hotel </header>
                    <section id="hotel-control">
                        {{-- @foreach ($habitaciones as $h)
                            <div id="habitacion"><button type="button" class="btn btn-outline-primary"><img src="puerta.jpg" height="100" width="100" > {{ $h->numeroHabitacion }}--{{ $h->estado }}</button></div>                
                        @endforeach --}}
                        <table class="table table-bordered table-hover" >
                            <tbody>
                                <tr v-for="(habitacion,index) in habitaciones" >
                                    <td width="100" > <img height="100" width="100" src="puerta.jpg" alt=""> </td>
                                    <td v-text="habitacion.numeroHabitacion" ></td>
                                </tr>
                            </tbody>
                        </table>            
                </section>
            </section>
          </div>
        </div>
    </div>


    @include("layouts.js")
    <script src="js/habitaciones.js"></script>
</body>
</html>