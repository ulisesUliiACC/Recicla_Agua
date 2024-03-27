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
  <label for="nombre" class="label-left">Clave de Empresa</label>
  <input type="text" id="nombre" name="nombre" class="input-left" placeholder="...">
  <button type="button" class="button">Buscar</button>
  <button type="button" class="button1" onclick="window.location='{{ route('solicitud') }}'">Guardar en PDF</button>
  <img src="Logo.jpg" alt="Logo " class="image">
</header>
<main>
  <section class="hoja-campo">
    <label for="nombre" class="label-left">Numero de Empresa</label>
    <select name="numenter">
      <option value="nada" disabled selected>Selecciona Numero</option>
      <option value="valor-em1" class="verde1">240</option>
      <option value="valor-em2" class="azul">240-2</option>
      <option value="valor-em3" class="verde2">194</option>
    </select>
    <label for="nombre" class="label-left">Numero de Grasas</label>
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
      <table>
        </tr>
        <tr>
          <th rowspan="3" class="parameters">PARÁMETRO</th>
          <th colspan="6" class="parameters">IDENTIFICACIÓN DE LA MUESTRA</th>
          <th rowspan="3" class="parameters">FIRMA DEL RESPONSABLE</th>
          <th rowspan="3" class="parameters">FECHA DE ENTREGA DE RESULTADOS</th>
          <th rowspan="3" class="parameters">SUPERVISÓ ANALISTA "C"</th>
        </tr>
        <tr>
          <td></td>
          <td>CARACTERÍSTICAS</td>
          <td></td>
          <td>CARACTERISTICAS </td>
          <td></td>
          <td>CARACTERISTICAS</td>
        </tr>
        <tr class="spacer-row">
          <td class="empty-cell"></td>
          <td class="empty-cell">DE LA MUESTRA</td>
          <td class="empty-cell"></td>
          <td class="empty-cell">DE LA MUESTRA</td>
          <td class="empty-cell"></td>
          <td class="empty-cell">DE LA MUESTRA</td>
        </tr>
        <tr>
          <td>DBO5 (mg/L)</td>
          <td></td>
          <td>DELA</td>
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
