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
          <th>DBO5</th>
          <th>DQO</th>
          <th>SST</th>
          <th>ST</th>
          <th>GYA</th>
          <th>SAAM</th>
          <th>NAK</th>
          <th>Nok</th>
          <th>NTK</th>
          <th>FENOL</th>
          <th>Color</th>
          <th>Metales</th>
          <th>CN</th>
          <th>Cr+6</th>
          <th>CN-6</th>
          <th>P-T</th>
          <th>Cu</th>
          <th>Ni</th>
          <th>Cd</th>
          <th>Zn</th>
          <th>Pb</th>
          <th>Cr</th>
          <th>Fe</th>
          <th>Ag</th>
          <th>Al</th>
          <th>Hg</th>
          <th>As</th>
          <th>Se</th>
          <th>B</th>
          <th>Sn</th>
          <th>COLIFORMES FECALES NMP</th>
          <th>COLIFORMES TOTALES</th>
          <th></th>
          <th>Ph</th>
          <th>SDT</th>
          <th>SSe</th>
          <th>Conductividad</th>
          <th>Alacalinidad</th>
          <th>Giro ind</th>
          <th>Direccion</th>
          <th>Numero</th>
          <th>Attencion</th>


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
          <td>{{$empresa->DBO5}}</td>
          <td>{{$empresa->DQO}}</td>
          <td>{{$empresa->SST}}</td>
          <td>{{$empresa->ST}}</td>
          <td>{{$empresa->GYA}}</td>
          <td>{{$empresa->SAAM}}</td>
          <td>{{$empresa->NAK}}</td>
          <td>{{$empresa->NOK}}</td>
          <td>{{$empresa->NTK}}</td>
          <td>{{$empresa->fenol}}</td>
          <td>{{$empresa->color}}</td>
          <td>{{$empresa->metales}}</td>
          <td>{{$empresa->CN}}</td>
          <td>{{$empresa->CR_6}}</td>
          <td>{{$empresa->CN_6}}</td>
          <td>{{$empresa->P_T}}</td>
          <td>{{$empresa->Cu}}</td>
          <td>{{$empresa->Ni}}</td>
          <td>{{$empresa->Cd}}</td>
          <td>{{$empresa->Zn}}</td>
          <td>{{$empresa->Pb}}</td>
          <td>{{$empresa->Cr}}</td>
          <td>{{$empresa->Fe}}</td>
          <td>{{$empresa->Ag}}</td>
          <td>{{$empresa->Al}}</td>
          <td>{{$empresa->Hg}}</td>
          <td>{{$empresa->As}}</td>
          <td>{{$empresa->Se}}</td>
          <td>{{$empresa->B}}</td>
          <td>{{$empresa->Sn}}</td>
          <td>{{$empresa->coliformes_fecales_nmp}}</td>
          <td>{{$empresa->coliformes_totales}}</td>
          <td></td>
          <td>{{$empresa->ph}}</td>
          <td>{{$empresa->SDT}}</td>
          <td>{{$empresa->SSe}}</td>
          <td>{{$empresa->conductividad}}</td>
          <td>{{$empresa->alcalinidad}}</td>
          <td>{{$empresa->giro_ind}}</td>
          <td>{{$empresa->direccion}}</td>
          <td>{{$empresa->telefono}}</td>
          <td>{{$empresa->atencion}}</td>




          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
