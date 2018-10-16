<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard Usuario</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
	<script src="<?= base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css"><!-- estilos personalizados -->

</head>
<body>

	<header class="container">
    <br>
    <div class="col-md-3  col-md-offset-6" style="padding-bottom: -100px;">
        <a class="btn btn-sm btn-default">Prueba Técnica</a>
    </div>
    <hr>
</header>
<div class="container">
    <div class="row col-md-12 text-center" style="padding-bottom: 100px;">
	    <h2>Dashboard</h2>
	</div>
    <div class="row col-md-12">
        <div class="col-md-6 text-center">
            <a href="<?= base_url();?>index.php/registrousuario" class="btn btn-lg btn-warning">Registro Usuario</a>            
            <a href="<?= base_url();?>index.php/registroservicio" class="btn btn-lg btn-primary">Registro Empresa</a><br><br>
            <a href="<?= base_url();?>index.php/registroservicio/service2" class="btn btn-lg btn-success">Registro DataCredito</a>
		    <p style="margin-top: 35px;">Registrar servicios</p>    
	    </div>
		<div class="col-md-6 text-center">
	        <a href="<?= base_url();?>index.php/listaservicios" class="btn btn-lg btn-danger">Listar</a>
	        <p style="margin-top: 35px;">Listar servicios generados</p>
	    </div>
	</div>
</div>
<footer class="container">
    <hr>
    <div class="text-left">
        <p>Prueba técnica Diego Estrada.</p>
        
    </div>
</footer>

</body>
</html>