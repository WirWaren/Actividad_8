<label for="Nombre"> Nombre</label>
<input type="text" name="Nombre" value="{{ isset($heroes->Nombre)? $heroes->Nombre:'' }}" id="Nombre">
<br>
<label for="Nombre_Real"> Nombre_Real</label>
<input type="text" name="Nombre_Real" value="{{ isset($heroes->Nombre_Real)? $heroes->Nombre_Real:'' }}" id="Nombre_Real">
<br>
<label for="Apellido">Apellido</label>
<input type="text" name="Apellido" value="{{ isset($heroes->Apellido)? $heroes->Apellido:'' }}" id="Apellido">
<br>
<label for="Localizacion"> Localizacion</label>
<input type="text" name="Localizacion" value="{{ isset($heroes->Localizacion)? $heroes->Localizacion:'' }}" id="Localizacion">
<br>
<label for="Foto"> Foto</label>
@if (isset($heroes->Foto))
<img src="{{ asset('storage').'/'.$heroes->Foto }}" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<input type="submit" value="Guardar datos">

<a href="{{ url('Heroes/') }}">Regresar</a>

<br>
