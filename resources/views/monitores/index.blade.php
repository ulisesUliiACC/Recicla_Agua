@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')
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
                        <form class="modal-content" action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        {{ Form::label('nameBackdrop', 'Nombre Completo', ['class' => 'form-label']) }}
                                        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'nameBackdrop', 'placeholder' => 'Enter Name']) }}
                                    </div>

                                    <div class="col mb-3">
                                        {{ Form::label('emailBackdrop', 'Nombre Usuario', ['class' => 'form-label']) }}
                                        {{ Form::text('username', null, ['class' => 'form-control', 'id' => 'emailBackdrop']) }}
                                    </div>

                                    <div class="col mb-3">
                                        {{ Form::label('passwordBackdrop', 'Contraseña', ['class' => 'form-label']) }}
                                        {{ Form::password('password', ['class' => 'form-control', 'id' => 'passwordBackdrop']) }}
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col mb-3">
                                        {{ Form::label('phoneBackdrop', 'Numero de telefono', ['class' => 'form-label']) }}
                                        {{ Form::tel('telefono', null, ['class' => 'form-control', 'id' => 'phoneBackdrop']) }}
                                    </div>

                                    <div class="col mb-3">
                                        {{ Form::label('roleBackdrop', 'Rol Asignado', ['class' => 'form-label']) }}
                                        {{ Form::select('roles[]', $roles, null, ['class' => 'form-select', 'id' => 'roleBackdrop']) }}
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col mb-3">
                                        {{ Form::label('estadoBackdrop', 'Estado', ['class' => 'form-label']) }}
                                        {{ Form::select('estado', [1 => 'Habilitado', 0 => 'Inhabilitado'], null, ['class' => 'form-select', 'id' => 'estadoBackdrop']) }}
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger"
                                        data-bs-dismiss="modal">Close</button>
                                    {{ Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                                </div>
                                {!! Form::close() !!}

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
                    @foreach ($users as $user)
                        <tr>
                            <td><i class='bx bxs-user-pin bx-tada' style='color:#cb288a'></i> <span
                                    class="fw-medium">{{ $user->username }}</span>
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->telefono }}</td>
                            <td>{{ implode(', ', $user->getRoleNames()->toArray()) }}</td>
                            <td>
                              <span class="badge @if($user->estado) bg-label-success @else bg-label-danger @endif me-1">
                                {{ $user->estado ? 'Habilitado' : 'Inhabilitado' }}
                            </span>
                            </td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">
                                        <i class="bx bx-edit-alt me-1"></i> Editar
                                    </a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                      class="formEliminar">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn p-1 dropdown-toggle hide-arrow text-danger">
                                          <i class="bx bx-trash me-1"></i>
                                          <a>delete</a></button>
                                  </form>

                                </div>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <br>
        <!-- Tu contenido de usuarios aquí -->

        <!-- Paginación con íconos de Boxicons -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                @if ($users->previousPageUrl())
                    <li class="page-item prev">
                        <a class="page-link" href="{{ $users->previousPageUrl() }}"><i class="bx bx-chevron-left"></i></a>
                    </li>
                @endif

                @foreach (range(1, $users->lastPage()) as $page)
                    <li class="page-item{{ $page == $users->currentPage() ? ' active' : '' }}">
                        <a class="page-link" href="{{ $users->url($page) }}">{{ $page }}</a>
                    </li>
                @endforeach

                @if ($users->nextPageUrl())
                    <li class="page-item next">
                        <a class="page-link" href="{{ $users->nextPageUrl() }}"><i class="bx bx-chevron-right"></i></a>
                    </li>
                @endif
            </ul>
        </nav>
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
                          title: '¿Deseas eliminar este Usuario??',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#DC143C',
                            cancelButtonColor: '#6c757d',
                            confirmButtonText: 'Confirmar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                this.submit();
                                Swal.fire('¡Eliminado!',
                                    'El usurio ha sido eliminado exitosamente.', 'success');
                            }
                        })
                    }, false)
                })
        })()
    </script>

@endsection
