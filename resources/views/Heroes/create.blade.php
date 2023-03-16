Formulario de creación de Super Heroes.
<form action="{{ url('/Heroes') }}" method="post" enctype="multipar/form-data">
@csrf


<label for="Nombre"> Nombre</label>
<input type="text" name="Nombre" id="Nombre">
<br>

<label for="Nombre_Real"> Nombre_Real</label>
<input type="text" name="Nombre_Real" id="Nombre_Real">
<br>

<label for="Apellido">Apellido</label>
<input type="text" name="Apellido" id="Apellido">
<br>

<label for="Localizacion"> Localizacion</label>
<input type="text" name="Localizacion" id="Localizacion">
<br>

<label for="Foto"> Foto</label>
<input type="file" name="Foto" id="Foto">
<br>

<input type="submit" value="Guardar datos">
<br>

</form>