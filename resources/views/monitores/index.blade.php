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

    lista usuarios de monitoreo


    <div class="card">
        <h5 class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                Lista de usuario

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                        Nuevo Usuario
                    </button>
                    <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                      <div class="modal-dialog">
                        <form class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="backDropModalTitle">Alta de Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col mb-3">
                                <label for="nameBackdrop" class="form-label">Nombre Completo</label>
                                <input type="text" id="nameBackdrop" class="form-control" placeholder="Enter Name">
                              </div>
                            </div>
                            <div class="row g-2">
                              <div class="col mb-0">
                                <label for="emailBackdrop" class="form-label">Nombre Usuario</label>
                                <input type="email" id="emailBackdrop" class="form-control" >
                              </div>
                              <div class="col mb-0">
                                <label for="dobBackdrop" class="form-label">Contraseña</label>
                                <input type="password" id="password" class="form-control" >
                              </div>
                            </div>
                            <div class="row g-2">
                              <div class="col mb-0">
                                <label for="emailBackdrop" class="form-label">Numero de telefono</label>
                                <input type="phone" id="phone" class="form-control" >
                              </div>
                              <div class="col mb-0">
                                <div class="mb-3">
                                  <label for="exampleFormControlSelect1" class="form-label">Rol Asignado</label>
                                  <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                          </div>
                        </form>
                      </div>
                    </div>

            </div>
        </h5>
        <div class="table-responsive">
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>Nombre de Usuario</th>
                      <th>Nombre completo</th>
                      <th>Rol</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($users as $user )


                  <tr>
                      <td><i class='bx bxs-user-pin bx-tada' style='color:#cb288a'></i> <span class="fw-medium">{{$user->username}}</span>
                      </td>
                      <td>{{$user->name}}</td>
                      <td></td>
                      <td><span class="badge bg-label-primary me-1">Active</span></td>
                      <td>
                          <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                                      class="bx bx-dots-vertical-rounded"></i></button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"><i
                                          class="bx bx-edit-alt me-1"></i>Edit</a>
                                  <a class="dropdown-item" href="javascript:void(0);"><i
                                          class="bx bx-trash me-1"></i>Delete</a>
                              </div>
                          </div>
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
