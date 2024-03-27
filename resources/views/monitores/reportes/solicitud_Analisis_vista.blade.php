<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitud de Ánalisis al Laboratorio - Reciclagua EDOMEX</title>
  <link rel="stylesheet" href="{{ asset('assets/css/solicitud.css') }}">

</head>
<body>
<header>
  <h1>Reciclagua EDOMEX</h1>
  <h2>ESTADO DE MÉXICO</h2>
  <section class="hoja-campo">
    <!-- Tus formularios para ingresar la clave de empresa -->
    <form id="searchForm1" onsubmit="return transferirMuestra(event, 1)">
      <label for="clave1" class="label-left">Clave de Empresa 1</label>
      <input type="text" id="clave1" name="clave" class="input-left" placeholder="...">
      <button type="submit" class="button">Buscar</button>
    </form>

    <form id="searchForm2" onsubmit="return transferirMuestra(event, 2)">
      <label for="clave2" class="label-left">Clave de Empresa 2</label>
      <input type="text" id="clave2" name="clave" class="input-left" placeholder="...">
      <button type="submit" class="button">Buscar</button>
    </form>

    <form id="searchForm3" onsubmit="return transferirMuestra(event, 3)">
      <label for="clave3" class="label-left">Clave de Empresa 3</label>
      <input type="text" id="clave3" name="clave" class="input-left" placeholder="...">
      <button type="submit" class="button">Buscar</button>
    </form>
  <br>
  <br>
  <button type="button" class="button1" onclick="window.location='{{ route('solicitud') }}'">Guardar en PDF</button>
  <img src="Logo.jpg" alt="Logo " class="image">
</header>
<main>
  <section class="hoja-campo">
    <form id="searchForm">
      <label for="clave" class="label-left">Clave de Empresa 1</label>
      <input type="text" id="clave" name="clave" class="input-left" placeholder="...">
      <button type="submit" class="button">Buscar</button>
    </form>

    <form id="searchForm">

      <label for="clave" class="label-left">Clave de Empresa 2</label>
      <input type="text" id="clave" name="clave" class="input-left" placeholder="...">
      <button type="submit" class="button">Buscar</button>
    </form>

    <form id="searchForm">
      <label for="clave" class="label-left">Clave de Empresa 3</label>
      <input type="text" id="clave" name="clave" class="input-left" placeholder="...">
      <button type="submit" class="button">Buscar</button>
    </form>
<br>

    <label for="nombre" class="label-left">Numero de Grasas</label>
    <br>
    <select name="fruits">
      <option value="nada" disabled selected>Selecciona Numero</option>
      <option value="valor-num1" class="verde1">5</option>
      <option value="valor-num2" class="azul">1</option>
      <option value="valor-num3" class="verde2">6</option>
    </select>
    <label for="nombre" class="label-left">Lista de Colores</label>
    <select name="fruits">
      <option value="nada" disabled selected>Selecciona Numero</option>
      <option value="valor-col1" class="verde1">liquido turbio de color morado</option>
      <option value="valor-col2" class="azul">liquido cristalino de color café</option>
      <option value="valor-col3" class="verde2">liquido turbio de color anaranjado</option>
    </select>
    <button type="button" class="button2">Insertar</button>
    <!--<h4 class="ficha"><b>FO-012-C2</b></h4>-->
    <h4 class="ficha">Folio:__________________</h4>
    <h3>SOLICITUD DE ANALISIS AL LABORATORIO</h3>
    <div class="mediciones">
      <table id="tablaMuestras">
        </tr>
        <tr>
          <th rowspan="3" class="parameters">PARÁMETRO</th>
          <th colspan="6" class="parameters">IDENTIFICACIÓN DE LA MUESTRA</th>
          <th rowspan="3" class="parameters">FIRMA DEL RESPONSABLE</th>
          <th rowspan="3" class="parameters">FECHA DE ENTREGA DE RESULTADOS</th>
          <th rowspan="3" class="parameters">SUPERVISÓ ANALISTA "C"</th>
        </tr>
        <tr>
          <td id="muestra1"></td>
          <td>CARACTERÍSTICAS</td>
          <td id="muestra2"></td>
          <td>CARACTERISTICAS </td>
          <td id="muestra3"></td>
          <td>CARACTERISTICAS</td>
        </tr>
        <tr class="spacer-row">
          <td class="empty-cell"></td>
          <td class="empty-cell"></td>
          <td class="empty-cell"></td>
          <td class="empty-cell"></td>
          <td class="empty-cell"></td>
          <td class="empty-cell"></td>
        </tr>
        <tr>
          <td>DBO5 (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>


        </tr>
        <tr>
          <td>DQO (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>SST (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>ST (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>G y A 1 (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>G y A 2 (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>G y A 3 (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        </tr>
        <tr>
          <td>G y A 4 (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>G y A 5 (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>


        </tr>
        <tr>
          <td>G y A 6 (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>G y A PP (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>SAAM (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>NOK (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>NAK (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>NTK (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>FENOL (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>


        </tr>
        <tr>
          <td>COLOR (U pt-Co)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>Cr+6 (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>CN-</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>P-T</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>Cu (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>Ni (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        </tr>
        <tr>
          <td>Cd (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Zn (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>


        </tr>
        <tr>
          <td>Pb (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>Cr (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>Fe (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>Ag (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>Al (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>Hg (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>As (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>Se (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>B (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>COLIFORMES FECALES NMP(100))</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>COLIFORMES TOTALES</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>pH</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        </tr>
        <tr>
          <td>SDT (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>SSe (mg/L)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>


        </tr>
        <tr>
          <td>CONDUCTIVIDAD (uS/cm)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <td>ALCALINIDAD</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>

      </table>
    </div>

</main>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  function transferirMuestra(event, num) {
    event.preventDefault(); // Evitar que se envíe el formulario

    // Obtener el valor del campo de la clave de empresa
    var clave = document.getElementById("clave" + num).value;

    // Actualizar la celda correspondiente en la tabla de identificación de la muestra
    document.getElementById("muestra" + num).textContent = clave;

    return false; // Devolver false para evitar el envío del formulario
  }
</script>
