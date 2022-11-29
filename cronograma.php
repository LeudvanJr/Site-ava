<?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar login!</p>";
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php
    include_once('php/barraLateral.php');
  ?>

  <div class="content">
    <h1>
      Cronograma de Aulas
    </h1>

    <div class="table-round-corner">

      <table>
        <tr>
          <th class="bottomLine">Matutino</th>
          <th class="bottomLine">Segunda</th>
          <th class="bottomLine">Terça</th>
          <th class="bottomLine">Quarta</th>
          <th class="bottomLine">Quinta</th>
          <th class="bottomLine">Sexta</th>
        </tr>

        <tr>
          <td class="bold">08:00 - 08:50</td>
          <td>RCI</td>
          <td>PJI</td>
          <td>PJI</td>
          <td>HIS</td>
          <td>LPL</td>
        </tr>
        <tr>
          <td class="bold">08:50 - 09:40</td>
          <td>RCI</td>
          <td>PJI</td>
          <td>DSM</td>
          <td>HIS</td>
          <td>LPL</td>
        </tr>
        <tr>
          <td class="bold">09:40 - 10h30</td>
          <td>LCN</td>
          <td>PJI</td>
          <td>DSM</td>
          <td>IFE</td>
          <td>LPL</td>
        </tr>
        <tr>
          <td class="bold">10:50 - 11:40</td>
          <td>LCN</td>
          <td>RMM</td>
          <td>IFE</td>
          <td> </td>
          <td>SOC</td>
        </tr>
        <tr>
          <td class="bold">11:40 - 12h30</td>
          <td>LCN</td>
          <td>RMM</td>
          <td> </td>
          <td></td>
          <td>SOC</td>
        </tr>
        <tr>
          <td class="bold">12:30 - 13h20</td>
          <td> </td>
          <td> </td>
          <td></td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <th class="bottomLine">Vespetino</th>
          <th class="bottomLine">Segunda</th>
          <th class="bottomLine">Terça</th>
          <th class="bottomLine">Quarta</th>
          <th class="bottomLine">Quinta</th>
          <th class="bottomLine">Sexta</th>
        </tr>
        <tr>
          <td class="bold">13:20 - 14:10</td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td class="bold">14:10 - 15:00</td>
          <td>MAE</td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td class="bold">15:00 - 15:50</td>
          <td>MAE</td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td class="bold">16:10 - 17:00</td>
          <td>MAE</td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td class="bold">17:00 - 17:50</td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td class="bold">17:50 - 18:40</td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <th class="bottomLine">Noturno</th>
          <th class="bottomLine">Segunda</th>
          <th class="bottomLine">Terça</th>
          <th class="bottomLine">Quarta</th>
          <th class="bottomLine">Quinta</th>
          <th class="bottomLine">Sexta</th>
        </tr>
        <tr>
          <td class="bold">18:45 - 19:30</td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td class="bold">19:30 - 20:15</td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td class="LeftRadiusTD bold">19:30 - 20:15</td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td> </td>
          <td class="RightRadiusTD"> </td>
        </tr>
      </table>
    </div>

  </div>

</body>

</html>