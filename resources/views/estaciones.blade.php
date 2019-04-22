@extends('layouts.app') 
@section('title','Inicio') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">
                Estaciones
            </h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="map-data m-b-40">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-map"></i>Ciudad de Guatemala</h3>
            <div class="map-wrap">
                <center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d61772.99674767539!2d-90.52766571276655!3d14.609766117248704!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sgt!4v1555909856610!5m2!1ses-419!2sgt"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </center>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-9">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <th>Estacion</th>
                    <th>Bicicletas actuales</th>
                    <th>Estado</th>
                </thead>
                <tbody>
                    <tr>
                        <td>A1</td>
                        <td class="text-right">-</td>
                        <td>
                            <span class="role out">Fuera de Servicio</span>
                        </td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td class="text-right">0</td>
                        <td>
                            <span class="role free">Vacía</span>
                        </td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td class="text-right">0</td>
                        <td>
                            <span class="role free">Vacía</span>
                        </td>
                    </tr>
                    <tr>
                        <td>B1</td>
                        <td class="text-right">20</td>
                        <td>
                            <span class="role full">Llena</span>
                        </td>
                    </tr>
                    <tr>
                        <td>B2</td>
                        <td class="text-right">5</td>
                        <td>
                            <span class="role space">Con Espacio</span>
                        </td>
                    </tr>
                    <tr>
                        <td>B3</td>
                        <td class="text-right">8</td>
                        <td>
                            <span class="role space">Con Espacio</span>
                        </td>
                    </tr>
                    <tr>
                        <td>C1</td>
                        <td class="text-right">20</td>
                        <td>
                            <span class="role full">Llena</span>
                        </td>
                    </tr>
                    <tr>
                        <td>C2</td>
                        <td class="text-right">16</td>
                        <td>
                            <span class="role space">Con Espacio</span>
                        </td>
                    </tr>
                    <tr>
                        <td>C3</td>
                        <td class="text-right">4</td>
                        <td>
                            <span class="role space">Con Espacio</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection