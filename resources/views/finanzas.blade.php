@extends('layouts.app') 
@section('title','Inicio') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">
                Finanzas
            </h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
                <h3 class="title-2 m-b-40">Ingresos</h3>
                <canvas id="pieChart1"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
                <h3 class="title-2 m-b-40">Egresos</h3>
                <canvas id="pieChart2"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection