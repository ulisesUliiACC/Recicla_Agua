$<!doctype html>
<html lang="es">
<meta charset="UTF-8">
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 0;
    }

    section {
      margin-bottom: 20px;
    }

    .mediciones {
      margin-bottom: 20px;
    }

    .mediciones table {
      width: 100%;
      border-collapse: collapse;
      font-size: 60%;
      padding: 10px;
    }

    .mediciones table th{
      border: 1px solid #000000;
    }

    .mediciones table td {
      border: 1px solid #000000;
      height: 13px;
    }

    .mediciones table td.borde-blanco {
      border-top: 1px solid white;
      border-right: 1px solid rgb(0, 0, 0);
      border-bottom: 1px solid white;
      border-left: 1px solid white;
      height: 15px;

    }

    .mediciones table td.borde-negro{
      border-top: 1px solid rgb(255, 255, 255);
      border-right: 1px solid rgb(0, 0, 0);
      border-bottom: 1px solid rgb(0, 0, 0);
      border-left: 1px solid rgb(255, 255, 255);
    }

    .chicas{
      font-size: 5px; /* Cambia el tamaño de fuente según lo necesites */
    }

    .fo{
      text-align: right; /* Alinea el texto a la derecha */
      font-size: 70%;
      font-weight: bold;
      padding-right: 20px;
    }

    .folio{
      text-align: right; /* Alinea el texto a la derecha */
      font-size: 70%;
      padding-right: 20px;
    }

    .title1{
      text-align: center;
      font-size: 100%;
      font-weight: bold;
    }
    .piedp{
      font-size: 90%
    }

    .celda-vacia {
      background-color: white; /* Color de fondo blanco */
      border: none; /* Elimina los bordes */
    }

    .void1{
      height: 30px; /* Alto de la celda */
      padding: 10px; /* Espacio interno dentro de la celda */
    }

    .borde{
      border: 3px solid #000;
    }
    .image-container img {
      position: absolute;
      top: 5%; /* Posición vertical al centro */
      left: 10%; /* Posición horizontal al centro */
      transform: translate(-50%, -50%); /* Centrar la imagen */
    }

    .space{
      width: 70px;
    }
    .adjetives{
      font-size: 70%;
      width: 70px;
    }
    .parametros{
      font-size: 70%;
      text-align: center
    }
    .supervi{
      font-size: 70%;
    }
    .invisible{
      border: 1px solid white;
    }
    .parametros1{
      font-size: 70%;
      text-align: center
    }
    .parametros2{
      font-size: 70%;
    }
  </style>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitud de Analisis al Laboratorio</title>
</head>
<body>
<!--<div class="borde">-->
<div class="image-container">
  <img src="assets\reci.png" alt="" width="80px" height="45px">
</div>
<div class="fo">FO-012-C2</div>
<div class="folio">Folio: __________________</div>
<div class="title1">SOLICITUD DE ANÁLISIS AL LABORATORIO</div>

