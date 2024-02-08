@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
  <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
  <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
 vista de permisos
 <h1>Permisos</h1>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearPermisoModal">
   Crear Permiso
 </button>

 <table class="table table-striped" id="permisos-table">
   <thead>
   <tr>
     <th>Nombre</th>
     <th>Guardia</th>
     <th>Descripción</th>
     <th></th>
   </tr>
   </thead>
   <tbody>
   </tbody>
 </table>

 <div class="modal fade" id="crearPermisoModal" tabindex="-1" role="dialog" aria-labelledby="crearPermisoModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="crearPermisoModalLabel">Crear Permiso</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>

       <div class="modal-body">
         <form method="POST" action="{{ route('permissions.storeModal') }}">
           @csrf

           <div class="form-group">
             <label for="name">Nombre del Permiso:</label>
             <input type="text" class="form-control" id="name" name="name" required>
           </div>

           <div class="form-group">
             <label for="guard_name">Guardia:</label>
             <select class="form-control selectpicker" id="guard_name" name="guard_name" data-live-search="true" required>
               <option value="">Seleccione una guardia</option>
               <option value="web">Web</option>
               <option value="api">API</option>
             </select>
           </div>

           <div class="form-group">
             <label for="description">Descripción:</label>
             <textarea class="form-control" id="description" name="description"></textarea>
           </div>

           <button type="submit" class="btn btn-primary">Crear Permiso</button>
         </form>
       </div>

       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       </div>
     </div>
   </div>
 </div>

@endsection
