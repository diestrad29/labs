<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lista Servicios</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
	<script src="<?= base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css"><!-- estilos personalizados -->

</head>
<body>

	<h1 align="center">Lista de servicios</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Descripción</th>
      <th scope="col">Soporte</th>
      <th scope="col">Departamento</th>
      <th scope="col">Ciudad</th>
    </tr>
  </thead>
  <tbody>

	<?php

	foreach ($servicios->result() as $datos) {?>

		 <tr>
	      <th scope="row"><?= $datos->id ?></th>
	      <td><?= $datos->fecha ?></td>
	      <td><?= $datos->descripcion ?></td>
	      <td><?= $datos->soporte ?></td>
	      <td><?= $datos->departamento ?></td>
	      <td><?= $datos->ciudad ?></td>
	    </tr>
	<?php }?>

  </tbody>
</table>

<div align="center"><button class="btn btn-warning" value="Registrar" title="Regresar"><a href="<?= base_url();?>index.php/dashboardusuario">Regresar</button></div>

</body>
</html>