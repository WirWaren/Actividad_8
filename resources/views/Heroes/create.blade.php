@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/Heroes') }}" method="post" enctype="multipar/form-data">
@csrf
@include('Heroes.form');




</form>
</div>
@endsection