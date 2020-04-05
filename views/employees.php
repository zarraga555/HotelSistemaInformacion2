<?php

session_start();
if (isset($_SESSION['usuario'])) {

?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Hotel - Dashboard</title>
        <link rel="icon" href="../img/favicon.ico" type="image/png">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
        <link href="../css/estilos.css" rel="stylesheet">

    </head>

    <body>



        <div class="wrapper">
            <div class="slid">
                <img src="img/favicon-96x96.png" alt="">
                <ul class="sidebar">

                    <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                    <li><a href="checkin.php"><i class="fas fa-user"></i>Check-in</a></li>
                    <li><a href="checkout.php"><i class="fas fa-walking"></i>Check-Out</a></li>
                    <li><a href="employees.php"><i class="fas fa-address-card"></i>Empleados</a></li>
                    <li><a href="clients.php"><i class="fas fa-restroom"></i>Clientes</a></li>
                    <li><a href="rooms.php"><i class="fas fa-hotel"></i>Habitaciones</a></li>
                    <li><a href="products.php"><i class="fas fa-boxes"></i>Productos</a></li>
                    <li><a href="suppliers.php"><i class="fas fa-pallet"></i>Proveedores</a></li>
                    <li><a href="reports.php"><i class="fas fa-file-chart-pie"></i>Reportes</a></li>
                    <li><span> <i class="fas fa-parachute-box"></i>Otros Servicios</span>
                        <ul class="submenu">
                            <li><a href="employeesDelete.php"><i class="fas fa-address-card"></i>Empleados Eliminados</a></li>
                            <li><a href="clientsDelete.php"><i class="fas fa-restroom"></i>Clientes Eliminados</a></li>
                            <li><a href="roomsDelete.php"><i class="fas fa-hotel"></i>Habitaciones Eliminados</a></li>
                            <li><a href="roomsPisoyTipo.php"><i class="fas fa-hotel"></i>Agregar Pisos y Tipos </a></li>
                            <li><a href="productsDelete.php"><i class="fas fa-boxes"></i>Productos Eliminados</a></li>
                            <li><a href="suppliersDelete.php"><i class="fas fa-pallet"></i>Proveedores Eliminados</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="main_content">
                <nav class="header">
                    <ul class="navTop">
                        <li><span><?php
                                    echo " $_SESSION[usuario]";
                                    ?></span></li>
                        <div class="separador"></div>
                        <li>
                            <form method="post" action="../controller/exit.php">
                                <button name="txtSalir" class="btn btn-primary btn-user btn-block">Cerrar Sesion</button>
                            </form>
                        </li>
                    </ul>
                </nav>
                <!--Esta etiqueta es posible que me la lleve a otro lado-->
                <div class="info cointainer justify-content-center">
                    <div class="title-container">
                        <h1>Empleados</h1>
                    </div>
                    <div class="buton-container">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-user " data-toggle="modal" data-target="#exampleModal">
                            Agregar Empleado
                        </button>

                        <!-- INICIO DE MODAL DE AGREGADO DE DATOS Modal Agregar datos-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Empleado</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="../controller/Employee.php" method="post">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="ci">C.I / DNI</label>
                                                <input type="text" class="form-control" name="ci" pattern="[0-9_-]{1,15}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nombre">Nombre Completo</label>
                                                <input type="text" class="form-control" name="nombre" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="direccion">Sexo</label>
                                                <select class="form-control" name="sexoSelecionar">
                                                    <option value="">Seleccionar Opcion</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">Telefono</label>
                                                <input type="number" class="form-control" name="telefono" pattern="[0-9]{1,15}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">Correo Electronico</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha">Fecha de Nacimiento</label>
                                                <input type="date" class="form-control" name="fechaNacimiento" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nacionalidad">Nacionalidad</label>
                                                <select class="form-control" name="nacionalidadSelect">
                                                    <option value="">Seleccionar Opcion</option>
                                                    <option value="Afganistán">Afganistán</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Alemania">Alemania</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguila">Anguila</option>
                                                    <option value="Antártida">Antártida</option>
                                                    <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                                    <option value="Antillas holandesas">Antillas holandesas</option>
                                                    <option value="Arabia Saudí">Arabia Saudí</option>
                                                    <option value="Argelia">Argelia</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaiyán">Azerbaiyán</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrein">Bahrein</option>
                                                    <option value="Bangladesh" id="BD">Bangladesh</option>
                                                    <option value="Barbados" id="BB">Barbados</option>
                                                    <option value="Bélgica" id="BE">Bélgica</option>
                                                    <option value="Belice" id="BZ">Belice</option>
                                                    <option value="Benín" id="BJ">Benín</option>
                                                    <option value="Bermudas" id="BM">Bermudas</option>
                                                    <option value="Bhután" id="BT">Bhután</option>
                                                    <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                                    <option value="Birmania" id="MM">Birmania</option>
                                                    <option value="Bolivia" id="BO">Bolivia</option>
                                                    <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                                    <option value="Botsuana" id="BW">Botsuana</option>
                                                    <option value="Brasil" id="BR">Brasil</option>
                                                    <option value="Brunei" id="BN">Brunei</option>
                                                    <option value="Bulgaria" id="BG">Bulgaria</option>
                                                    <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                                    <option value="Burundi" id="BI">Burundi</option>
                                                    <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                                    <option value="Camboya" id="KH">Camboya</option>
                                                    <option value="Camerún" id="CM">Camerún</option>
                                                    <option value="Canadá" id="CA">Canadá</option>
                                                    <option value="Chad" id="TD">Chad</option>
                                                    <option value="Chile" id="CL">Chile</option>
                                                    <option value="China" id="CN">China</option>
                                                    <option value="Chipre" id="CY">Chipre</option>
                                                    <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                                    <option value="Colombia" id="CO">Colombia</option>
                                                    <option value="Comores" id="KM">Comores</option>
                                                    <option value="Congo" id="CG">Congo</option>
                                                    <option value="Corea" id="KR">Corea</option>
                                                    <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                                    <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                                    <option value="Costa Rica" id="CR">Costa Rica</option>
                                                    <option value="Croacia" id="HR">Croacia</option>
                                                    <option value="Cuba" id="CU">Cuba</option>
                                                    <option value="Dinamarca" id="DK">Dinamarca</option>
                                                    <option value="Djibouri" id="DJ">Djibouri</option>
                                                    <option value="Dominica" id="DM">Dominica</option>
                                                    <option value="Ecuador" id="EC">Ecuador</option>
                                                    <option value="Egipto" id="EG">Egipto</option>
                                                    <option value="El Salvador" id="SV">El Salvador</option>
                                                    <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                                    <option value="Eritrea" id="ER">Eritrea</option>
                                                    <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                                    <option value="Eslovenia" id="SI">Eslovenia</option>
                                                    <option value="España" id="ES">España</option>
                                                    <option value="Estados Unidos" id="US">Estados Unidos</option>
                                                    <option value="Estonia" id="EE">Estonia</option>
                                                    <option value="Etiopia">Etiopía</option>
                                                    <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                                    <option value="Filipinas" id="PH">Filipinas</option>
                                                    <option value="Finlandia" id="FI">Finlandia</option>
                                                    <option value="Francia" id="FR">Francia</option>
                                                    <option value="Gabón" id="GA">Gabón</option>
                                                    <option value="Gambia" id="GM">Gambia</option>
                                                    <option value="Georgia" id="GE">Georgia</option>
                                                    <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                                    <option value="Ghana" id="GH">Ghana</option>
                                                    <option value="Gibraltar" id="GI">Gibraltar</option>
                                                    <option value="Granada" id="GD">Granada</option>
                                                    <option value="Grecia" id="GR">Grecia</option>
                                                    <option value="Groenlandia" id="GL">Groenlandia</option>
                                                    <option value="Guadalupe" id="GP">Guadalupe</option>
                                                    <option value="Guam" id="GU">Guam</option>
                                                    <option value="Guatemala" id="GT">Guatemala</option>
                                                    <option value="Guayana" id="GY">Guayana</option>
                                                    <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                                    <option value="Guinea" id="GN">Guinea</option>
                                                    <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                                    <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                                    <option value="Haití" id="HT">Haití</option>
                                                    <option value="Holanda" id="NL">Holanda</option>
                                                    <option value="Honduras" id="HN">Honduras</option>
                                                    <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                                    <option value="Hungría" id="HU">Hungría</option>
                                                    <option value="India" id="IN">India</option>
                                                    <option value="Indonesia" id="ID">Indonesia</option>
                                                    <option value="Irak" id="IQ">Irak</option>
                                                    <option value="Irán" id="IR">Irán</option>
                                                    <option value="Irlanda" id="IE">Irlanda</option>
                                                    <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                                    <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                                    <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                                    <option value="Islandia" id="IS">Islandia</option>
                                                    <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                                    <option value="Islas Cook" id="CK">Islas Cook</option>
                                                    <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                                    <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                                    <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                                    <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                                    <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                                    <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                                    <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                                    <option value="Islas Palau" id="PW">Islas Palau</option>
                                                    <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                                    <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                                    <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                                    <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                                    <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                                    <option value="Israel" id="IL">Israel</option>
                                                    <option value="Italia" id="IT">Italia</option>
                                                    <option value="Jamaica" id="JM">Jamaica</option>
                                                    <option value="Japón" id="JP">Japón</option>
                                                    <option value="Jordania" id="JO">Jordania</option>
                                                    <option value="Kazajistán" id="KZ">Kazajistán</option>
                                                    <option value="Kenia" id="KE">Kenia</option>
                                                    <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                                    <option value="Kiribati" id="KI">Kiribati</option>
                                                    <option value="Kuwait" id="KW">Kuwait</option>
                                                    <option value="Laos" id="LA">Laos</option>
                                                    <option value="Lesoto" id="LS">Lesoto</option>
                                                    <option value="Letonia" id="LV">Letonia</option>
                                                    <option value="Líbano" id="LB">Líbano</option>
                                                    <option value="Liberia" id="LR">Liberia</option>
                                                    <option value="Libia" id="LY">Libia</option>
                                                    <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                                    <option value="Lituania" id="LT">Lituania</option>
                                                    <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                                    <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                                    <option value="Madagascar" id="MG">Madagascar</option>
                                                    <option value="Malasia" id="MY">Malasia</option>
                                                    <option value="Malawi" id="MW">Malawi</option>
                                                    <option value="Maldivas" id="MV">Maldivas</option>
                                                    <option value="Malí" id="ML">Malí</option>
                                                    <option value="Malta" id="MT">Malta</option>
                                                    <option value="Marruecos" id="MA">Marruecos</option>
                                                    <option value="Martinica" id="MQ">Martinica</option>
                                                    <option value="Mauricio" id="MU">Mauricio</option>
                                                    <option value="Mauritania" id="MR">Mauritania</option>
                                                    <option value="Mayotte" id="YT">Mayotte</option>
                                                    <option value="México" id="MX">México</option>
                                                    <option value="Micronesia" id="FM">Micronesia</option>
                                                    <option value="Moldavia" id="MD">Moldavia</option>
                                                    <option value="Mónaco" id="MC">Mónaco</option>
                                                    <option value="Mongolia" id="MN">Mongolia</option>
                                                    <option value="Montserrat" id="MS">Montserrat</option>
                                                    <option value="Mozambique" id="MZ">Mozambique</option>
                                                    <option value="Namibia" id="NA">Namibia</option>
                                                    <option value="Nauru" id="NR">Nauru</option>
                                                    <option value="Nepal" id="NP">Nepal</option>
                                                    <option value="Nicaragua" id="NI">Nicaragua</option>
                                                    <option value="Níger" id="NE">Níger</option>
                                                    <option value="Nigeria" id="NG">Nigeria</option>
                                                    <option value="Niue" id="NU">Niue</option>
                                                    <option value="Norfolk" id="NF">Norfolk</option>
                                                    <option value="Noruega" id="NO">Noruega</option>
                                                    <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                                    <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                                    <option value="Omán" id="OM">Omán</option>
                                                    <option value="Panamá" id="PA">Panamá</option>
                                                    <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                                    <option value="Paquistán" id="PK">Paquistán</option>
                                                    <option value="Paraguay" id="PY">Paraguay</option>
                                                    <option value="Perú" id="PE">Perú</option>
                                                    <option value="Pitcairn" id="PN">Pitcairn</option>
                                                    <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                                    <option value="Polonia" id="PL">Polonia</option>
                                                    <option value="Portugal" id="PT">Portugal</option>
                                                    <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                                    <option value="Qatar" id="QA">Qatar</option>
                                                    <option value="Reino Unido" id="UK">Reino Unido</option>
                                                    <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                                    <option value="República Checa" id="CZ">República Checa</option>
                                                    <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                                    <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                                    <option value="República Dominicana" id="DO">República Dominicana</option>
                                                    <option value="Reunión" id="RE">Reunión</option>
                                                    <option value="Ruanda" id="RW">Ruanda</option>
                                                    <option value="Rumania" id="RO">Rumania</option>
                                                    <option value="Rusia" id="RU">Rusia</option>
                                                    <option value="Samoa" id="WS">Samoa</option>
                                                    <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                                    <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                                    <option value="San Marino" id="SM">San Marino</option>
                                                    <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                                    <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                                    <option value="Santa Helena" id="SH">Santa Helena</option>
                                                    <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                                    <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                                    <option value="Senegal" id="SN">Senegal</option>
                                                    <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                                    <option value="Sychelles" id="SC">Seychelles</option>
                                                    <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                                    <option value="Singapur" id="SG">Singapur</option>
                                                    <option value="Siria" id="SY">Siria</option>
                                                    <option value="Somalia" id="SO">Somalia</option>
                                                    <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                                    <option value="Suazilandia" id="SZ">Suazilandia</option>
                                                    <option value="Sudán" id="SD">Sudán</option>
                                                    <option value="Suecia" id="SE">Suecia</option>
                                                    <option value="Suiza" id="CH">Suiza</option>
                                                    <option value="Surinam" id="SR">Surinam</option>
                                                    <option value="Svalbard" id="SJ">Svalbard</option>
                                                    <option value="Tailandia" id="TH">Tailandia</option>
                                                    <option value="Taiwán" id="TW">Taiwán</option>
                                                    <option value="Tanzania" id="TZ">Tanzania</option>
                                                    <option value="Tayikistán" id="TJ">Tayikistán</option>
                                                    <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                                    <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                                    <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                                    <option value="Togo" id="TG">Togo</option>
                                                    <option value="Tonga" id="TO">Tonga</option>
                                                    <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                                    <option value="Túnez" id="TN">Túnez</option>
                                                    <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                                    <option value="Turquía" id="TR">Turquía</option>
                                                    <option value="Tuvalu" id="TV">Tuvalu</option>
                                                    <option value="Ucrania" id="UA">Ucrania</option>
                                                    <option value="Uganda" id="UG">Uganda</option>
                                                    <option value="Uruguay" id="UY">Uruguay</option>
                                                    <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                                    <option value="Vanuatu" id="VU">Vanuatu</option>
                                                    <option value="Venezuela" id="VE">Venezuela</option>
                                                    <option value="Vietnam" id="VN">Vietnam</option>
                                                    <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                                    <option value="Yemen" id="YE">Yemen</option>
                                                    <option value="Zambia" id="ZM">Zambia</option>
                                                    <option value="Zimbabue" id="ZW">Zimbabue</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="salario">Salario en Bs</label>
                                                <input type="number" class="form-control" name="salario" required>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-danger" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-success btn-success" name="btnGuardar">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FINAL DE MODAL DE AGREGADO -->



                    <!-- INICIO DE MODAL DE MOFICACION DE DATOS  Modal Modificar datos-->
                    <div class="modal fade" id="exampleModalM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Empleado</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="../controller/EmployeeEdita.php" method="post">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="editarCi">C.I / DNI</label>
                                            <input type="text" class="form-control" name="editarCi" readonly id="editarCi">
                                        </div>
                                        <div class="form-group">
                                            <label for="editarNombre">Nombre Completo</label>
                                            <input type="text" class="form-control" name="editarNombre" id="editarNombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="sexo">Sexo</label>
                                            <select class="form-control" id="EditarsexoSelecionar" name="EditarsexoSelecionar">
                                                <option value="">Seleccionar Opcion</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="editarTelefono">Telefono</label>
                                            <input type="number" class="form-control" name="editarTelefono" pattern="[0-9_-]{1,15}" id="editarTelefono" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editarEmail">Correo Electronico</label>
                                            <input type="email" class="form-control" name="EditarEmail" id="EditarEmail" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="EditarFechaNacimiento">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control" id="EditarFechaNacimiento" name="EditarFechaNacimiento" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nacionalidad">Nacionalidad</label>
                                            <select class="form-control" id="Editarnacionalidad" name="Editarnacionalidad">
                                                <option value="">Seleccionar Opcion</option>
                                                <option value="Afganistán" id="AF">Afganistán</option>
                                                <option value="Albania" id="AL">Albania</option>
                                                <option value="Alemania" id="DE">Alemania</option>
                                                <option value="Andorra" id="AD">Andorra</option>
                                                <option value="Angola" id="AO">Angola</option>
                                                <option value="Anguila" id="AI">Anguila</option>
                                                <option value="Antártida" id="AQ">Antártida</option>
                                                <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                                <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                                <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                                <option value="Argelia" id="DZ">Argelia</option>
                                                <option value="Argentina" id="AR">Argentina</option>
                                                <option value="Armenia" id="AM">Armenia</option>
                                                <option value="Aruba" id="AW">Aruba</option>
                                                <option value="Australia" id="AU">Australia</option>
                                                <option value="Austria" id="AT">Austria</option>
                                                <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                                <option value="Bahamas" id="BS">Bahamas</option>
                                                <option value="Bahrein" id="BH">Bahrein</option>
                                                <option value="Bangladesh" id="BD">Bangladesh</option>
                                                <option value="Barbados" id="BB">Barbados</option>
                                                <option value="Bélgica" id="BE">Bélgica</option>
                                                <option value="Belice" id="BZ">Belice</option>
                                                <option value="Benín" id="BJ">Benín</option>
                                                <option value="Bermudas" id="BM">Bermudas</option>
                                                <option value="Bhután" id="BT">Bhután</option>
                                                <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                                <option value="Birmania" id="MM">Birmania</option>
                                                <option value="Bolivia" id="BO">Bolivia</option>
                                                <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                                <option value="Botsuana" id="BW">Botsuana</option>
                                                <option value="Brasil" id="BR">Brasil</option>
                                                <option value="Brunei" id="BN">Brunei</option>
                                                <option value="Bulgaria" id="BG">Bulgaria</option>
                                                <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                                <option value="Burundi" id="BI">Burundi</option>
                                                <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                                <option value="Camboya" id="KH">Camboya</option>
                                                <option value="Camerún" id="CM">Camerún</option>
                                                <option value="Canadá" id="CA">Canadá</option>
                                                <option value="Chad" id="TD">Chad</option>
                                                <option value="Chile" id="CL">Chile</option>
                                                <option value="China" id="CN">China</option>
                                                <option value="Chipre" id="CY">Chipre</option>
                                                <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                                <option value="Colombia" id="CO">Colombia</option>
                                                <option value="Comores" id="KM">Comores</option>
                                                <option value="Congo" id="CG">Congo</option>
                                                <option value="Corea" id="KR">Corea</option>
                                                <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                                <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                                <option value="Costa Rica" id="CR">Costa Rica</option>
                                                <option value="Croacia" id="HR">Croacia</option>
                                                <option value="Cuba" id="CU">Cuba</option>
                                                <option value="Dinamarca" id="DK">Dinamarca</option>
                                                <option value="Djibouri" id="DJ">Djibouri</option>
                                                <option value="Dominica" id="DM">Dominica</option>
                                                <option value="Ecuador" id="EC">Ecuador</option>
                                                <option value="Egipto" id="EG">Egipto</option>
                                                <option value="El Salvador" id="SV">El Salvador</option>
                                                <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                                <option value="Eritrea" id="ER">Eritrea</option>
                                                <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                                <option value="Eslovenia" id="SI">Eslovenia</option>
                                                <option value="España" id="ES">España</option>
                                                <option value="Estados Unidos" id="US">Estados Unidos</option>
                                                <option value="Estonia" id="EE">Estonia</option>
                                                <option value="c" id="ET">Etiopía</option>
                                                <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                                <option value="Filipinas" id="PH">Filipinas</option>
                                                <option value="Finlandia" id="FI">Finlandia</option>
                                                <option value="Francia" id="FR">Francia</option>
                                                <option value="Gabón" id="GA">Gabón</option>
                                                <option value="Gambia" id="GM">Gambia</option>
                                                <option value="Georgia" id="GE">Georgia</option>
                                                <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                                <option value="Ghana" id="GH">Ghana</option>
                                                <option value="Gibraltar" id="GI">Gibraltar</option>
                                                <option value="Granada" id="GD">Granada</option>
                                                <option value="Grecia" id="GR">Grecia</option>
                                                <option value="Groenlandia" id="GL">Groenlandia</option>
                                                <option value="Guadalupe" id="GP">Guadalupe</option>
                                                <option value="Guam" id="GU">Guam</option>
                                                <option value="Guatemala" id="GT">Guatemala</option>
                                                <option value="Guayana" id="GY">Guayana</option>
                                                <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                                <option value="Guinea" id="GN">Guinea</option>
                                                <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                                <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                                <option value="Haití" id="HT">Haití</option>
                                                <option value="Holanda" id="NL">Holanda</option>
                                                <option value="Honduras" id="HN">Honduras</option>
                                                <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                                <option value="Hungría" id="HU">Hungría</option>
                                                <option value="India" id="IN">India</option>
                                                <option value="Indonesia" id="ID">Indonesia</option>
                                                <option value="Irak" id="IQ">Irak</option>
                                                <option value="Irán" id="IR">Irán</option>
                                                <option value="Irlanda" id="IE">Irlanda</option>
                                                <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                                <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                                <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                                <option value="Islandia" id="IS">Islandia</option>
                                                <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                                <option value="Islas Cook" id="CK">Islas Cook</option>
                                                <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                                <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                                <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                                <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                                <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                                <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                                <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                                <option value="Islas Palau" id="PW">Islas Palau</option>
                                                <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                                <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                                <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                                <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                                <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                                <option value="Israel" id="IL">Israel</option>
                                                <option value="Italia" id="IT">Italia</option>
                                                <option value="Jamaica" id="JM">Jamaica</option>
                                                <option value="Japón" id="JP">Japón</option>
                                                <option value="Jordania" id="JO">Jordania</option>
                                                <option value="Kazajistán" id="KZ">Kazajistán</option>
                                                <option value="Kenia" id="KE">Kenia</option>
                                                <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                                <option value="Kiribati" id="KI">Kiribati</option>
                                                <option value="Kuwait" id="KW">Kuwait</option>
                                                <option value="Laos" id="LA">Laos</option>
                                                <option value="Lesoto" id="LS">Lesoto</option>
                                                <option value="Letonia" id="LV">Letonia</option>
                                                <option value="Líbano" id="LB">Líbano</option>
                                                <option value="Liberia" id="LR">Liberia</option>
                                                <option value="Libia" id="LY">Libia</option>
                                                <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                                <option value="Lituania" id="LT">Lituania</option>
                                                <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                                <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                                <option value="Madagascar" id="MG">Madagascar</option>
                                                <option value="Malasia" id="MY">Malasia</option>
                                                <option value="Malawi" id="MW">Malawi</option>
                                                <option value="Maldivas" id="MV">Maldivas</option>
                                                <option value="Malí" id="ML">Malí</option>
                                                <option value="Malta" id="MT">Malta</option>
                                                <option value="Marruecos" id="MA">Marruecos</option>
                                                <option value="Martinica" id="MQ">Martinica</option>
                                                <option value="Mauricio" id="MU">Mauricio</option>
                                                <option value="Mauritania" id="MR">Mauritania</option>
                                                <option value="Mayotte" id="YT">Mayotte</option>
                                                <option value="México" id="MX">México</option>
                                                <option value="Micronesia" id="FM">Micronesia</option>
                                                <option value="Moldavia" id="MD">Moldavia</option>
                                                <option value="Mónaco" id="MC">Mónaco</option>
                                                <option value="Mongolia" id="MN">Mongolia</option>
                                                <option value="Montserrat" id="MS">Montserrat</option>
                                                <option value="Mozambique" id="MZ">Mozambique</option>
                                                <option value="Namibia" id="NA">Namibia</option>
                                                <option value="Nauru" id="NR">Nauru</option>
                                                <option value="Nepal" id="NP">Nepal</option>
                                                <option value="Nicaragua" id="NI">Nicaragua</option>
                                                <option value="Níger" id="NE">Níger</option>
                                                <option value="Nigeria" id="NG">Nigeria</option>
                                                <option value="Niue" id="NU">Niue</option>
                                                <option value="Norfolk" id="NF">Norfolk</option>
                                                <option value="Noruega" id="NO">Noruega</option>
                                                <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                                <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                                <option value="Omán" id="OM">Omán</option>
                                                <option value="Panamá" id="PA">Panamá</option>
                                                <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                                <option value="Paquistán" id="PK">Paquistán</option>
                                                <option value="Paraguay" id="PY">Paraguay</option>
                                                <option value="Perú" id="PE">Perú</option>
                                                <option value="Pitcairn" id="PN">Pitcairn</option>
                                                <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                                <option value="Polonia" id="PL">Polonia</option>
                                                <option value="Portugal" id="PT">Portugal</option>
                                                <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                                <option value="Qatar" id="QA">Qatar</option>
                                                <option value="Reino Unido" id="UK">Reino Unido</option>
                                                <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                                <option value="República Checa" id="CZ">República Checa</option>
                                                <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                                <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                                <option value="República Dominicana" id="DO">República Dominicana</option>
                                                <option value="Reunión" id="RE">Reunión</option>
                                                <option value="Ruanda" id="RW">Ruanda</option>
                                                <option value="Rumania" id="RO">Rumania</option>
                                                <option value="Rusia" id="RU">Rusia</option>
                                                <option value="Samoa" id="WS">Samoa</option>
                                                <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                                <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                                <option value="San Marino" id="SM">San Marino</option>
                                                <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                                <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                                <option value="Santa Helena" id="SH">Santa Helena</option>
                                                <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                                <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                                <option value="Senegal" id="SN">Senegal</option>
                                                <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                                <option value="Sychelles" id="SC">Seychelles</option>
                                                <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                                <option value="Singapur" id="SG">Singapur</option>
                                                <option value="Siria" id="SY">Siria</option>
                                                <option value="Somalia" id="SO">Somalia</option>
                                                <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                                <option value="Suazilandia" id="SZ">Suazilandia</option>
                                                <option value="Sudán" id="SD">Sudán</option>
                                                <option value="Suecia" id="SE">Suecia</option>
                                                <option value="Suiza" id="CH">Suiza</option>
                                                <option value="Surinam" id="SR">Surinam</option>
                                                <option value="Svalbard" id="SJ">Svalbard</option>
                                                <option value="Tailandia" id="TH">Tailandia</option>
                                                <option value="Taiwán" id="TW">Taiwán</option>
                                                <option value="Tanzania" id="TZ">Tanzania</option>
                                                <option value="Tayikistán" id="TJ">Tayikistán</option>
                                                <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                                <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                                <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                                <option value="Togo" id="TG">Togo</option>
                                                <option value="Tonga" id="TO">Tonga</option>
                                                <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                                <option value="Túnez" id="TN">Túnez</option>
                                                <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                                <option value="Turquía" id="TR">Turquía</option>
                                                <option value="Tuvalu" id="TV">Tuvalu</option>
                                                <option value="Ucrania" id="UA">Ucrania</option>
                                                <option value="Uganda" id="UG">Uganda</option>
                                                <option value="Uruguay" id="UY">Uruguay</option>
                                                <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                                <option value="Vanuatu" id="VU">Vanuatu</option>
                                                <option value="Venezuela" id="VE">Venezuela</option>
                                                <option value="Vietnam" id="VN">Vietnam</option>
                                                <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                                <option value="Yemen" id="YE">Yemen</option>
                                                <option value="Zambia" id="ZM">Zambia</option>
                                                <option value="Zimbabue" id="ZW">Zimbabue</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="EditarSalario">Salario en Bs</label>
                                            <input type="number" class="form-control" name="EditarSalario" id="EditarSalario" required>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-danger" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-success btn-success" name="btnActualizar">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--FINAL DE MODIFICACION DE  DATOS-->


                    <!-- MODAL DE ELIMINADO LOGICO-->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Elimnar Empleado</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="../controller/EmployeeElimadoLogico.php" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" name="EliminarCi" id="EliminarCi" required readonly>
                                        ¿Estas seguro que deseas elimar el Empleado?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-danger btn-danger">Eliminar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- FINAL DEL MODAL DE ELIMINADO LOGICO-->



                    <!--MODALES DE NOTIFICACIONES-->
                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" id="toast" data-delay="2000" style="background-color:red; position: absolute; top: 100px; right: 50px; border-radius:10rem; color:white;">
                            <div class="toast-body">
                                Complete los campos vacios.
                            </div>
                        </div>
                    </div>

                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" id="toastError" data-delay="2000" style="background-color:red; position: absolute; top: 100px; right: 50px; border-radius:10rem; color:white;">
                            <div class="toast-body">
                                Datos ya ingresados.
                            </div>
                        </div>
                    </div>

                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" id="toastCorrecto" data-delay="2000" style="background-color:green; position: absolute; top: 100px; right: 50px; border-radius:10rem; color:white;">
                            <div class="toast-body">
                                Datos ingresados correctamente.
                            </div>
                        </div>
                    </div>

                    <div aria-live="polite" aria-atomic="true">
                        <div class="toast" id="toastEliminar" data-delay="2000" style="background-color:green; position: absolute; top: 100px; right: 50px; border-radius:10rem; color:white;">
                            <div class="toast-body">
                                Datos Eliminados correctamente.
                            </div>
                        </div>
                    </div>
                    <!--FIN DE LOS MODALES DE NOTIFICACIONES-->



                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <?php
                            require_once "../config/connection/connection.php";
                            $con = new conectar();
                            $conexion = $con->conexion();

                            $sql = "SELECT * FROM empleado WHERE estado = 1";
                            $result = mysqli_query($conexion, $sql);

                            ?>
                            <table id="tabla" class="table  table-condensed">
                                <tr>
                                    <td>CI / NIT</td>
                                    <td>Nombre Completo</td>
                                    <td>Sexo</td>
                                    <td>Telefono</td>
                                    <td>Email</td>
                                    <td>Cumpleaños</td>
                                    <td>Nacionalidad</td>
                                    <td>Salario</td>
                                    <td>Acciones</td>
                                </tr>
                                <tr>
                                    <?php
                                    while ($ver = mysqli_fetch_row($result)) :
                                    ?>
                                        <td><?php echo $ver[0] ?></td>
                                        <td><?php echo $ver[1] ?></td>
                                        <td><?php echo $ver[2] ?></td>
                                        <td><?php echo $ver[3] ?></td>
                                        <td><?php echo $ver[4] ?></td>
                                        <td><?php echo $ver[5] ?></td>
                                        <td><?php echo $ver[6] ?></td>
                                        <td><?php echo $ver[7] ?></td>
                                        <td>

                                            <button type="button" class="btn btn-success btn-success btn-success2 fas fa-pen" data-toggle="modal" data-target="#exampleModalM" onclick="ActualizarDatos('<?php echo $ver[0] ?>', '<?php echo $ver[1] ?>' , '<?php echo $ver[2] ?>' , '<?php echo $ver[3] ?>', '<?php echo $ver[4] ?>', '<?php echo $ver[5] ?>' , '<?php echo $ver[6] ?>' ,'<?php echo $ver[7] ?>')"></button>
                                            <button type="button" class="btn btn-danger btn-danger btn-danger2 fas fa-trash-alt" data-toggle="modal" data-target="#exampleModalCenter" onclick="EliminadoLogico('<?php echo $ver[0] ?>')"></button>

                                        </td>
                                </tr>
                            <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Hotel San Marino 2020</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script type="text/javascript">
            function ActualizarDatos(idempleado, nombre, sexo ,telefono, email, fecha, nacionalidad, salario) {
                $('#editarCi').val(idempleado);
                $('#editarNombre').val(nombre);
                $('#EditarsexoSelecionar').val(sexo);
                $('#editarTelefono').val(telefono);
                $('#EditarEmail').val(email);
                $('#EditarFechaNacimiento').val(fecha);
                $('#Editarnacionalidad').val(nacionalidad);
                $('#EditarSalario').val(salario);
            }

            function EliminadoLogico(idempleado) {
                $('#EliminarCi').val(idempleado)
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>

<?php
} else {
    header('location:../index.php');
}
?>