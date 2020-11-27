@extends('auth.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Reservas</div>
                <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Tour</th>
                        <th scope="col">Servicios</th>
                        <th scope="col">Fecha de Reserva</th>
                        <th colspan="1">Opciones</th>
                        <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($reserves as $reserve)
                        <tr>
                            <td>{{ $reserve->tour->name }}</td>
                            <td>{{ $reserve->lodging->name }}</td>
                            <td>{{ $reserve->date }}</td>
                            <td> <a class="btn btn-dark" href="{{route('reserves.edit', $reserve->id)}}">Cancelar </a> </td>
                            <td>
                            <input type="text"
                            @if( $reserve->status == '0')    
                                value="Procesando"
                                class="btn btn-warning"
                            @elseif ($reserve->status == '1')
                                value="Aprobado"
                                class="btn btn-success" 
                            @elseif ($reserve->status == '2')
                                value="Desaprobado"
                                class="btn btn-danger"
                            @elseif ($reserve->status == '3')
                                value="Cancelado"
                                class="btn btn-dark"
                            @endif
                            style="width:115px; height:15px"
                            readonly
                            >
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


