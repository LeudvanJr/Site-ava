<?php
session_start();
?>
<!DOCTYPE html>

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
<ul>
        <li class="perfil">
            <img src="images/perfil.png" alt="">
            <div class="nome-perfil"><?php echo $_SESSION['nome'];?></div>
        </li>
        <li class="box_campo">
            <form class="campo" action="">
                <img id="iconeP" src="images/icone_pesquisa.png" alt="icone de pesquisa">
                <input class="inputSearch" type="text" placeholder="Pesquisar" name="search">
            </form>
        </li>
        <li>
            <a href="index.php">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.19977 13.2001H2.3998V21.6C2.3998 22.9236 3.47622 24 4.79985 24H19.2002C20.5238 24 21.6002 22.9236 21.6002 21.6V13.2001H22.8002C23.0375 13.2001 23.2695 13.1297 23.4668 12.9978C23.6641 12.8659 23.8179 12.6785 23.9087 12.4593C23.9995 12.2401 24.0232 11.9988 23.977 11.7661C23.9307 11.5333 23.8164 11.3196 23.6487 11.1517L12.8484 0.351838C12.7371 0.240304 12.6048 0.15182 12.4592 0.0914473C12.3137 0.031075 12.1576 0 12 0C11.8424 0 11.6863 0.031075 11.5408 0.0914473C11.3952 0.15182 11.2629 0.240304 11.1516 0.351838L0.351352 11.1517C0.183577 11.3196 0.0693267 11.5333 0.0230447 11.7661C-0.0232374 11.9988 0.000526752 12.2401 0.0913327 12.4593C0.182139 12.6785 0.335909 12.8659 0.533205 12.9978C0.730502 13.1297 0.962465 13.2001 1.19977 13.2001ZM9.59995 21.6V15.6001H14.4001V21.6H9.59995ZM12 2.89701L19.2002 10.0969V15.6001L19.2014 21.6H16.8001V15.6001C16.8001 14.2765 15.7237 13.2001 14.4001 13.2001H9.59995C8.27632 13.2001 7.1999 14.2765 7.1999 15.6001V21.6H4.79985V10.0969L12 2.89701Z"
                        fill="black" />
                </svg>
                Início
            </a>
        </li>
        <li><a  href="atividades.php"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.4 24H19.2C20.5236 24 21.6 22.9236 21.6 21.6V3.6C21.6 2.2764 20.5236 1.2 19.2 1.2H16.8C16.8 0.88174 16.6736 0.576515 16.4485 0.351472C16.2235 0.126428 15.9183 0 15.6 0H6C5.68174 0 5.37652 0.126428 5.15147 0.351472C4.92643 0.576515 4.8 0.88174 4.8 1.2H2.4C1.0764 1.2 0 2.2764 0 3.6V21.6C0 22.9236 1.0764 24 2.4 24ZM2.4 3.6H4.8V6H16.8V3.6H19.2V21.6H2.4V3.6Z"
                        fill="black" />
                </svg>
                Atividades</a></li>
        <li><a href="estudos.php"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22.8 0H14.4C13.5115 0.00300939 12.6559 0.336678 12 0.936C11.3441 0.336678 10.4885 0.00300939 9.6 0H1.2C0.88174 0 0.576515 0.126428 0.351472 0.351472C0.126428 0.576515 0 0.88174 0 1.2V19.2C0 19.5183 0.126428 19.8235 0.351472 20.0485C0.576515 20.2736 0.88174 20.4 1.2 20.4H8.1096C8.7408 20.4 9.36 20.6568 9.8064 21.1032L11.1516 22.4484C11.1624 22.4592 11.1768 22.4628 11.1876 22.4736C11.2908 22.5684 11.406 22.6524 11.5404 22.7088H11.5428C11.8356 22.83 12.1644 22.83 12.4572 22.7088H12.4596C12.594 22.6524 12.7092 22.5684 12.8124 22.4736C12.8232 22.4628 12.8376 22.4592 12.8484 22.4484L14.1936 21.1032C14.6447 20.6547 15.2543 20.4021 15.8904 20.4H22.8C23.1183 20.4 23.4235 20.2736 23.6485 20.0485C23.8736 19.8235 24 19.5183 24 19.2V1.2C24 0.88174 23.8736 0.576515 23.6485 0.351472C23.4235 0.126428 23.1183 0 22.8 0ZM8.1096 18H2.4V2.4H9.6C10.2624 2.4 10.8 2.9388 10.8 3.6V18.8268C10.0049 18.2907 9.06852 18.0029 8.1096 18ZM21.6 18H15.8904C14.9316 18 13.9896 18.2952 13.2 18.8268V3.6C13.2 2.9388 13.7376 2.4 14.4 2.4H21.6V18Z"
                        fill="black" fill-opacity="0.7" />
                </svg>
                Estudos</a></li>
        <li>
            <a href="calendario.php">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.2 3.40002H5.8C3.14903 3.40002 1 5.54906 1 8.20002V20.2C1 22.851 3.14903 25 5.8 25H20.2C22.851 25 25 22.851 25 20.2V8.20002C25 5.54906 22.851 3.40002 20.2 3.40002Z"
                        stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1 10.6H25M8.2 1V5.8V1ZM17.8 1V5.8V1Z" stroke="black" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <circle cx="8.5" cy="15.5" r="1.5" fill="black" />
                    <circle cx="17.5" cy="15.5" r="1.5" fill="black" />
                    <circle cx="17.5" cy="20.5" r="1.5" fill="black" />
                    <circle cx="8.5" cy="20.5" r="1.5" fill="black" />
                </svg>

                Calendário
            </a>
        </li>
        <li><a href="cronograma.php"  class="active"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 2C1 1.44772 1.44772 1 2 1H24C24.5523 1 25 1.44772 25 2V6C25 6.55228 24.5523 7 24 7H2C1.44772 7 1 6.55228 1 6V2ZM2 16C1.44772 16 1 15.5523 1 15V11C1 10.4477 1.44772 10 2 10H6C6.55228 10 7 10.4477 7 11V15C7 15.5523 6.55228 16 6 16H2ZM11 13C10.4477 13 10 12.5523 10 12V11C10 10.4477 10.4477 10 11 10H15C15.5523 10 16 10.4477 16 11V12C16 12.5523 15.5523 13 15 13H11ZM20 17.5C19.4477 17.5 19 17.0523 19 16.5V11C19 10.4477 19.4477 10 20 10H24C24.5523 10 25 10.4477 25 11V16.5C25 17.0523 24.5523 17.5 24 17.5H20ZM11 25C10.4477 25 10 24.5523 10 24V17C10 16.4477 10.4477 16 11 16H15C15.5523 16 16 16.4477 16 17V24C16 24.5523 15.5523 25 15 25H11ZM2 25C1.44772 25 1 24.5523 1 24V20C1 19.4477 1.44772 19 2 19H6C6.55228 19 7 19.4477 7 20V24C7 24.5523 6.55228 25 6 25H2ZM20 25C19.4477 25 19 24.5523 19 24V21.5C19 20.9477 19.4477 20.5 20 20.5H24C24.5523 20.5 25 20.9477 25 21.5V24C25 24.5523 24.5523 25 24 25H20Z"
                        stroke="black" stroke-width="1.8" stroke-linejoin="round" />
                </svg>
                Cronograma</a></li>
        <li><a href="dados.php"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M64 400C64 408.8 71.16 416 80 416H480C497.7 416 512 430.3 512 448C512 465.7 497.7 480 480 480H80C35.82 480 0 444.2 0 400V64C0 46.33 14.33 32 32 32C49.67 32 64 46.33 64 64V400zM342.6 278.6C330.1 291.1 309.9 291.1 297.4 278.6L240 221.3L150.6 310.6C138.1 323.1 117.9 323.1 105.4 310.6C92.88 298.1 92.88 277.9 105.4 265.4L217.4 153.4C229.9 140.9 250.1 140.9 262.6 153.4L320 210.7L425.4 105.4C437.9 92.88 458.1 92.88 470.6 105.4C483.1 117.9 483.1 138.1 470.6 150.6L342.6 278.6z" />
                </svg>
                Dados</a></li>
        <li><a href="ajustes.php"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M495.9 166.6C499.2 175.2 496.4 184.9 489.6 191.2L446.3 230.6C447.4 238.9 448 247.4 448 256C448 264.6 447.4 273.1 446.3 281.4L489.6 320.8C496.4 327.1 499.2 336.8 495.9 345.4C491.5 357.3 486.2 368.8 480.2 379.7L475.5 387.8C468.9 398.8 461.5 409.2 453.4 419.1C447.4 426.2 437.7 428.7 428.9 425.9L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L316.7 490.7C314.7 499.7 307.7 506.1 298.5 508.5C284.7 510.8 270.5 512 255.1 512C241.5 512 227.3 510.8 213.5 508.5C204.3 506.1 197.3 499.7 195.3 490.7L182.8 433.6C167 427 152.2 418.4 138.8 408.1L83.14 425.9C74.3 428.7 64.55 426.2 58.63 419.1C50.52 409.2 43.12 398.8 36.52 387.8L31.84 379.7C25.77 368.8 20.49 357.3 16.06 345.4C12.82 336.8 15.55 327.1 22.41 320.8L65.67 281.4C64.57 273.1 64 264.6 64 256C64 247.4 64.57 238.9 65.67 230.6L22.41 191.2C15.55 184.9 12.82 175.3 16.06 166.6C20.49 154.7 25.78 143.2 31.84 132.3L36.51 124.2C43.12 113.2 50.52 102.8 58.63 92.95C64.55 85.8 74.3 83.32 83.14 86.14L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L195.3 21.33C197.3 12.25 204.3 5.04 213.5 3.51C227.3 1.201 241.5 0 256 0C270.5 0 284.7 1.201 298.5 3.51C307.7 5.04 314.7 12.25 316.7 21.33L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L428.9 86.14C437.7 83.32 447.4 85.8 453.4 92.95C461.5 102.8 468.9 113.2 475.5 124.2L480.2 132.3C486.2 143.2 491.5 154.7 495.9 166.6V166.6zM256 336C300.2 336 336 300.2 336 255.1C336 211.8 300.2 175.1 256 175.1C211.8 175.1 176 211.8 176 255.1C176 300.2 211.8 336 256 336z" />
                </svg>

                Ajustes</a></li>
                
        <li><a href="sair.php"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M534.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L434.7 224 224 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM192 96c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-53 0-96 43-96 96l0 256c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
                sair</a></li>

    </ul>

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