<div class="mediciones">
  <table>
    <tr>
      <td colspan="7" class="borde-blanco"></td>
      <td colspan="3" class="parametros1">PARAMETROS</td>
    </tr>
    <tr>
      <td colspan="7" class="borde-blanco"></td>
      <td colspan="3" class="parametros2">DETERMINAR:</td>
    </tr>
    <tr>
      <td colspan="7" class="borde-negro"></td>
      <td colspan="3" class="parametros2">NO DETERMINAR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_ _</td>
    </tr>
    <tr>
      <th rowspan="3" class="marcar">PARÁMETRO</th>
      <th colspan="6" class="marcar">IDENTIFICACION</th>
      <th rowspan="3" class="supervi">FIRMA DEL RESPONSABLE</th>
      <th rowspan="3" class="supervi">FECHA DE ENTREGA DE RESULTADOS</th>
      <th rowspan="3" class="supervi">SUPERVISÓ ANALISTA "C"</th>
    </tr>
    <tr>
      <td class="space"></td>
      <td class="adjetives">CARACTERÍSTICAS</td>
      <td class="space"></td>
      <td class="adjetives">CARACTERISTICAS </td>
      <td class="space"></td>
      <td class="adjetives">CARACTERISTICAS</td>
    </tr>
    <tr>
      <td></td>
      <td>DE LA MUESTRA</td>
      <td></td>
      <td>DE LA MUESTRA</td>
      <td></td>
      <td>DE LA MUESTRA</td>

    </tr>
    <tr>
      <td class="parametros">DBO5 (mg/L)</td>
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
      <td class="parametros">DQO (mg/L)</td>
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
      <td class="parametros">SST (mg/L)</td>
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
      <td class="parametros">ST (mg/L)</td>
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
      <td class="parametros">G y A 1 (mg/L)</td>
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
      <td class="parametros">G y A 2 (mg/L)</td>
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
      <td class="parametros">G y A 3 (mg/L)</td>
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
      <td class="parametros">G y A 4 (mg/L)</td>
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
      <td class="parametros">G y A 5 (mg/L)</td>
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
      <td class="parametros">G y A 6 (mg/L)</td>
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
      <td class="parametros">G y A PP (mg/L)</td>
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
      <td class="parametros">SAAM (mg/L)</td>
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
      <td class="parametros">NOK (mg/L)</td>
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
      <td class="parametros">NAK (mg/L)</td>
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
      <td class="parametros">NTK (mg/L)</td>
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
      <td class="parametros">FENOL (mg/L)</td>
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
      <td class="parametros">COLOR (U pt-Co)</td>
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
      <td class="parametros">Cr+6 (mg/L)</td>
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
      <td class="parametros">CN-</td>
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
      <td class="parametros">P-T</td>
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
      <td class="parametros">Cu (mg/L)</td>
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
      <td class="parametros">Ni (mg/L)</td>
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
      <td class="parametros">Cd (mg/L)</td>
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
      <td class="parametros">Zn (mg/L)</td>
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
      <td class="parametros">Pb (mg/L)</td>
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
      <td class="parametros">Cr (mg/L)</td>
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
      <td class="parametros">Fe (mg/L)</td>
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
      <td class="parametros">Ag (mg/L)</td>
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
      <td class="parametros">Al (mg/L)</td>
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
      <td class="parametros">Hg (mg/L)</td>
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
      <td class="parametros">As (mg/L)</td>
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
      <td class="parametros">Se (mg/L)</td>
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
      <td class="parametros">B (mg/L)</td>
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
      <td class="parametros">COLIFORMES FECALES NMP(100))</td>
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
      <td class="parametros">COLIFORMES TOTALES</td>
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
      <td class="parametros">pH</td>
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
      <td class="parametros">SDT (mg/L)</td>
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
      <td class="parametros">SSe (mg/L)</td>
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
      <td class="parametros">CONDUCTIVIDAD (uS/cm)</td>
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
      <td class="parametros">ALCALINIDAD</td>
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
      <th colspan="5">INGRESA MUESTRAS AL LABORATORIO</th>
      <th colspan="5">REVISÓ Y AUTORIZÓ</th>
    </tr>
    <tr>
      <td colspan="5" class="void1"></td>
      <td colspan="5"></td>
    </tr>
    <tr>
      <th colspan="5">NOMBRE Y FIRMA COORDINADOR DE MONITOREO</th>
      <th colspan="5">NOMBRE Y FIRMA DEL TITULAR DEL DEPARTAMENTO TÉCNICO</th>
    </tr>
    <td colspan="3">FECHA:</td>
    <td colspan="2">HORA:</td>
    <td colspan="5">FECHA:</td>

    <tr>
      <td colspan=" 10", class="chicas">
        <p>AP: AGUA POTABLE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DP: DESCARGA DE PROCESOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DCF: DESCARGA CON FENOL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CDL: DESCARGA CON CLORO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OTROS:             </p>
        <p>DS: DESCARGA DE SERVIDOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AR: AGUA RESIDUAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AR: AGUA RESIDUAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DFER: DESCARGA CON FERTILIZANTE</p>

      </td>
    </tr>
    <tr>
      <th colspan="10", class="piedp">
        Página 1 de 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de Emisión: 23-Mar-2021&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aut. Emisora: QGCCH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resp. Aut. MCA. MRG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rev. 01.Mar.2021
      </th>
    </tr>
  </table>
</div>
</body>
</html>
