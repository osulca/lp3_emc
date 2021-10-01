<table border="1">
    <tr>
        <th>Restaurante</th>
        <th>Cliente</th>
        <th>Reserva</th>
        <th>Mesas</th>
    </tr>
    @foreach($reservas as $reserva)
        <tr>
            <td>
                Restaurante {{$reserva["restaurante"]}}<br>
                Ubicacion  {{$reserva["ubicacion"]}}
            </td>
            <td>
                Cliente {{$reserva["cliente"]}}<br>
                Telefono {{$reserva["telefono"]}}
            </td>
            <td>
                Servicio {{$reserva["servicio"]}}<br>
                Fecha {{$reserva["fecha"]}}<br>
                Estado {{$reserva["estado"]}}
                <a href="reserva/estado/{{$reserva["id"]}}">Cambiar Estado</a>
                <br>
                Numero de Personas {{$reserva["nro_personas"]}}
            </td>
            <td>
                Mesa nro {{$reserva["numero"]}}<br>
                Capacidad {{$reserva["capacidad"]}}<br>
            </td>
        </tr>
    @endforeach
</table>
