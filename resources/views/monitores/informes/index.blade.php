@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')
@section('content')
  vista de informes
  <div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">


      <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                  <span>Usuarios</span>
                  <div class="d-flex align-items-end mt-2">
                    <h3 class="mb-0 me-2">6</h3>
                    <small class="text-success">(100%)</small>
                  </div>
                  <small>Total Users</small>
                </div>
                <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                  <span>Crear nuevo informe</span>
                  <button type="button" class="btn btn-success mt-3" onclick="window.location='{{route('reporte.informeView')}}'">Crear Informe</button>
                  <div class="d-flex align-items-end mt-2">
                    <h3 class="mb-0 me-2"></h3>
                  </div>
                  <small> </small>
                </div>
                <span class="badge bg-label-success rounded p-2">
                    <i class="bx bx-user-check bx-sm"></i>
                </span>
              </div>
              <!-- Botón para crear reporte -->

            </div>
          </div>
        </div>

      </div>
      <!-- Users List Table -->
    </div>
    <!-- / Content -->
  </div>

  <div class="card">
    <h5 class="card-header">informes de resultados</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <caption class="ms-4">Lista de Informes </caption>

        <thead>
        <tr>
          <th>Numero de Informe</th>
          <th>Industria</th>
          <th>Fecha de creacion </th>
          <th>Fecha de modificacion </th>
          <th>acciones</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
@endsection
