@extends('layouts.app')
@section('content')
<div class="container">

<form action=" {{ url('/Heroes/'.$heroes->id) }} " method="post" enctype="multipar/form-data">
@csrf
{{ method_field('PATCH') }}

@include('Heroes.form');

</form>
</div>
@endsection

