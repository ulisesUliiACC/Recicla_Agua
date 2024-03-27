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
  <script>
    $(document).ready(function() {
      // Función para enviar la solicitud AJAX y mostrar la información de la empresa en el modal
      function buscarEmpresa() {
        var formData = {
          '_token': '{{ csrf_token() }}',
          'clave': $('input[name=clave]').val()
        };

        $.ajax({
          type: 'POST',
          url: '{{ route("buscar.empresas") }}', // Corregir la ruta de la solicitud AJAX
          data: formData,
          dataType: 'json',
          success: function(response) {
            if (response.empresa) {
              $('#modalEmpresa .modal-body').html(`
            <p><strong>Clave:</strong> ${response.empresa.clave}</p>
            <p><strong>Horas:</strong> ${response.empresa.horas}</p>
            <p><strong>Descarga a:</strong> ${response.empresa.descarga_a}</p>
            <p><strong>Tipo:</strong> ${response.empresa.tipo}</p>
            <p><strong>Industria:</strong> ${response.empresa.industria}</p>
          `);
              $('#modalEmpresa').modal('show');
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Empresa no encontrada',
              });
            }
          },
          error: function(xhr, status, error) {
            alert('Error al buscar la empresa');
            console.error(xhr.responseText);
          }
        });
      }

      // Manejar el envío del formulario
      $('form').submit(function(event) {
        event.preventDefault(); // Evitar el envío normal del formulario
        buscarEmpresa(); // Llamar a la función para buscar la empresa
      });
    });

  </script>
@endsection

@section('content')

  <div class="modal fade" id="modalEmpresa" tabindex="-1" aria-labelledby="modalEmpresaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEmpresaLabel">Empresa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body"></div>
      </div>
    </div>
  </div>

  <form>
    @csrf <!-- Agrega el token CSRF -->
    <label for="clave">Clave:</label>
    <input type="text" name="clave" required>
    <button type="submit" class="btn btn-success">Buscar</button>
    <button type="button" class="btn btn-primary">Reportar Datos</button>
    <div class="float-end">
      <button type="button" class="btn btn-success" onclick="window.location='{{ route('solicitud.viewSolicitud') }}'">Crear Reporte</button>
    </div>
    <br>
  </form>
  <br>
  <!-- Bootstrap Table with Caption -->
  <div class="card">
    <h5 class="card-header">Parámetros</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <caption class="ms-4">Lista de Parámetros</caption>
        <thead>
        <tr>
          <th>Numero de muestra</th>
          <th>DBO_5</th>
          <th>DQO</th>
          <th>SST</th>
          <th>St</th>
          <th>G_y_A1</th>
          <th>G_y_A2</th>
          <th>G_y_A3</th>
          <th>G_y_A4</th>
          <th>G_y_A5</th>
          <th>G_y_A6</th>
          <th>G_y_A_PP</th>
          <th>SAAM</th>
          <th>NOK</th>
          <th>NAK</th>
          <th>NTK</th>
          <th>FENOL</th>
          <th>COLOR</th>
          <th>Cr+6</th>
          <th>CN-</th>
          <th>P-T</th>
          <th>Cu</th>
          <th>Ni</th>
          <th>Cd</th>
          <th>Zn</th>
          <th>Pb</th>
          <th>Cr</th>
          <th>Fe</th>
          <th>Ag</th>
          <th>Ai</th>
          <th>Hg</th>
          <th>As</th>
          <th>Se</th>
          <th>B</th>
          <th>Sn</th>
          <th>Coliformes_Fecales_NMP</th>
          <th>Coliformes_Totales</th>
          <th>pH</th>
          <th>SDT</th>
          <th>SSe</th>
          <th>conductividad</th>
          <th>Alcalinidas</th>
          <th>Fecha de Creación</th>
          <th>Fecha de Actualización</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($parametros as $parametro)
          <tr>
            <td>numero de muestra</td>
            <td>{{ $parametro->DBO_5 }}</td>
            <td>{{ $parametro->DQO }}</td>
            <td>{{ $parametro->SST }}</td>
            <td>{{ $parametro->St }}</td>
            <td>{{ $parametro->G_y_A1 }}</td>
            <td>{{ $parametro->G_y_A2 }}</td>
            <td>{{ $parametro->G_y_A3 }}</td>
            <td>{{ $parametro->G_y_A4 }}</td>
            <td>{{ $parametro->G_y_A5 }}</td>
            <td>{{ $parametro->G_y_A6 }}</td>
            <td>{{ $parametro->G_y_A_PP }}</td>
            <td>{{ $parametro->SAAM }}</td>
            <td>{{ $parametro->NOK }}</td>
            <td>{{ $parametro->NAK }}</td>
            <td>{{ $parametro->NTK }}</td>
            <td>{{ $parametro->FENOL }}</td>
            <td>{{ $parametro->COLOR }}</td>
            <td>{{ $parametro->Cr+6 }}</td>
            <td>{{ $parametro->CN }}</td>
            <td>{{ $parametro->PT }}</td>
            <td>{{ $parametro->Cu }}</td>
            <td>{{ $parametro->Ni }}</td>
            <td>{{ $parametro->Cd }}</td>
            <td>{{ $parametro->Zn }}</td>
            <td>{{ $parametro->Pb }}</td>
            <td>{{ $parametro->Cr }}</td>
            <td>{{ $parametro->Fe }}</td>
            <td>{{ $parametro->Ag }}</td>
            <td>{{ $parametro->Ai }}</td>
            <td>{{ $parametro->Hg }}</td>
            <td>{{ $parametro->As }}</td>
            <td>{{ $parametro->Se }}</td>
            <td>{{ $parametro->B }}</td>
            <td>{{ $parametro->Sn }}</td>
            <td>{{ $parametro->Coliformes_Fecales_NMP }}</td>
            <td>{{ $parametro->Coliformes_Totales }}</td>
            <td>{{ $parametro->pH }}</td>
            <td>{{ $parametro->SDT }}</td>
            <td>{{ $parametro->SSe }}</td>
            <td>{{ $parametro->conductividad }}</td>
            <td>{{ $parametro->Alcalinidas }}</td>
            <td>{{ $parametro->created_at }}</td>
            <td>{{ $parametro->updated_at }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap Table with Caption -->
@endsection
