@extends('adminlte::page')

@section('title', 'Tickets')

@section('content_header')
    <h1>Listado tickets</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Contacto</th>
                    <th>Asunto</th>
                    <th>Grupo</th>
                    <th>Agente</th>
                    <th>Prioridad</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->contacto}}</td>
                        <td>{{$ticket->asunto}}</td>
                        <td>{{$ticket->grupo}}</td>
                        <td>{{$ticket->agente}}</td>
                        <td>{{$ticket->prioridad}}</td>
                        <td>{{$ticket->estado}}</td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop