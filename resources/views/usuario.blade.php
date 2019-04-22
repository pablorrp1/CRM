@extends('layouts.app') 
@section('title','Inicio') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-user"></i>
                <strong class="card-title pl-2">Perfil</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <h5 class="text-sm-center mt-2 mb-1"> @ {!! $name !!} </h5>
                    <div class="location text-sm-center">
                        <i class="fa fa-map-marker"></i> Guatemala, Guatemala</div>
                    <div class="location text-sm-center">
                        @if ($state==0)
                        <span class="badge badge-primary">Membresía Por Aprobar</span> @elseif ($state==1)
                        <span class="badge badge-success">Membresía Activa</span> @elseif ($state==2)
                        <span class="badge badge-warning">Membresía Activa por Caducar</span> @else
                        <span class="badge badge-danger">Membresía Caducada</span> @endif
                    </div>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    <a href="#">
                                <i class="fa fa-facebook pr-1"></i>
                            </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection