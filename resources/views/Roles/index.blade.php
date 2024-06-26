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

    vista de roles

    <div class="card">
        <h5 class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                Lista de roles y permisos
                <!--fin del modal -->

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal" @can('crear-rol') @else disabled @endcan>
                        Nuevo Usuario
                    </button>

                <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                        <form class="modal-content" action="{{ route('roles.store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Alta de Usuario</h5>`
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div id="error-message" class="alert alert-danger" style="display: none;">
                                        Por favor, completa todos los campos.
                                    </div>
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">Nombre del Rol:</label>
                                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'nameBackdrop']) !!}

                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="permissionBackdrop" class="form-label">Permisos para este Rol:</label>
                                        @foreach ($permissions as $permission)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="permission[]"
                                                    value="{{ $permission->id }}" id="permission{{ $permission->id }}">
                                                <label class="form-check-label" for="permission{{ $permission->id }}">
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!--fin del modal -->
            </div>
        </h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre del Rol </th>
                        <th>Permisos</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td>
                                @foreach ($role->permissions as $permission)
                                    <li><span class="badge bg-label-primary me-1">{{ $permission->name }}</span></li>
                                @endforeach
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">`
                                      <button type="submit" class="btn p-1 dropdown-toggle hide-arrow text-danger" @can('editar-usuario')  @else disabled @endcan>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#backDropModal{{ $role->id }}">
                                                <i class="bx bx-edit-alt me-1"></i> Editar
                                            </a>
                                      </button>

                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                            class="formEliminar">
                                            @csrf
                                            @method('DELETE')

                                                <button type="submit" class="btn p-1 dropdown-toggle hide-arrow text-danger" @can('borrar-rol')  @else disabled @endcan>
                                                    <i class="bx bx-trash me-1"></i>
                                                    <a>delete</a></button>

                                        </form>

                                    </div>
                                </div>
                                <!-- Modal para editar el rol -->
                                <div class="modal fade" id="backDropModal{{ $role->id }}" data-bs-backdrop="static"
                                    tabindex="-1">
                                    <div class="modal-dialog">
                                        <form class="modal-content" action="{{ route('roles.update', $role->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="backDropModalTitle{{ $role->id }}">Editar
                                                    Rol</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Contenido del formulario de edición -->
                                                <div class="row">
                                                    <div id="error-message" class="alert alert-danger"
                                                        style="display: none;">
                                                        Por favor, completa todos los campos.
                                                    </div>
                                                    <div class="col mb-3">
                                                        <label for="nameBackdrop" class="form-label">Nombre del Rol:</label>
                                                        {!! Form::text('name', $role->name, ['class' => 'form-control', 'id' => 'nameBackdrop']) !!}
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="permissionBackdrop" class="form-label">Permisos para
                                                            este Rol:</label>
                                                        @foreach ($permissions as $permission)
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="permission[]" value="{{ $permission->id }}"
                                                                    id="permission{{ $permission->id }}"
                                                                    {{ in_array($permission->id, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}>
                                                                <label class="form-check-label"
                                                                    for="permission{{ $permission->id }}">
                                                                    {{ $permission->name }}
                                                                </label>
                                                            </div>
                                                        @endforeach


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            </div>
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        (function() {
            'use strict'
            //crear la clase formEliminar dentro del form del boton borrar
            //recordar que cada registro a eliminar esta contenido en un form
            var forms = document.querySelectorAll('.formEliminar')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        event.preventDefault()
                        event.stopPropagation()
                        Swal.fire({
                            title: '¿Deseas eliminar este Rol??',
                            icon: 'info',
                            showCancelButton: true,
                            confirmButtonColor: '#20c997',
                            cancelButtonColor: '#6c757d',
                            confirmButtonText: 'Confirmar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                this.submit();
                                Swal.fire('¡Eliminado!',
                                    'El registro ha sido eliminado exitosamente.', 'success');
                            }
                        })
                    }, false)
                })
        })()
    </script>
    <script>
        function validarYGuardar() {
            // Obtén el valor del input
            var inputValue = document.getElementById('nameBackdrop').value.trim();

            // Muestra el mensaje de error y cambia el estilo del borde si el campo está vacío
            if (!inputValue) {
                document.getElementById('nameError').innerText = 'Por favor, poner nombre.';
                document.getElementById('nameError').style.display = 'block';
                document.getElementById('nameBackdrop').classList.add('error-border');
            } else {
                // Si el campo no está vacío, oculta el mensaje de error y restaura el estilo del borde
                document.getElementById('nameError').style.display = 'none';
                document.getElementById('nameBackdrop').classList.remove('error-border');

                // Agrega aquí la lógica para guardar el formulario, por ejemplo, enviar una petición AJAX
                // o realizar un envío de formulario estándar.
            }
        }
    </script>
@endsection
