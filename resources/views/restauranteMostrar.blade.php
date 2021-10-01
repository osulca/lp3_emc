@foreach($restaurante as $restaurante)
    restaurante: {{$restaurante["nombre"]}}<br>
    ubicacion {{$restaurante["ubicacion"]}}<p>
    @foreach($mesas as $mesa)
        @if($restaurante["id"]==$mesa["id_restaurante"])
            numero: {{$mesa["numero"]}}<br>
            capacidad: {{$mesa["capacidad"]}}<br>
        @endif
    @endforeach
        </p><hr>
@endforeach
