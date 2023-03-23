

<div class="form-group">
<label for="Nombre"> Nombre</label>
<input type="text"  class="form-control" name="Nombre" value="{{ isset($heroes->Nombre)? $heroes->Nombre:'' }}" id="Nombre">
<br>
</div>


<div class="form-group">
<label for="Nombre_Real"> Nombre_Real</label>
<input type="text" class="form-control" name="Nombre_Real" value="{{ isset($heroes->Nombre_Real)? $heroes->Nombre_Real:'' }}" id="Nombre_Real">
<br>
</div>


<div class="form-group">
<label for="Apellido">Apellido</label>
<input type="text" class="form-control" name="Apellido" value="{{ isset($heroes->Apellido)? $heroes->Apellido:'' }}" id="Apellido">
<br>
</div>


<div class="form-group">
<label for="Localizacion"> Localizacion</label>
<input type="text" class="form-control" name="Localizacion" value="{{ isset($heroes->Localizacion)? $heroes->Localizacion:'' }}" id="Localizacion">
<br>
</div>



<div class="form-group">
<label for="Foto"> Foto</label>
@if (isset($heroes->Foto))
<img src="{{ asset('storage').'/'.$heroes->Foto }}" alt="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto">
<br>
</div>


<input class="btn btn-success" type="submit" value="Guardar datos">

<a class="btn btn-primary" href="{{ url('Heroes/') }}">Regresar</a>

<br>
