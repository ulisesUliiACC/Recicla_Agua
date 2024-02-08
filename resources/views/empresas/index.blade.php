@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')

<div class="card">
  <h5 class="card-header">Tabla de las Empresas</h5>
  <div class="table-responsive">
    <table class="table card-table">
      <thead>
        <tr>
          <th>clave</th>
          <th>Empresa</th>
          <th>Monitore</th>
          <th>Descarga</th>
          <th>horas</th>
          <th>Tipo</th>
          <th>Descarga:a</th>
          <th>Direccion</th>
          <th>Telefono</th>

        </tr>
      </thead>
      <tbody>
        @foreach ( $empresas as $empresa )
        <tr>
          <td>{{$empresa->clave}}</td>
          <td>{{$empresa->industria}}</td>
          <td>{{$empresa->monitoreo}}</td>
          <td>{{$empresa->descarga}}</td>
          <td>{{$empresa->horas}}</td>
          <td>{{$empresa->tipo}}</td>
          <td>{{$empresa->descarga_a}}</td>
          <td>{{$empresa->direccion}}</td>
          <td>{{$empresa->numero}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
