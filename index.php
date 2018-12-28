<?php
	include("classes/conexao.class.php");
?>
<html>
    <head>
        <title>FisioHelper</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.vertical-tabs.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="tabs-sideways">
			<div class="tabs-ul">
				<ul class="nav nav-tabs tabs-left" role="tablist">
					<li class="active"><a href="#panel" data-toggle="tab"><span aria-hidden="true" class="glyphicon glyphicon-th-list"></span> Painel de Controle</a></li>
					<li><a href='#consultation' data-toggle='tab'><span aria-hidden='true' class="glyphicon glyphicon-folder-open"></span> &nbspConsultas</a></li>								
                    <li><a href='#patients' data-toggle='tab'><span aria-hidden='true' class="glyphicon glyphicon-user"></span> Pacientes</a></li>
                    <li><a href='#schedule' data-toggle='tab'><span aria-hidden='true' class="glyphicon glyphicon-calendar"></span> Agenda</a></li>		
                    <li><a href='#evolution' data-toggle='tab'><span aria-hidden='true' class="glyphicon glyphicon-stats"></span> Evolução</a></li>		
                    <li><a href='#finance' data-toggle='tab'><span aria-hidden='true' class="glyphicon glyphicon-usd"></span> Finanças</a></li>		
                    <li><a href='' data-toggle='tab'><span aria-hidden='true' class="glyphicon glyphicon-off"></span> Sair</a></li>		
                </ul>
            </div>
			<div class="tabs-tab-content">
				<div class="tab-content">
                    <?php
                        include 'classes/panel.class.php';
                        include 'classes/consultation.class.php';
                        include 'classes/patients.class.php';
                        include 'classes/schedule.class.php';
                        include 'classes/evolution.class.php';
                        include 'classes/finance.class.php';                    
                    ?>
				</div>
			</div>
		</div>
    </body>
</html>