<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informe de Resultados - Reciclagua EDOMEX</title>
  <link rel="stylesheet" href="{{ asset('assets/css/informe.css') }}">
</head>
<body>
<header>
  <h1>Reciclagua EDOMEX</h1>
  <h2>ESTADO DE MÉXICO</h2>
  <form id="searchForm">
    @csrf
    <label for="clave" class="label-left">Clave de Empresa</label>
    <input type="text" id="clave" name="clave" class="input-left" placeholder="...">
    <button type="submit" class="button">Buscar</button>
  </form>
  <button type="button" class="button1" onclick="window.location='{{ route('informe.pdf') }}'">PDF</button>
  <img src="\assets\img\logos\Logo.jpg" alt="Logo xd" class="image">
</header>
<main>
  <section class="hoja-campo">
    <label for="clave" class="label-left">Numero de Folio</label>
    <input type="text" id="clave" name="clave" class="input-left" placeholder="...">
    <button type="submit" class="button">Insertar</button>

    <div>
      <label for="start">FECHA DE MUESTREO</label>
      <input type="date" id="start" name="trip-start" value="2024-03-27" min="2018-01-01" max="2030-01-01" />
      <label for="start2">FECHA DE INFORME</label>
      <input type="date" id="start" name="trip-start" value="2024-03-27" min="2018-01-01" max="2030-01-01" />
    </div>

    <label for="nombre" class="label-left">Lista de Colores</label>
    <select name="fruits">
      <option value="nada" disabled selected>Selecciona Numero</option>
      <option value="valor-col1" class="verde1">liquido turbio de color morado</option>
      <option value="valor-col2" class="azul">liquido cristalino de color café</option>
      <option value="valor-col3" class="verde2">liquido turbio de color anaranjado</option>
    </select>
    <h4 class="ficha">Folio: __________________</h4>
    <h3>INFORME DE RESULTADOS</h3>

    <table id="empresaTable" class="tabla-tabulada">


    </table>

    <hr>
    <h5>PRUEBAS REALIZADAS </h5>
    <h5>CONFORME AL ANEXO "C" DE RECICLAGUA AMBIENTAL S.A DE C.V </h5>
    <table class="datostable" style="margin: 0;">
      <tr>
        <td rowspan="2"  class="parametros">PARAMETRO</td>
        <td rowspan="2"  class="general">UNIDAD</td>
        <td colspan="2"  class="general">RESULTADO</td>
        <td rowspan="2"  class="general">NORMA</td>
      </tr>
      <tr>
        <td  class="general">OBTENIDO</td>
        <td  class="general">Especificación Conc. Máx</td>
      </tr>
      <tr>
        <td>DQO (Demanda Quimica de Oxigeno)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>DBO (Demenda Bioquimica de Oxigeno)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>SST (Solidos Suspendidos Totales)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>GYA (Grasas y Aceites)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>TEMPERATURA</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>pH</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>FENOLES</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>SAAM (Sustancias Activas al Azul de Metileno)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>As (Arsénico)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Cd (Cadmio)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Cu (Cobre)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Cr+6 (Cromo Hexavalente)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Hg (Mercurio)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Pb (Plomo)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Ni (Niquel)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Al (Aluminio)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>CN (Cianuro)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>MATERIA FLOTANTE</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Sse (Sólidos Sedimentables)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Cr (Cromo Total)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>Zn (Zinc Total)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>NTK (Nitrogeno Total Kjeldahl)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
      <tr>
        <td>ST (Solidos Totales)</td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
        <td class="resultado"></td>
      </tr>
    </table >
  </section>
</main>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Manejar el envío del formulario de búsqueda
    $('#searchForm').submit(function(event) {
      event.preventDefault(); // Evitar el envío normal del formulario
      buscarEmpresa(); // Llamar a la función para buscar la empresa
    });

    // Función para enviar la solicitud AJAX y mostrar la información de la empresa en la tabla
    function buscarEmpresa() {
      var formData = {
        '_token': '{{ csrf_token() }}',
        'clave': $('#clave').val()
      };

      $.ajax({
        type: 'POST',
        url: '{{ route("buscar.InyectorInfo") }}',
        data: formData,
        dataType: 'json',
        success: function(response) {
          if (response.empresa) {
            // Llenar los campos de la tabla con los datos de la empresa
            $('#empresaTable').html(`
              <tr>
                <td class="sin-bordes">ATENCIÓN:</td>
                <td class="lineas-filas">${response.empresa.atencion}</td>
              </tr>
              <tr>
                <td class="sin-bordes">CLIENTE:</td>
                <td class="lineas-filas">${response.empresa.industria}</td>
              </tr>
              <tr>
                <td class="sin-bordes">DIRECCIÓN:</td>
                <td class="lineas-filas">${response.empresa.direccion}</td>
              </tr>
              <tr>
                <td class="sin-bordes">TELÉFONO:</td>
                <td class="lineas-filas">${response.empresa.numero}</td>
              </tr>
              <tr>
                <td class="sin-bordes">MUESTREADO POR:</td>
                <td class="lineas-filas">RECICLAGUA AMBIENTAL S.A. DE C.V.</td>
              </tr>
              <tr>
				        <td class="sin-bordes">FECHA DE MUESTREO:</td>
				        <td class="lineas-filas"></td>
			        </tr>
              <tr>
                <td class="sin-bordes">RESPONSABLE DE MUESTREO:</td>
                <td class="lineas-filas">T.Q.I. FLORENCIO JOSÉ GUTIERREZ NUÑEZ</td>
              </tr>
              <tr>
				        <td class="sin-bordes">FECHA DE INFORME:</td>
				        <td class="lineas-filas"></td>
			        </tr>
              <tr>
				        <td class="sin-bordes">PRODUCTO ANALIZADO:</td>
				        <td class="lineas-filas">AGUA RESIDUAL</td>
			        </tr>
              <tr>
				        <td class="sin-bordes">PROCEDENCIA:</td>
				        <td class="lineas-filas"></td>
			        </tr>
              <tr>
				        <td class="sin-bordes">N°. DE ENTRADA AL LABORATORIO:</td>
				        <td class="lineas-filas"></td>
			        </tr>
              <tr>
				        <td class="sin-bordes">DESCRIPCION DE LA MUESTRA:</td>
				        <td class="lineas-filas"></td>
			        </tr>
              <tr>
				        <td class="sin-bordes">GASTO DE LITROS POR SEGUNDO</td>
				        <td class="lineas-filas"></td>
			        </tr>
              <!-- Agrega más campos según sea necesario -->
            `);
          } else {
            // Limpiar la tabla si no se encuentra la empresa
            $('#empresaTable').empty();
            alert('Empresa no encontrada');
          }
        },
        error: function(xhr, status, error) {
          alert('Error al buscar la empresa');
          console.error(xhr.responseText);
        }
      });
    }
  });
</script>
