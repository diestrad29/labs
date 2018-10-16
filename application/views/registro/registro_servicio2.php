<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registro de Servicio 2</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
	<script src="<?= base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css"><!-- estilos personalizados -->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
    $("#categoria").change(function () {
           $("#categoria option:selected").each(function () {
            micategoria=$('#categoria').val();
            $.post("http://localhost/deleyes/index.php/selectorciudades/cargarcombo", { micategoria: micategoria}, function(data){
            $("#subcategoria").html(data);
            });            
        });
   })
});

</script>

</head>
<body>

	<div class="form-position">	
    <fieldset class="form-group">
        <legend>Formulario de registro de servicio 2</legend>
        <?php echo form_open("registroservicio/registrarservicio2") ?>

        <?php

            $options = array(
                '2' => 'Data Crédito',            
            );

        	$sucesosfecha = array(
        		'name' => 'fecha',
        		'placeholder' => 'Ingresar Fecha',
        		'class' => 'form-control',
        		'required' => true
        	);           

        	$sucesosdescripcion = array(
        		'name' => 'descripcion',
        		'placeholder' => 'Ingresar descripción',
        		'class' => 'form-control',
        		'required' => true
        	);

        	$soporte = array(
        		'name' => 'soporte',
        		'placeholder' => 'Ingresar soporte',
        		'class' => 'form-control',
        		'required' => true
        	);         	      	        	

        ?>

        <table>

            <tr>
                <td>
                    <?php echo form_label('Tipo de servicio: ', 'tipo servicio') ?>
                </td>
                <td>
                    <?php echo form_dropdown('tiposervicio',$options,'2','class="form-control"');?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo form_label('Suceso fecha: ', 'suceso fecha') ?>
                </td>
                <td>
                    <input type="date" name="fecha" class="form-control" />
                </td>
            </tr>  
            <tr>
                <td>
                    <?php echo form_label('Suceso descripción: ', 'suceso descripcion') ?>
                </td>
                <td>
                    <textarea name="descripcion" class="form-control" placeholder="Ingresar descripción"></textarea>
                </td>
            </tr>              
            <tr>
                <td>
                    <?php echo form_label('Soporte: ', 'soporte') ?>
                </td>
                <td>
                    <?php echo form_input($soporte)?>
                </td>
            </tr>                                            
            <tr>
                <td>
                    <?php echo form_label('Seleccionar departamento: ', 'seleccionar') ?>
                </td>
                <td>
                     <select name="categoria" id="categoria" class="form-control">
                        <option value="">Selecciona un departamento</option>
                        <option value="cundinamarca">Cundinamarca</option>
                        <option value="valledelcauca">Valle del cauca</option>
                        <option value="antioquia">Antioquia</option>
                    </select>
                </td>
            </tr>  
            <tr>
                <td>
                    <?php echo form_label('Seleccionar ciudad: ', 'seleccionar') ?>
                </td>
                <td>
                    <select name="subcategoria" id="subcategoria" class="form-control">
                        <option value="">Selecciona una ciudad</option>
                    </select>                    
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
                    <input type="submit" class="btn btn-info" value="Registrar" title="Registrar" />
                    <button class="btn btn-warning" value="Registrar" title="Regresar"><a href="<?= base_url();?>index.php/dashboardusuario">Regresar</button>
                </td>
            </tr>
        </table>
        <?php echo form_close() ?>
    </fieldset>
   </div> 
</body>
</html>