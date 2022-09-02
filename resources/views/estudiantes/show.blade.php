@extends('layouts.app')

@section('titulo', 'Detalle Curso')
@section('contenido')

<div class="text-center">
    @foreach ($student as $loco)
        <p>{{}}</p>
    @endforeach

</div>

@endsection
