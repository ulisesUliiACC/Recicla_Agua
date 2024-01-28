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

                          <div class="modal-body">
                            {!! Form::open(array('route' => 'users.store', 'method' => 'POST')) !!}
                                <!-- Otros campos del usuario -->
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <div class="mb-3">
                                            <label for="roleBackdrop" class="form-label">Rol Asignado</label>
                                            {!! Form::select('roles[]', $roles, null, array('class' => 'form-select', 'id' => 'roleBackdrop')) !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                            </div>
                            {!! Form::close() !!}
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
                      <th>Numero de telefono</th>
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
