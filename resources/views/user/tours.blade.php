@extends('auth.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    @forelse ($tours as $tour)
        <div class="col-md-5">
            <div class="card mb-4"> 
                <div class="card-body">
                    <div align="center">
                        <img src="{{$tour['url-photo']}}" alt="{{$tour->name}}" width="150" height="150">
                    </div>
                    <h4 class="card-title">{{$tour->name}}</h4>
                    <p class="card-text">{{$tour->description}}</p>
                </div>
                <div  align="center" class="card-footer">
                    <a class="btn btn-primary" href="{{route ('tours.show', $tour->id) }}" >Ver detalles</a>
                </div>
            </div>
        </div>
    @empty
    <p>No se encuentra ningun Servicio</p> 
    @endforelse
    </div>
           
</div>
@endsection 