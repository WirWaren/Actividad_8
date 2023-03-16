Formulario de creación de Super Heroes.
<form action="{{ url('/Heroes') }}" method="post" enctype="multipar/form-data">
@csrf
@include('Heroes.form');




</form>