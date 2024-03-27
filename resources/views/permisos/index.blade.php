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

   <div class="card">
     <h5 class="card-header">
       <div class="d-flex justify-content-between align-items-center">
         Lista de permisos
         <!-- Botón para crear nuevo permiso -->
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearPermisoModal" @can('crear-permiso') @else disabled @endcan>
           Nuevo Permiso
         </button>
       </div>
     </h5>
     <div class="table-responsive">
       <table class="table table-bordered">
         <thead>
         <tr>
           <th>Nombre del Permiso</th>
           <th>Acciones</th>
         </tr>
         </thead>
         <tbody>
         @foreach ($permissions as $permission)
           <tr>
             <td>{{ $permission->name }}</td>
             <td>
               <div class="dropdown">
                 <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                   <i class="bx bx-dots-vertical-rounded"></i>
                 </button>
                 <div class="dropdown-menu">
                   <!-- Formulario para eliminar el permiso -->
                   <form action="{{ route('permisos.destroy', $permission->id) }}" method="POST" class="formEliminar">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn p-1 dropdown-toggle hide-arrow text-danger" @can('borrar-permiso') @else disabled @endcan>
                       <i class="bx bx-trash me-1"></i> Borrar
                     </button>
                   </form>
                 </div>
               </div>
             </td>
           </tr>
         @endforeach
         </tbody>
       </table>
     </div>
   </div>

   <!-- Modal para crear un nuevo permiso -->
   <div class="modal fade" id="crearPermisoModal" data-bs-backdrop="static" tabindex="-1">
     <div class="modal-dialog">
       <form class="modal-content" action="{{ route('permisos.store') }}" method="POST">
         @csrf
         <div class="modal-header">
           <h5 class="modal-title" id="crearPermisoModalTitle">Nuevo Permiso</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <!-- Contenido del formulario de creación de permiso -->
           <div class="row">
             <div id="error-message" class="alert alert-danger" style="display: none;">
               Por favor, completa todos los campos.
             </div>
             <div class="col mb-3">
               <label for="nombrePermiso" class="form-label">Nombre del Permiso:</label>
               <input type="text" name="name" class="form-control" id="nombrePermiso">
             </div>

           </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
           <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
       </form>
     </div>
   </div>
@endsection
