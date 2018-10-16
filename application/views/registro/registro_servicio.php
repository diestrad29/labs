<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registro de Servicio</title>
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
        <legend>Formulario de registro de servicio</legend>
        <?php echo form_open("registroservicio/registrarservicio") ?>

        <?php

            $options = array(
                '1' => 'Creación de empresa',            
            );


        	$nombre = array(
        		'name' => 'nomempresa',
        		'placeholder' => 'Nombre de la empresa',
        		'class' => 'form-control',
        		'required' => true
        	);

            $optionsemp = array(
                'sas' => 'SAS',
                'sa' => 'SA',
                'ltda' => 'LTDA'               
            );            

        	$numacci = array(
        		'name' => 'numacci',
        		'placeholder' => 'Numero accionistas',
        		'class' => 'form-control',
        		'required' => true
        	);

        	$ccapital = array(
        		'name' => 'capital',
        		'placeholder' => 'Cantidad de capital',
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
                    <?php echo form_dropdown('tiposervicio',$options,'1','class="form-control"');?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo form_label('Nombre empresa: ', 'nombre') ?>
                </td>
                <td>
                    <?php echo form_input($nombre)?>
                </td>
            </tr>  
            <tr>
                <td>
                    <?php echo form_label('Tipo de empresa: ', 'tipo empresa') ?>
                </td>
                <td>
                    <?php echo form_dropdown('tipoempresa',$optionsemp,'sas','class="form-control"');?>
                </td>
            </tr>  
            <tr>
                <td>
                    <?php echo form_label('Numero accionistas: ', 'numacci') ?>
                </td>
                <td>
                    <?php echo form_input($numacci)?>
                </td>
            </tr>                                            
            <tr>
                <td>
                    <?php echo form_label('Cantidad capital: ', 'ccapital') ?>
                </td>
                <td>
                    <?php echo form_input($ccapital)?>
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