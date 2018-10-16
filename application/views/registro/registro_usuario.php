<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
	<script src="<?= base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css"><!-- estilos personalizados -->

</head>
<body>

	<div class="form-position">	
    <fieldset class="form-group">
        <legend>Formulario de registro</legend>
        <?php echo form_open("registrousuario/recibedatosregistro") ?>

        <?php
        	$nombre = array(
        		'name' => 'nom',
        		'placeholder' => 'Ingresar nombre',
        		'class' => 'form-control',
        		'required' => true
        	);

        	$options = array(
				'cc' => 'Cedula de ciudadanía',
				'ce' => 'Cedula de extrangería'        		
        	);

        	$numdocumento = array(
        		'name' => 'num',
        		'placeholder' => 'Ingresar documento',
        		'class' => 'form-control',
        		'required' => true
        	);

        	$email = array(
        		'name' => 'correo',
        		'placeholder' => 'Ingresar correo',
        		'class' => 'form-control',
        		'required' => true
        	);  

        	$telefono = array(
        		'name' => 'tel',
        		'placeholder' => 'Ingresar telefono',
        		'class' => 'form-control',
        		'required' => true
        	);        	      	        	

        ?>

        <table>
            <tr>
                <td>
                    <?php echo form_label('Nombre completo: ', 'nombre') ?>
                </td>
                <td>
                    <?php echo form_input($nombre)?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo form_label('Tipo de documento: ', 'tipo documento') ?>
                </td>
                <td>
					<?php echo form_dropdown('doc',$options,'cc','class="form-control"');?>
                </td>
            </tr>  
            <tr>
                <td>
                    <?php echo form_label('Numero de documento: ', 'numero documento') ?>
                </td>
                <td>
                    <?php echo form_input($numdocumento)?>
                </td>
            </tr>                      
            <tr>
                <td>
                    <?php echo form_label('Email: ', 'email') ?>
                </td>
                <td>
                    <?php echo form_input($email)?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo form_label('Teléfono: ', 'telefono') ?>
                </td>
                <td>
                    <?php echo form_input($telefono)?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"></font>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn btn-info" value="Registrarme" title="Registrarme" />
                    <button class="btn btn-warning" value="Registrar" title="Regresar"><a href="<?= base_url();?>index.php/dashboardusuario">Regresar</button>                    
                </td>
            </tr>
        </table>
        <?php echo form_close() ?>
    </fieldset>
   </div> 
</body>
</html>